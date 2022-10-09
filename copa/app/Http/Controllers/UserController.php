<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

use Exception;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function register(RegisterRequest $request)
    {
        $photo = $request->file('photo');
        if($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('users', 'public');
        }

        try {
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->photo = $photo ?? 'users/copa.png' ;
            $user->status = $request->status;
            $user->profile_id = $request->profile_id;
            $user->password = bcrypt($request->password);

            $userCreated = $user->save();
        }
        catch (Exception $e) {
            //return redirect()->to('users')->with('error', 'Não foi possível criar o usuário!');
            return back()->with('error','Não foi possível cadastrar o usuário.');
        } //return redirect()->to('users')->with('success', 'O usuário foi criado com sucesso!');
        return back()->with('success','Usuário cadastrado com sucesso!');
    }

    public function update(User $user, RegisterRequest $request)
    {
        $data = array_filter($request->all());
        //dd($request);
        //exit;

        $photo = $request->file('photo');
        if($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('users', 'public');
            $data['photo'] = $photo;
        }

        try {
            if(isset($data['password'])):
                $data['password'] = bcrypt($data['password']);
            endif;
            $user->update($data);
        } catch (Exception $e) {
            //return redirect()->to('users')->with('error', 'Não foi possível atualizar o usuário!');
            return back()->with('error','Não foi possível atualizar o usuário.');
        } //return redirect()->to('users')->with('success', 'O usuário foi atualizado com sucesso!');
        return back()->with('success','Usuário atualizado com sucesso!');
    }

    public function destroy(User $user)
    {
        try {
            $update = ['deleted_at' => now()];
            $user->update($update);
        } catch (Exception $e) {
            return redirect()->to('users')->with('error', 'Não foi possível remover o usuário!');
        } return redirect()->to('users')->with('success', 'O usuário foi removido com sucesso!');
    }

    public function status(User $user)
    {
        $update = ['status' => true];
        if($user->status == true):
            $update = ['status' => false];
        endif;

        try {
            $user->update($update);
        } catch (Exception $e) {
            return redirect()->to('users')->with('error', 'Não foi possível alterar o status do usuário!');
        } return redirect()->to('users')->with('success', 'O status do usuário foi alterado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Exception;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function register(Request $request)
    {
        try {
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->status = $request->status;
            $user->profile_id = $request->profile_id;
            $user->password = bcrypt($request->password);

            $userCreated = $user->save();
        }
        catch (Exception $e) {
            return redirect()->to('users')->with('error', 'Não foi possível criar o usuário!');
        } return redirect()->to('users')->with('success', 'O usuário foi criado com sucesso!');
    }

    public function update(User $user, Request $request)
    {
        try {
            $data = array_filter($request->all());
            if(isset($data['password'])):
                $data['password'] = bcrypt($data['password']);
            endif;
            $user->update($data);
        } catch (Exception $e) {
            return redirect()->to('users')->with('error', 'Não foi possível atualizar o usuário!');
        } return redirect()->to('users')->with('success', 'O usuário foi atualizado com sucesso!');
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

<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return redirect()->to('users');
    }

    public function users(User $user)
    {
        if(\Auth::user()->profile_id != 2):
            return redirect()->to('content');
        endif;

        $obj['page'] = "Usuários";
        $obj['upd'] = ((isset($user) ? $user : []));
        $obj['profiles'] = Profile::orderBy('name', 'asc')->get();
        $obj['users'] = User::with('profile')->orderBy('first_name', 'asc')->get();
        $obj['breadcrumbItems']= [
            'Usuários' => "",
            'Listagem' => action('\App\Http\Controllers\HomeController@users', ['user'])
        ];

        return View::make('users.list')->with('obj', $obj);
    }

    public function roles()
    {
        return view('roles.list');
    }
}

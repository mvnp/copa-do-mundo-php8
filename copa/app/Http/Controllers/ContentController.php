<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $obj['page'] = "Conteúdo";
        $obj['breadcrumbItems']= [
            'Conteúdo' => "",
            'Listagem' => action('\App\Http\Controllers\ContentController@index')
        ];

        return View::make('content.index')->with('obj', $obj);
    }
}

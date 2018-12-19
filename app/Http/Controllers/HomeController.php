<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new User();
        $user->id = Auth::user()->id;
        $tipouser = 0;
        $tipo = $user->tipoUsuario()->get()->all();
        foreach ($tipo as $t){
            $tipouser = $t->id;
        }
        if($tipouser == 3){
            return redirect('/listar-edital');
        }else{
            return view('vendor.adminlte.users.admin.home');
        }

    }
}

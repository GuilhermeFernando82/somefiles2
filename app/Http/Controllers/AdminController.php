<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function __construct(){
       // $this->middleware('auth');
    }
    public function index(){
        return view('index');
    }
    public function postlogin(Request $request){


        $dados = (['email' => $request->get('email'), 'password' => $request->get('senha'),]);

        if((auth()->guard('adm')->attempt($dados)))
        {
            echo "Bem vindo, administrador ";
        }else{
            echo $dados['email']."<br>".$dados['senha'];


        }

    }
    public function login(){
        return view('login');
    }


}

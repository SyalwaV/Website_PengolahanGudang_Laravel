<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        Auth::logout();
        return view('login.login');
    }

    public function actionlogin(Request $x)
    {
        $data1 = [
            'email' => $x->input('email'),
            'password' => $x->input('password'),
            'role'=>'admin'
        ];
        $data2 = [
            'email' => $x->input('email'),
            'password' => $x->input('password'),
            'role'=>'operator'
        ];
        $data3 = [
            'email' => $x->input('email'),
            'password' => $x->input('password'),
            'role'=>'gudang'
        ];
        if(Auth::Attempt($data1) ){
            return redirect('master');
        }
        if (Auth::Attempt($data2) ){
            return redirect('datapenjualan');
        }
        if (Auth::Attempt($data3) ){
            return redirect('datagudang');
        }
    }
    public function registrasi(){
        return view('login.registrasi');
    }
    public function postregistration(Request $x)
    {
        $data = $x->all();
        User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'telp' => $data['telp'],
            'jeniskelamin' => $data['jeniskelamin'],
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("login")->withSuccess('Great! You have Success');
    }
}

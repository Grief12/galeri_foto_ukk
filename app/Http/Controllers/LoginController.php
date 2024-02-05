<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Http\Controllers\SessionnnController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //session checking
    public function setChecker(Request $req){
        $s1 = new SessionnnController;
        return $s1->sessionCheck($req);
    }
    
    //login
    public function loginView(Request $request){
        if ($this->setChecker($request)==true){
            return redirect()->intended('/home');
        } else {
            return view('login');
        }
    }

    public function loginAction(Request $req){
        $row = pengguna::firstWhere('username', $req->username) ?? [];
            $type = gettype($row);
            if ($type != "object"){
                if (count ($row) == 0){
                    return view ('login',['status' => 404]);
                }
            } else {
                if (Hash::check($req->password,$row->password)){
                    Session::put('username',$row->username);
                    Session::put('id',$row->id);
                    return redirect()->intended('/home');
                } else {
                    return view('login',['status'=> 403]);
                }
            }
    }

    //register
    public function registView(Request $req){
        if ($req->session()->get('username') !=null && $req->session()->get('uid') !=null ){
            return redirect()->intended('/home');
        } else {
            return view('/register');
        }
        
    }
    public function registAction(Request $req){
        $nm = explode ("@", $req->email);
        pengguna::create([
            'username'=>$req->username,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
            'nama_lengkap'=>$nm[0]
        ]);
        return redirect()->intended('/login');
    }

    //logout
    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->intended('/login');
    }    
}

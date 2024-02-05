<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionnnController extends Controller
{
    public function sessionCheck(){
        if (Session::get('username') == null && Session::get('id') == null) {
            return false;
        }
        else {
            return true;
        }
    }
}

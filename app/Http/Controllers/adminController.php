<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function adminlogin(Request $req){
        $user= admin::where(['email'=>$req->email])->first();
        if(!$user)
        {
            return redirect('foradmin');
        }
        else{
            $req->session()->put('admin',$user);
            return redirect('foradmin');
        }
    }
    function foradmin(){
        return redirect('foradmin');
    }
}



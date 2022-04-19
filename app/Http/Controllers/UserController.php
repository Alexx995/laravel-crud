<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $users = User::all();
        return view('user', compact('users'));
    }

    public function show($id){
        return 'user:Id:' .$id;
    }

    public function noaccess(){
        return view('noaccess');
    }

    public function post(Request $req){
        return $req->input();
    }




}

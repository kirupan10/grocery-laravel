<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user_model;

class UserController extends Controller
{
    public function LoginForm()
    {
        return view('login');
    }

    public function loginAccess(Request $request)
    {
        $username = $request->input('username');
        $pwd = $request->input('pwd');
        $data = array('username' => $username, "pwd" => $pwd);

        DB::table('login')->insert($data);

        return 'new record added. <a href = "/login" > go to login page</a>';
    }
    public function create(){
        return view('create_user');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $age = $request->input('age');

        $users = new user_model;

        $users -> name =$name;
        $users -> phone =$phone;
        $users -> age =$age;

        $users ->save();

        return "new record added ID: ".$users->id;


    }
}

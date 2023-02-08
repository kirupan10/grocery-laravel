<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user_model;

class LoginController extends Controller
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

        //DB::table('login')->insert($data);
        $user = DB::table('login')->where('username', 'pwd')->first();

        if ($user) {
            $value ='new record added. <a href = "/login" > go to login page</a>';

        }else{
            $value ='error. <a href = "/login" > go to login page</a>';
        }

        return $value;
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

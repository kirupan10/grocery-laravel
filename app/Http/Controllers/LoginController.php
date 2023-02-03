<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        DB::table('login')->insert($data);

        return 'new record added. <a href = "/login" > go to login page</a>';
    }
}

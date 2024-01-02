<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    //
    public function getUsers()
    {
        $users = DB::select('SELECT * FROM users');
        // return $users;
        return view("users", ["users" => $users]);
    }
    public function login()
    {
        return view("from");
    }

    public function insertUser(Request $request)
    {
        $login = $request->input("login");
        $email = $request->input("email");
        $password = $request->input("password");
        DB::insert('insert into users values(?,?,?)', [$login, $password, $email]);

        return redirect("/users");
    }
    public function deleteUser(Request $request)
    {
        $login = $request->input("login");
        DB::delete('DELETE FROM users WHERE login = ?', [$login]);

        return redirect("/users");
    }
}

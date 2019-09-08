<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function all() {

        $users = User::all();

        return view("/users", compact("users"));

    }

    public function detail($id) {
        $user = User::find($id);

        return view("/user", compact("user"));
    }

       public function search(Request $req) {
        $search = $req["search"];

        $users = User::where("name", "like", "%" . $search . "%")->get();

        return view("search", compact("users", "search"));

    }
}

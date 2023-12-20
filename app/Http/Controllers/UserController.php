<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index($id = null) {
        $arr = [];

        if ($id) {
            // Select a specific user if $id is provided
            $data = User::where('id', $id)->get();
        } else {
            // Select all users if $id is null
            $data = User::all();
        }

        $arr['data'] = $data;

        return view('user', $arr);
    }
}


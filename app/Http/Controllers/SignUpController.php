<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function get() {

      return view('signup');
    }

    public function post(Request $request) {

      $array['email'] = "required|email";
      $array['name'] = "required";
      $array['password'] = "required|min:4";

      $validated = $request->validate($array);
      print_r($validated);

      return view('signup');
    }


}
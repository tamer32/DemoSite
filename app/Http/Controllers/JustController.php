<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class JustController extends Controller
{

    public function register() {

      return view('Register');
    }




      protected function create(array $data)
         {
             return User::create([
                 'name' => $data['first_name'],
                 'email' => $data['email'],

                 'password' => $data['password']
             ]);
         }


}

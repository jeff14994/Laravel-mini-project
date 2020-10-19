<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //app -> http -> Controllers -> Users.php
    public function index($user){
        //echo result
        // echo "Hi, ".$user.'<br>';
        // echo "Hello from User Controller";

        //return json
        return ['name' => 'omg', 'age' => 100];

    }
}

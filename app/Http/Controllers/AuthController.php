<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[
            'nis' => '3103118094',
            'name' => 'Muhammad Garry',
            'gender' => 'Laki laki',
            'phone' => '089668285607',
            'class' => 'XII RPL 3'
        ];
    }
}

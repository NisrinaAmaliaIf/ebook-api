<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120165,
            'Name' => 'Nisrina Amalia Iffatunnisa',
            'Phone' => '081931643790',
            'Class' => 'XII RPL 5'
        ];
    }
}

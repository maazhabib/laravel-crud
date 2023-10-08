<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class view extends Controller
{
    public function showUser(){
        $users = DB::table('crud_data')->get();
        return $users;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('admin.index', ['usuarios'=>$usuarios]);
    }
}
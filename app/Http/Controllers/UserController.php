<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * index
     *
     * 
     */
    public function index()
    {
        //get users form Model
        $users = User::latest()->get();

         //passing user to view
         return view('users', compact('users'));
    }
}

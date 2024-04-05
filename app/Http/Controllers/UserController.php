<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function AfficherUsers()
    {
        return view('admin.users.users');
    }
}

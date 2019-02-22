<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users/create');
    }
    public function show(User $user)
    {
//        compact 是将user model转化为一个关联数组，然后跟视图绑定
        return view('users/show',compact('user'));
    }
}

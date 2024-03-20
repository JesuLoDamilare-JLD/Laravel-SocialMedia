<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        return $user->username;
    }
}

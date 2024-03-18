<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Import User model

class ProfilesController extends Controller
{
    public function index(\App\Models\User $user)
    {
        return view('profiles.index', compact("user"));
    }

    public function edit(\App\Models\User $user)
    {
        return view("profiles.edit", compact("user"));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            "title" => "required",
            "description" => "required",
            "url" => "url",
            "image" => "",
        ]);
        user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}

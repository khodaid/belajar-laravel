<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class usercontroller extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('user.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        dd($id);
        $user = User::find($id);

        return view('user.show', [
            'user' => $user,
        ]);
    }
}

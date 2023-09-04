<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id','=',Auth::user()->id)->get();

        return view('users.index', ['users' => $users]);
    }

    public function edit(User $iduser)
    {
        return view('users.edit', ['users' => $iduser]);
    }

    public function update(SaveUserRequest $request, User $iduser)
    {
        $iduser->update($request->validated());

        return to_route('users.index', $iduser);
    }

    public function destroy(User $iduser)
    {    
        $iduser->delete();

        return to_route('login')->with('status', 'Your profile was deleted!');
    }
}



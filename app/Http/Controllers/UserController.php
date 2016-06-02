<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function show()
    {
    }

    //TODO: Tarviiko id:tä, vai editoidaanko vaan sisäänkirjautunutta käyttäjää?
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', ['user' => $user]);
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}

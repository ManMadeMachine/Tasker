<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Storage;

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

    public function fileUpload(Request $request){
        if($request->file('picture')->isValid()){
            $user = Auth::user();
            if (empty($user->avatar_id)){
                $user->avatar_id = uniqid();
                $user->save();
            }
            
            $imageName = $user->avatar_id . '.' . $request->file('picture')->getClientOriginalExtension();
            Storage::put('avatars/' . $imageName, file_get_contents($request->file('picture')->getRealPath()));

            return 'storage/avatars/' . $imageName;
        }
    }
}

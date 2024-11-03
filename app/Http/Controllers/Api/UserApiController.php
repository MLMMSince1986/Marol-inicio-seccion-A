<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User=User::all();
        return $User;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $User=new User();
            $User->name=$request->input('name');
            $User->email=$request->input('email');
            $User->email_verified_at=$request->input('email_verified_at');
            $User->password=$request->input('password');
            $User->save();
            return $User;
           
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $User=User::find($id);
            $User->name=$request->input('name');
            $User->email=$request->input('email');
            $User->email_verified_at=$request->input('email_verified_at');
            $User->password=$request->input('password');
            $User->save();
            return $User;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User=User::find($id);
        $User->delete();
        return('Usuario Eliminado');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //These are users of the system
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('passwords.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirmPassword(Request $request, $id) {
        $old_password = $request->input('old_password');
        $user = User::find($id);
        $old_hash = Hash::make($old_password);
        if (Hash::check($old_password, $user->password)) {
            return view('passwords.change');
        } else {
            return view('passwords.edit', compact('user'));
        }
    }

    public function updatePassword(Request $request, $id) {
        $user = User::find($id);
        $password1 = $request->input('password1');
        $password2 = $request->input('password2');
        if ($password1 == $password2) {
            $password = Hash::make($password1);
            $user->password = $password;
            $user->update();
            if ($user->role == 'Student') {
                return redirect()->route('student.show', ['student' => session('user')]);
            } else if ($user->role == 'Admin'){
                return redirect()->route('admin.show', ['admin' => session('user')]);
            } else if ($user->role == 'Accountant'){
                return redirect()->route('accountant.show', ['accountant' => session('user')]);
            } else {
                return redirect()->route('superUser');
            }
        } else {
            return view('passwords.change');
        }
    }
}

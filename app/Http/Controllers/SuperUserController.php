<?php

namespace App\Http\Controllers;

use App\Models\SuperUser;
use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('role', 'Student')->get();
        $accountants = User::where('role', 'Accountant')->get();
        $courses = Course::all();
        $admins = User::where('role', 'Admin')->get();
        return view('superUser.index', compact('students','accountants','courses','admins'));
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
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function show(SuperUser $superUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperUser $superUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperUser $superUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperUser $superUser)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Accountant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountants = User::where('role', 'Accountant')->get();
        
        return view('accounts.index', compact('accountants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store accountant details
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_1' => $request->input('phone_1'),
            'phone_2' => $request->input('phone_2'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'religion' => $request->input('religion'),
            'marital_status'=> $request->input('marital_status'),
            'spouse_name' => $request->input('spouse_name'),
            'spouse_contact' => $request->input('spouse_contact'),
            'disability'  => $request->input('disability'),
            'nature_of_disability' => $request->input('nature_of_disability'),
            'role' => $request->input('role'),
            'father_name' => $request->input('father_name'),
            'father_contact' => $request->input('father_contact'),
            'mother_name' => $request->input('mother_name'),
            'mother_contact' => $request->input('mother_contact'),
            'password' => Hash::make($request->input('password')),
        ]);

        $accountant = Accountant::create([
            'user_id' => $user->id,
        ]);
        
        return redirect()->route('accounts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function show(Accountant $accountant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function edit(Accountant $accountant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accountant $accountant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accountant $accountant)
    {
        //
    }
}

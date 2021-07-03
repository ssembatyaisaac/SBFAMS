<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        //dd($students);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a new students
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store Student

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
            'password' => $request->input('password'),
        ]);

        $student = Student::create([
            'user_id' => $user->id,
            'intake' => $request->input('intake'),
            'course' => $request->input('course'),
            'optional_course' => $request->input('optional_course'),
            'delivery' => $request->input('delivery'),
            'sponsorship' => $request->input('sponsorship'),

        ]);

        $student->save();
        //dd($student);
        return redirect()->route('student.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //Show Student
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //Display edit form for students
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //Update Student Record      
        $id = $student->user_id;
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_1 = $request->input('phone_1');
        $user->phone_2 = $request->input('phone_2');
        $user->gender = $request->input('gender');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->religion = $request->input('religion');
        $user->marital_status= $request->input('marital_status');
        $user->spouse_name = $request->input('spouse_name');
        $user->spouse_contact = $request->input('spouse_contact');
        $user->disability  = $request->input('disability');
        $user->nature_of_disability = $request->input('nature_of_disability');
        $user->role = $request->input('role');
        $user->father_name = $request->input('father_name');
        $user->father_contact = $request->input('father_contact');
        $user->mother_name = $request->input('mother_name');
        $user->mother_contact = $request->input('mother_contact');
        $user->password = $request->input('password');

        $user->update();

        $student->intake = $request->input('intake');
        $student->course = $request->input('course');
        $student->optional_course = $request->input('optional_course');
        $student->delivery = $request->input('delivery');
        $student->sponsorship = $request->input('sponsorship');

        $student->update();

        return redirect()->route('student.index')
            ->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //Delete Student
        $id = $student->user_id;
        User::find($id)->delete();
        $student->delete();
        return redirect()->route('student.index');
    }
}

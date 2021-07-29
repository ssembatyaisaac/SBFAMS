<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Registration;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Database\Seeders\SuperUserSeeder;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Student::class);

        $students = Student::all();
        $registrations = Registration::where([
            ['academic_year', session('academic_year')],
            ['semster', session('semster')],
        ])->get();

        return view('students.index', compact('students', 'registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Student::class);
        //create a new students
        $courses = Course::all();
        return view('students.create', compact('courses'));
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
       $course_id = Course::firstWhere('name', $request->input('course'))->id;

       
      

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

        $user_id =  $user->id;
        $intake = $request->intake;
        $course_id = $course_id;
        $optional_course = $request->optional_course;
        $delivery = $request->delivery;
        $sponsorship = $request->sponsorship;
        $image = $request->file('file');
        if ($image == null) {
            $imageName = 'default.jpg';
        } else {
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName);
        }

        $student = new Student();
        $student->user_id = $user_id;
        $student->intake = $intake;
        $student->course_id = $course_id;
        $student->optional_course = $optional_course;
        $student->delivery = $delivery;
        $student->sponsorship = $sponsorship;
        $student->profileImage = $imageName;
        $student->save();
        return back()->with('student_added','student record has been inserted');


        $data = request()->validate([
            'profileImage'=> 'required',
        ]);
        //dd($student);
        return redirect()->route('student.create')->with('Success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $this->authorize('view', $student);
        //Show Student
        $registrations = Registration::where('student_id', $student->id)->get();
        return view('students.show', compact('student', 'registrations'));
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
        
        $user->password = Hash::make($request->input('password'));

        $user->update();

        $intake = $request->intake;
        $optional_course = $request->optional_course;
        $delivery = $request->delivery;
        $sponsorship = $request->sponsorship;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student->intake = $intake;
        $student->optional_course = $optional_course;
        $student->delivery = $delivery;
        $student->sponsorship = $sponsorship;
        $student->profileImage = $imageName;

        $student->update();

        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully.');
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

@extends('baselayout')

@section('content')

    <h1>Welcome {{$student->user->name}}</h1>
    <h2>Student Bio-Data</h2>
    <p>Name: {{$student->user->name}}</p>
    <p>Email: {{$student->user->email}}</p>
    <p>Phone_1: {{$student->user->phone_1}}</p>
    <p>Phone_2: {{$student->user->phone_2}}</p>
    <p>Gender: {{$student->user->gender}}</p>
    <p>Date Of Birth: {{$student->user->date_of_birth}}</p>
    <p>Religion: {{$student->user->religion}}</p>
    <p>Marital Status: {{$student->user->marital_status}}</p>
    <p>Spouse Name: {{$student->user->spouse_name}}</p>
    <p>Spouse Contact: {{$student->user->spouse_contact}}</p>
    <p>Disability: {{$student->user->disability}}</p>
    <p>NatureOfDisability: {{$student->user->nature_of_disability}}</p>

    <h2>Academic Details</h2>
    <p>Intake: {{$student->intake}}</p>
    <p>Course: {{$student->course}}</p>
    <p>Optional Course: {{$student->optional_course}}</p>
    <p>Mode Of Delivery: {{$student->delivery}}</p>
    <p>Sponsorship: {{$student->sponsorship}}</p>
@endsection
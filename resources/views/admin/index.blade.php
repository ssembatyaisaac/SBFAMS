@extends('baselayout')

@section('content')
    <h1>This is an admin</h1>
    <div>
        <a href="{{ route('register_student') }}">Register Student</a>
    </div>
@endsection
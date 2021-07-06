@extends('baselayout')

@section('content')
    <h1>This is a Super user</h1>
    <div>
        <p><strong> No. Of Students: </strong>{{$students->count()}}</p>
        <p><strong> No. Of Accountants: </strong>{{$accountants->count()}}</p>
        <p><strong> No. Of Admins: </strong>{{$admins->count()}}</p>
        <p><strong> No. Of Courses: </strong>{{$courses->count()}}</p>
    </div>
    <div style="display: flex; flex-direction: column;">
        <a href="{{ route('register_student') }}">Register Student</a>
        <a href="{{ route('accounts.create') }}">Register Accountant</a>
        <a href="{{ route('course.create') }}">Create Course</a>
        <a href="{{ route('admin.create') }}">Create Admin</a>
        <a href="{{ route('payment.create') }}">Register Payment</a>
    </div>
@endsection
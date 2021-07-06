@extends('baselayout')

@section('content')
    <h1>This is an admin</h1>
    <div>
        <p><strong> No. Of Students: </strong>{{$students->count()}}</p>
        <p><strong> No. Of Accountants: </strong>{{$accountants->count()}}</p>
        <p><strong> No. Of Courses: </strong>{{$courses->count()}}</p>
    </div>
    <div style="display: flex; justify-content: space-around;">
        <div style="display: flex; flex-direction: column;">
            <a href="{{ route('student.create') }}">Register Student</a>
            <a href="{{ route('accounts.create') }}">Register Accountant</a>
            <a href="{{ route('course.create') }}">Create Course</a>
        </div>
        <div class="admins">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
                @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td> {{ $admin->phone_1 }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
@extends('baselayout')

@section('content')
    <h1>This is a student</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>Intake</th>
            <th>Delivery</tr>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td><a href="{{ route('student.show' ,['student'=>$student]) }}">{{ $student->user->name }}</a></td>
            <td>{{ $student->user->email }}</td>
            <td> {{ $student->intake }}</td>
            <td>{{ $student->delivery }}</td>
            <td><a href="{{ route('student.edit',['student'=>$student]) }}">Edit</a></td>
            <td>
                <form action="{{ route('student.destroy',['student'=>$student]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
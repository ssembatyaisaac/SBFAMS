@extends('baselayout')

@section('content')
    <h1>This is are courses</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Course Code</th>
            <th>Duration</th>
        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->name }}</td>
            <td>{{ $course->code }}</td>
            <td> {{ $course->duration }}</td>
        </tr>
        @endforeach
    </table>

@endsection
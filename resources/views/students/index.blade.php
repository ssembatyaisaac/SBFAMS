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
            <td>{{ $student->user->name }}</td>
            <td>{{ $student->user->email }}</td>
            <td> {{ $student->intake }}</td>
            <td>{{ $student->delivery }}</tr>
        </tr>
        @endforeach
    </table>

@endsection
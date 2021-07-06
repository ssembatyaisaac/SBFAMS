@extends('baselayout')

@section('content')
    <h1>This is the accountant</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Numbers</th>
        </tr>
        @foreach ($accountants as $accountant)
        <tr>
            <td>{{ $accountant->name }}</td>
            <td>{{ $accountant->email }}</td>
            <td> {{ $accountant->phone_1 }} | {{ $accountant->phone_2 }}</td>
        </tr>
        @endforeach
    </table>

@endsection
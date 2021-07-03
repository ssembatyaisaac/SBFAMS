@extends('baselayout')

@section('content')
    <h1>Payment made</h1>
    <table>
        <tr>
            <th>amount</th>
            <th>academic_year</th>
            <th>semster</th>
            <th>currency</th>
            <th>mode_of_payment</th>
            <th>date_of_payment</th>
        </tr>
        @foreach ($payments as $payment)
        <tr>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->academic_year }}</td>
            <td> {{ $payment->semster }}</td>
            <td> {{ $payment->currency }}</td>
            <td> {{ $payment->mode_of_payment }}</td>
            <td> {{ $payment->date_of_payment }}</td>
        </tr>
        @endforeach
    </table>

@endsection
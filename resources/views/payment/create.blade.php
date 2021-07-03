@extends('baselayout')

@section('content')
    <h1>Register Payment</h1>
    <div>
      <div>
        <a href="{{ route('payment.index') }}">View Payments</a>
      </div>
      <form action="{{ route ('payment.store') }}" method="post">
        @csrf
        <div class="name">
          <label for="amount">Amount:</label>
          <input type="number" step="1" name="amount" id="amount">
        </div>
        
        <div class="name">
          <label for="academic_year">Academic Year:</label>
          <input type="text" name="academic_year" id="academic_year">
        </div>

        <div class="name">
          <label for="semster">Semster:</label>
          Semster I: <input type="radio" name="semster" id="semster" value="1">
          Semster II: <input type="radio" name="semster" id="semster" value="2">
        </div>

        <div class="name">
          <label for="currency">Currency:</label>
          <input type="text" name="currency" id="currency">
        </div>

        <div class="name">
          <label for="mode_of_payment">Mode of Payment:</label>
          <input type="text" name="mode_of_payment" id="mode_of_payment">
        </div>

        <button type="submit">Submit</button>

      </form>
    </div>
@endsection
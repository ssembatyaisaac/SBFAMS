@extends('baselayout')

@section('content')
    <h1>This is an admin</h1>
    <div>
      <div>
        <a href="{{ route('course.index') }}">View Courses</a>
      </div>
      <form action="{{ route ('course.store') }}" method="post">
        @csrf
        <div class="name">
          <label for="name">Course Name:</label>
          <input type="text" name="name" id="name">
        </div>
        
        <div class="name">
          <label for="code">Code:</label>
          <input type="text" name="code" id="code">
        </div>

        <div class="name">
          <label for="duration">Duration:</label>
          2 years: <input type="radio" name="duration" id="name" value="24">
          1 year: <input type="radio" name="duration" id="name" value="12">
          6 months:<input type="radio" name="duration" id="name" value="6">
          4 months:<input type="radio" name="duration" id="name" value="4">
          3 months:<input type="radio" name="duration" id="name" value="3">
        </div>

        <button type="submit">Submit</button>

      </form>
    </div>
@endsection
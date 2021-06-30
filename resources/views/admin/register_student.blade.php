@extends('baselayout')

@section('content')
    <h1>This is an admin</h1>
    <div>
      <form action="" method="post">
        @csrf
        <div class="name">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name">
        </div>
        
        <div class="name">
          <label for="Email">Email:</label>
          <input type="email" name="email" id="email">
        </div>

        <div class="name">
          <label for="phone_1">phone_1:</label>
          <input type="text" name="phone_1" id="phone_1">
        </div>

        <div class="phone_2">
          <label for="phone_2">phone_2:</label>
          <input type="text" name="phone_2" id="phone_2">
        </div>

        <div class="name">
          <label for="gender">Gender:</label>
          Male: <input type="radio" name="gender" id="name" value="Male">
          Female: <input type="radio" name="gender" id="name" value="Female">
        </div>

        <div class="name">
          <label for="dob">Date Of Birth:</label>
          <input type="date" name="dob" id="dob">
        </div>

        <div class="name">
          <label for="religion">Religion:</label>
          <input type="text" name="religion" id="religion">
        </div>

        <div class="name">
          <label for="marital_status">Marital Status:</label>
          <input type="text" name="marital_status" id="marital_status">
        </div>

        <div class="name">
          <label for="spouse_name">Spouse Name:</label>
          <input type="text" name="spouse_name" id="spouse_name">
        </div>

        <div class="name">
          <label for="spouse_contact">Spouse Contact:</label>
          <input type="text" name="spouse_contact" id="spouse_contact">
        </div>

        <div class="name">
          <label for="gender">Disability:</label>
          Yes: <input type="radio" name="gender" id="name" value="Yes">
          No: <input type="radio" name="gender" id="name" value="No">
        </div>

        <div class="name">
          <label for="nature_of_disability">Nature Of Disability:</label>
          <input type="text" name="nature_of_disability" id="nature_of_disability">
        </div>

        <input type="hidden" name="role" value="Student">

        <div class="name">
          <label for="father_name">Father's Name:</label>
          <input type="father_name" name="father_name" id="father_name">
        </div>

        <div class="name">
          <label for="father_contact">Father's Contact:</label>
          <input type="text" name="father_contact" id="father_contact">
        </div>

        <div class="name">
          <label for="mother_name">Mother's Name:</label>
          <input type="text" name="mother_name" id="mother_name">
        </div>

        <div class="name">
          <label for="mother_contact">Mother Contact:</label>
          <input type="text" name="mother_contact" id="mother_contact">
        </div>
        <button type="submit">Submit</button>

      </form>
    </div>
@endsection
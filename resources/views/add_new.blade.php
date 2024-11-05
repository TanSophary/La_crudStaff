@extends('menu')
@section('add_new')
<div class="col-md-8 mx-auto my-5 p-5 bg-light rounded shadow-sm">
    <center>
        <h1 class="display-6 text-primary fw-bold">Add New Employee</h1>
        <p class="text-muted">Fill in the details to add a new staff member</p>
    </center>

    <form action="/submitStaff" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="form-label fw-bold">Employee Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" required>
        </div>

        <div class="mb-4">
            <label for="gender" class="form-label fw-bold">Gender</label>
            <select id="gender" name="gender" class="form-select" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="position" class="form-label fw-bold">Position</label>
            <input type="text" name="position" id="position" class="form-control" placeholder="Enter position title" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="form-label fw-bold">Phone Number</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number" required>
        </div>

        <div class="mb-4">
            <label for="address" class="form-label fw-bold">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Enter full address" required>
        </div>

        <div class="mb-4">
            <label for="profile" class="form-label fw-bold">Profile Picture</label>
            <input type="file" name="profile" id="profile" class="form-control" accept="image/*" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg px-5">Submit</button>
        </div>
    </form>     
</div>
@endsection

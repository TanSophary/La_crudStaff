@extends('menu')
@section('update')
<div class="col-md-8 mx-auto my-5 p-4 bg-light rounded shadow-sm reight_model">
    <center>
        <h1 class="display-5 fw-bold text-primary">Update Employee Information</h1>
        <p class="text-muted">Employee > Update</p>
    </center>
    <div class="container my-5">
        <h2 class="text-center text-secondary">Update Details</h2>
        
        <form action="/handlUpdateStaff" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="edit_id" value="{{ $objStaff[0]->id }}">
            
            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="form-label fw-bold">Employee Name</label>
                <input type="text" name="edit_name" id="name" class="form-control rounded-pill" placeholder="Enter name" value="{{ $objStaff[0]->name }}" required>
            </div>

            <!-- Gender Field -->
            <div class="mb-4">
                <label for="gender" class="form-label fw-bold">Gender</label>
                <select id="gender" name="edit_gender" class="form-select rounded-pill">
                    <option value="male" @selected($objStaff[0]->gender == 'male')>Male</option>
                    <option value="female" @selected($objStaff[0]->gender == 'female')>Female</option>
                </select>
            </div>

            <!-- Position Field -->
            <div class="mb-4">
                <label for="position" class="form-label fw-bold">Position</label>
                <input type="text" name="edit_position" id="position" class="form-control rounded-pill" placeholder="Enter position" value="{{ $objStaff[0]->position }}" required>
            </div>

            <!-- Phone Number Field -->
            <div class="mb-4">
                <label for="phone" class="form-label fw-bold">Phone Number</label>
                <input type="text" name="edit_phone" id="phone" class="form-control rounded-pill" placeholder="Enter phone number" value="{{ $objStaff[0]->phone }}" required>
            </div>

            <!-- Address Field -->
            <div class="mb-4">
                <label for="address" class="form-label fw-bold">Address</label>
                <input type="text" name="edit_address" id="address" class="form-control rounded-pill" placeholder="Enter address" value="{{ $objStaff[0]->address }}" required>
            </div>

            <!-- Profile Image Upload -->
            <div class="mb-4">
                <label for="profile" class="form-label fw-bold">Profile Image</label>
                @if($objStaff[0]->profile)
                    <div class="mb-2">
                        <img src="{{ asset($objStaff[0]->profile) }}" alt="Current Profile Image" width="100" height="100" class="rounded-circle border border-secondary">
                    </div>
                    <input type="hidden" name="current_profile" value="{{ $objStaff[0]->profile }}">
                @endif
                <input type="file" name="profile" id="profile" class="form-control rounded-pill" placeholder="Upload new profile image">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary rounded-pill px-5">Confirm Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('menu')
@section('detail')
<div class="col-10 mx-auto my-5 p-4 bg-light rounded shadow-sm reight_model">
    <center>
        <h1 class="display-5 fw-bold text-primary">Staff Information</h1>
        <p class="text-muted">Employee > Profile</p>
    </center>
    <div class="text-end mb-4">
        <a href="/addNew" class="btn btn-success">Add New Staff</a>
    </div>
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="display-6 fw-bold">Staff Details</h2>
            <p class="lead text-muted">Complete profile of the employee, including role and responsibilities</p>
        </div>
        <div class="card mb-5 shadow">
            <div class="row g-0">
                <!-- Profile Image -->
                <div class="col-md-4 text-center d-flex align-items-center justify-content-center bg-primary bg-opacity-10 p-3">
                    <img src="{{ asset($objStaff[0]->profile) }}" class="img-fluid rounded-circle" alt="Employee Image" style="width: 250px; height: 250px;">
                </div>
                <!-- Staff Details -->
                <div class="col-md-8">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary mb-3">Overview</h3>
                        <p class="card-text text-muted">Summary of the staff member's role and key responsibilities.</p>
                        <ul class="list-group list-group-flush mt-4">
                            <li class="list-group-item"><strong>ID:</strong> {{ $objStaff[0]->id }}</li>
                            <li class="list-group-item"><strong>Name:</strong> {{ $objStaff[0]->name }}</li>
                            <li class="list-group-item"><strong>Gender:</strong> {{ $objStaff[0]->gender }}</li>
                            <li class="list-group-item"><strong>Position:</strong> {{ $objStaff[0]->position }}</li>
                            <li class="list-group-item"><strong>Phone:</strong> {{ $objStaff[0]->phone }}</li>
                            <li class="list-group-item"><strong>Address:</strong> {{ $objStaff[0]->address }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('menu')
@section('index')
<div class="col-10 mx-auto my-5 p-4 bg-light rounded shadow-sm reight_model">
    <center>
        <h1 class="display-6 mb-4" style="font-weight: 600; color: #4a4a4a;">Staff Information</h1>
    </center>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="text-muted">Employee > List</p>
        <a href="/addNew" class="btn btn-primary">Add New Staff</a>
    </div>
    <div class="container mt-4">
        <table class="table table-bordered table-hover">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($objStaff as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td class="text-center">{{ $item->gender }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td class="text-center">
                        <img src="{{ asset($item->profile) }}" alt="Profile Image" class="rounded-circle" width="50" height="50">
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="/getDetailById/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/updateStaff/{{ $item->id }}" class="btn btn-warning btn-sm">Update</a>
                            <a href="/getDelete/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

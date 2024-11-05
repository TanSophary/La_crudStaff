@extends('menu')
@section('delete')
<div class="col-md-6 mx-auto my-5 p-4 bg-light rounded shadow-sm">
    <center>
        <h1 class="display-6 text-danger fw-bold">Remove Staff</h1>
        <p class="text-muted">Are you sure you want to delete this staff member? This action cannot be undone.</p>
        
        <form action="/handleDelete" method="post" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="remove_id" class="form-label fw-bold">Staff ID</label>
                <input type="text" name="remove_id" id="remove_id" class="form-control text-center" value="{{ $id }}" readonly>
            </div>

            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-danger px-4 rounded-pill">Delete</button>
                <a href="/" class="btn btn-secondary px-4 rounded-pill">Cancel</a>
            </div>
        </form>
    </center>
</div>
@endsection

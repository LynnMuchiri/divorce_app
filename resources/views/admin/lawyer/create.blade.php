@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">Add Lawyer</h1>
    <hr />
    <form action="{{ route('admin.lawyer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class= "row mb-3">
            <div class="col">
                <input type="text" name="full_name" class="form-control" placeholder="Full Name">
            </div>
</div>
            <div class= "row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
            <div class="col">
                <input type="number" name="specialization" class="form-control" placeholder="Specialization" required>
         </div>
         <div class="col">
                <input type="number" name="experience" class="form-control" placeholder="Experience" required>
         </div>
         <div class="col">
                <input type="number" name="license" class="form-control" placeholder="License" required>
         </div>
            <div class="col">
                <input type="number" name="cases_won" class="form-control" placeholder="Cases Won" required>
         </div>
</div>
            <div class="row">
                <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
  </div>

    </form>
    @endsection
 


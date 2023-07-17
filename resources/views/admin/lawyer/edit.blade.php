@extends ('layouts.app')

@section('title', 'Edit Lawyer')

@section('contents')
<h1 class="mb-0">Edit Lawyer</h1>
<hr />
<form action="{{ route('admin.lawyer.update', $lawyer->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class= "row">
            <div class="col mb-3">
                <label class="form-label"> Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Full Name" value="{{$lawyer->full_name}}" >
            </div>
</div>
        <div class= "row">
            <div class="col mb-3">
            <label class="form-label"> Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{$lawyer->email}}">
            </div>
            <div class="col mb-3">
            <label class="form-label"> Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$lawyer->address}}">
            </div>
            
            <div class="col mb-3 ">
            <label class="form-label">Cases Won</label>
                <input type="number" name="cases_won" class="form-control" placeholder="Cases Won" value="{{$lawyer->cases_won}}" >
         </div>

</div>
<div class="row">
                <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
</div>
</form>
@endsection
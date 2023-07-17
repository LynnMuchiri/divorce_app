@extends ('layouts.app')

@section('title', 'Show Lawyer')

@section('contents')
<h1 class="mb-0">View Lawyer</h1>
<hr />
<div class= "row">
            <div class="col mb-3">
                <label class="form-label"> Full Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$lawyer->full_name}}" readonly>
            </div>
</div>
        <div class= "row">
            <div class="col mb-3">
            <label class="form-label"> Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{$lawyer->email}}" readonly>
            </div>
            <div class="col mb-3">
            <label class="form-label"> Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$lawyer->address}}" readonly>
            </div>
            
            <div class="col mb-3 ">
            <label class="form-label">Location</label>
                <input type="number" name="cases_won" class="form-control" placeholder="Cases Won" value="{{$lawyer->cases_won}}" readonly>
         </div>
</div>
<div class= "row">
            <div class="col mb-3">
            <label class="form-label"> Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{$lawyer->created_at}}" readonly>
            </div>
            <div class="col mb-3">
            <label class="form-label"> Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{$lawyer->updated_at}}" readonly>
        </div>
</div>
@endsection
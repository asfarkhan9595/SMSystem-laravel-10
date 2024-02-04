@extends('layouts.layouts')
@section('content')
    <div class="card mt-3">
        <div class="card-header">Update Student </div>
        <div class="card-body">

          <form action="{{ url('students/' . $students->id) }}" method="post" class="row">
            {!! csrf_field() !!}
            @method('PUT')
        
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" value="{{ old('name') }}"
                    class="form-control">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" value="{{ old('email') }}"
                    class="form-control">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" value="{{ old('mobile') }}"
                    class="form-control">
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="col-md-6 mb-3">
                <label for="date_of_birth">DOB</label>
                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}"
                    class="form-control">
                @error('date_of_birth')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="col-md-12 mb-3">
                <label for="address">Address</label>
                <textarea name="address" id="address" placeholder="Enter Your Address" class="form-control">{{ old('address') }}</textarea>

                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="col-md-12">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
        </form>
        

        </div>
    </div>
@endsection

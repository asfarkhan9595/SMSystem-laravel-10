@extends('layouts.layouts')
@section('content')
    <div class="card mt-3">
        <div class="card-header">Add Teachers </div>
        <div class="card-body">


            <div class="row mt-5">
            
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
    
            </div>






            <form action="{{ url('teachers') }}" method="post" class="row">
                {!! csrf_field() !!}
            
                <div class="col-md-4 mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" value="{{ old('name') }}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="col-md-4 mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" class="form-control">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="col-md-4 mb-3">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" value="{{ old('mobile') }}"
                        class="form-control">
                    @error('mobile')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
            
               
            
                <div class="col-md-6 mb-3">
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

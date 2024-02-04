@extends('layouts.layouts')
@section('content')
    <div class="card bg-light shadow p-4 rounded"">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Teacher Information</h4>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title ">Name:</h5>
                    <p class="card-text ">{{ $data->name }}</p>

                    <h5 class="card-title ">Email:</h5>
                    <p class="card-text">{{ $data->email }}</p>
                </div>

                <div class="col-md-6">
                    <h5 class="card-title ">Mobile:</h5>
                    <p class="card-text">{{ $data->mobile }}</p>

                    <h5 class="card-title ">Address:</h5>
                    <p class="card-text">{{ $data->address }}</p>

             
                </div>
            </div>

        </div>
    </div>
@endsection

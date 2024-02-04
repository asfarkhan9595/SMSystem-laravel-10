@extends('layouts.layouts')

@section('content')
  
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Student list</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ ucfirst($item->name) }}</td>
                                        <td style="white-space: pre-line;">{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
 
                                        <td>

                                            <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-outline-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form id="delete-form-{{ $item->id }}" method="POST" action="{{ url('/students/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="button" class="btn btn-danger btn-sm" title="Delete Student" onclick="showDeleteConfirmation({{ $item->id }}, '{{ url('/students/' . $item->id) }}')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
    
@endsection
@section('scripts')
  


@endsection
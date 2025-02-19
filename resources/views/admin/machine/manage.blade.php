@extends('admin.layouts.layout')

@section('admin_page_title')
    Machine List || Admin Panel
@endsection

@section('admin_layout')
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Machines List</h5>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($machines as $machine)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $machine->name }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $machine->image) }}" alt="Machine Image" width="50">
                    </td>
                    <td>
                        <span class="badge bg-{{ $machine->status == 'available' ? 'success' : 'warning' }}">
                            {{ ucfirst($machine->status) }}
                        </span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('delete.machine', $machine->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


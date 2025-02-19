@extends('admin.layouts.layout')

@section('admin_page_title')
    Create Machine || Admin Panel
@endsection

@section('admin_layout')
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Create Machine</h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('store.machine') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="name" class="fw-bold mb-2">Machine Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter machine name" required>

            <label for="image" class="fw-bold mt-3">Machine Image</label>
            <input type="file" class="form-control" name="image" required>

            <label for="status" class="fw-bold mt-3">Status</label>
            <select class="form-control" name="status">
                <option value="available" selected>Available</option>
                <option value="leased">Leased</option>
            </select>

            <button type="submit" class="btn btn-primary w-100 mt-3">Add Machine</button>
        </form>
    </div>
</div>
@endsection

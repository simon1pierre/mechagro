@extends('admin.layouts.layout')
@section('admin_page_title')
Manage Users || Admin Panel
@endsection
@section('admin_layout')
<div class="card">
        <div class="card-header">
                <h5 class="card-title mb-0">Edit User</h5>
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
                <form action="{{ route('update.user', $user_info->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="user_name" class="fw-bold mb-2">Edit user detail</label>
                        <input type="text" class="form-control"name="name" value="{{ $user_info->name }}">
                        <br>
                        <input type="text" class="form-control"name="email" value="{{ $user_info->email }}">

                        <button type="submit" class="btn btn-primary w-100 mt-3">Edit User</button>
                </form>
	</div>
</div>
@endsection
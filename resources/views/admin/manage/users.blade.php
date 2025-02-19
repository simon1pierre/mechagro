@extends('admin.layouts.layout')
@section('admin_page_title')
Manage Users || Admin Panel
@endsection
@section('admin_layout')
<div class="card">
        <div class="card-header">
                <h5 class="card-title mb-0">All Users</h5>
        </div>
        @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                @if($user->role == 0)
                                                <td>Admin</td>
                                                @elseif($user->role == 1)
                                                <td>Farmer</td>
                                                @else
                                                <td>User</td>
                                                @endif
                                                <td>
                                                        <a href="{{ route('show.user', $user->id) }}" class="btn btn-info">Edit</a>
                                                        <form action="{{ route('delete.user', $user->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" value="Delete" class="btn btn-danger" >
                                                        
                                                        </form>
                                        </td>
                                        </tr>
                                        @endforeach
                                </tbody>

                        </table>
                </div>
	</div>
</div>
@endsection
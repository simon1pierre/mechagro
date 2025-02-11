@extends('admin.layouts.layout')
@section('admin_page_title')
     Manage || Category
@endsection
@section('admin_layout')
<div class="card">
        <div class="card-header">
                <h5 class="card-title mb-0">All Categories</h5>
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
                                                <th>Category Name</th>
                                                <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        @foreach($categories as $cat)
                                        <tr>
                                                <td>{{$cat->id}}</td>
                                                <td>{{$cat->category_name}}</td>
                                                <td>
                                                        <a href="{{ route('show.cat', $cat->id) }}" class="btn btn-info">Edit</a>
                                                        <form action="{{ route('delete.cat', $cat->id) }}" method="POST">
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
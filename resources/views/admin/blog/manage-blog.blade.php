@extends('admin.master')
@section('title')
    Manage-Blog
@endsection
@section('body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>{{ Session::get('message') }}</h4>
            <h6 class="m-0 font-weight-bold text-primary">BLOG-DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Blog Title</th>
                        <th>Blog Image</th>
                        <th>Blog Short Description</th>
                        <th>Blog Long Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($blogs as $blog)

                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$blog->category_name}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td><img src="{{ asset($blog->blog_image) }}" width="100" height="150"></td>
                            <td>{{$blog->blog_short_description}}</td>
                            <td>{{$blog->blog_long_description}}</td>
                            <td>{{ $blog->publication_status == 1 ? 'Published' : 'Un-published' }}</td>
                            <td>
                                <a href="{{ route('edit-blog', ['id' => $blog->id]) }}">Edit</a>
                                <a href="#" onclick="event.preventDefault(); confirm('r u sure')? document.getElementById({{$blog->id}}).submit() : '';">Delete</a>
                                <form id="{{ $blog->id }}" action="{{ route('delete-blog') }}" method="POST">
                                    @csrf
                                    <input type="hidden"  value="{{ $blog->id }}" name="id">
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
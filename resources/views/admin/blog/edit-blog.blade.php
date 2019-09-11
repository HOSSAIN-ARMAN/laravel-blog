@extends('admin.master')

@section('title')
    Blog
@endsection
@section('body')
    <div class="container text-info">
        <div class="row" style="background:#ffffff">
            <div class="col-md-10">
                <div class="well"  style="margin-top: 40px;">

                    <form class="form-horizontal" action="{{ route('update-blog') }}" method="POST" enctype="multipart/form-data" name="editFormData">
                        @csrf
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Category name</b></label>
                            <div class="col-md-7">
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Blog Title</b></label>
                            <div class="col-md-7">
                                <input type="text" name="blog_title" value="{{$blog->blog_title}}" class="form-control"  placeholder="Category name">
                                <input type="hidden" name="id" value="{{$blog->id}}" class="form-control"  placeholder="Category name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3"><b>Blog Short Description</b></label>
                            <div class=" col-md-7">
                                <textarea name="blog_short_description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $blog->blog_short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3"><b>Blog Long Description</b></label>
                            <div class=" col-md-7">
                                <textarea name="blog_long_description" class="form-control"  id="editor" rows="3">{{ $blog->blog_long_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Blog Image</b></label>
                            <div class="col-md-7">
                                <input type="file" name="blog_image"  accept="image/*">
                                <img src="{{ asset($blog->blog_image) }}" width="80" height="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Publication Status</b></label>
                            <div class="col-md-7">
                                <input type="radio" {{ $blog->publication_status == 1 ? 'checked' : '' }} name="publication_status"  value="1">Published
                                <input type="radio" {{ $blog->publication_status == 0 ? 'checked' : '' }} name="publication_status"  value="0">Un-Published
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <input type="submit" name="btn" class="form-control btn-outline-info" value="update Blog Data">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editFormData'].elements['category_id'].value = '{{$blog->category_id}}';
    </script>
@endsection
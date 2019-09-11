@extends('admin.master')
@section('title')
    Edit Category
    @endsection
@section('body')
    <div class="container text-info">
        <div class="row" style="background:#ffffff">
            <div class="col-md-10">
                <div class="well"  style="margin-top: 40px;">
                    <h3 class="text-center text-info">{{ Session::get('message') }}</h3>
                    <form class="form-horizontal" action="{{ route('update-category') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Category name</b></label>
                            <div class="col-md-7">
                                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}"  placeholder="Category name">
                                <input type="hidden" name="id" class="form-control" value="{{ $category->id }}"  placeholder="Category name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3"><b>Category Description</b></label>
                            <div class=" col-md-7">
                                <textarea name="category_description" class="form-control" id="exampleFormControlTextarea1" rows="3">
                                    {{ $category->category_description}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Publication Status</b></label>
                            <div class="col-md-7">
                                <input type="radio" name="publication_status" {{ $category->publication_status == 1? 'checked' : '' }} value="1">Published
                                <input type="radio" name="publication_status" {{ $category->publication_status == 1? 'checked' : '' }} value="0">Un-Published
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <input type="submit" name="btn" class="form-control btn-outline-secondary" value="Update Category Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
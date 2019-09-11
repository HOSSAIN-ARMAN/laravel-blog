
@extends('admin.master')
@section('body')
    <div class="container text-info">
        <div class="row" style="background:#ffffff">
            <div class="col-md-10">
                <div class="well"  style="margin-top: 40px;">
                    <form class="form-horizontal" action="{{ route('update-slider') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Slider title</b></label>
                            <div class="col-md-7">
                                <input type="text" name="slider_title" class="form-control"  value="{{ $slider->slider_title }}">
                                <input type="hidden" name="id" class="form-control"  value="{{ $slider->id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3"><b>Slider short Description</b></label>
                            <div class=" col-md-7">
                                <textarea name="slider_short_description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $slider->slider_short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3" for="exampleFormControlFile1">Slider Image</label>
                            <div class="col-md-7">
                                <input type="file" name="slider_image" class="form-control-file" accept="image/*" id="exampleFormControlFile1">
                                <img src="{{ asset($slider->slider_image) }}" width="100" height="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"><b>Publication Status</b></label>
                            <div class="col-md-7">
                                <input type="radio" {{ $slider->publication_status == 1 ? 'checked' : '' }} name="publication_status"  value="1">Published
                                <input type="radio" {{ $slider->publication_status == 0 ? 'checked' : '' }}  name="publication_status"  value="0">Un-Published
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <input type="submit" name="btn" class="form-control btn-outline-primary" value="Update Slider Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
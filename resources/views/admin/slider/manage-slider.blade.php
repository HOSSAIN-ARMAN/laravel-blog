@extends('admin.master')
@section('body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>{{ Session::get('message') }}</h4>
            <h6 class="m-0 font-weight-bold text-primary">SLIDER-DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Slider Title</th>
                        <th>Slider Description</th>
                        <th>Slider Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                      @php($i = 1)

                        @foreach( $sliders as $slider)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $slider->slider_title }}</td>
                            <td>{{ $slider->slider_short_description }}</td>
                            <td><img src="{{ asset($slider->slider_image ) }}" width="400" height="400"></td>
                            <td>{{ $slider->publication_status == 1? 'published' : 'Un-published' }}</td>

                            <td>
                               <a href="{{ route('edit-slider', ['id' => $slider->id]) }}">Edit</a>
                                <a href="#" onclick="event.preventDefault(); confirm('r u sure')? document.getElementById({{$slider->id}}).submit() : '';">Delete</a>
                                <form id="{{ $slider->id }}" action="{{ route('delete-slider') }}" method="POST">
                                    @csrf
                                    <input type="hidden"  value="{{ $slider->id }}" name="id">
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

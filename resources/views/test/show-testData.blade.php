@extends('admin.master')
@section('body')
    <div class="table-responsive">
        <table class="table-bordered">
            <p>{{ Session::get('message') }}</p>
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $test as $data)
                <tr>
                    <td>{{ $data->first_name }}</td>
                    <td>{{ $data->last_name }}</td>
                    <td>
                        <a href="">edit</a>
                        <a href="#" onclick="event.preventDefault(); confirm('are u sure to delete this!!')? document.getElementById({{ $data->id }}).submit() : '';">delete</a>
                        <form id="{{ $data->id}}" action="{{ route('delete-test') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
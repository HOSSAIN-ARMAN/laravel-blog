@extends('admin.master')
@section('body')
    <div class="row">
        <p>{{ Session::get('message') }}</p>
        <form action="{{ route('add-test') }}" method="POST">
            @csrf
            <input type="text" name="first_name">
            <input type="text" name="last_name">
            <input type="submit" name="btn" value="submit">
        </form>
    </div>
    @endsection
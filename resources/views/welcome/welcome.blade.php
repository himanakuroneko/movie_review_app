{{-- inherit layouts/app.blade.php --}}
@extends('layouts.app')　

@section('content')
    <h1>Movie Review App Helps You Find The Movies You Really Want To See.</h1>
    <p>
        Rate movies, and you can find other people who has the same taste as you do.
    </p>
@endsection

@section('advertisement')
    @parent
        <p>
            LA LA LAND
        </p>
@endsection
@extends('master')

@section('endOfHead')
    <link href="{{ asset('/css/works.css') }}" rel="stylesheet">
    <title>Published Works of Shane Arbuthnott</title>
@endsection

@section('content')
    <h2>Published Works</h2>
    <p>Info about all published works here!</p>
    
    @foreach ($works as $work)
        @include('partials.bookItem')
    @endforeach
    
@endsection
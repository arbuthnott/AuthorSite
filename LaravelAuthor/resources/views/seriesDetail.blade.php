@extends('master')

@section('endOfHead')
    <title>{{ $series->name }}</title>
@endsection

@section('content')
    <h1>{{ $series->name }}</h1>
    <h1>Page to show a particular series...</h1>
@endsection
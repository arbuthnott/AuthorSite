@extends('master')

@section('endOfHead')
    <title>{{ $article->title }}</title>
@endsection

@section('content')
    @include('partials.publicArticle')  
@endsection
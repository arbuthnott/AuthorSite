@extends('master')

@section('endOfHead')
    <title>Shane Arbuthnott: Blog</title>
@endsection

@section('content')
    <h2>Welcome to the Blog!!</h2>
        
    @if (isset($tag))
        <h3>Tagged: {{ is_string($tag) ? $tag : $tag->name }}</h3>
    @endif
    
    @if ($articles == null || $articles->isEmpty())
        
        <h3>
            No Articles Found.
        </h3>
        
    @else
        @foreach ($articles as $article)
            <hr />
            @include('partials.publicArticle')
        @endforeach
    @endif
@endsection
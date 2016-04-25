@extends('master')

@section('endOfHead')
    <title>{{ $article->title }}</title>
@endsection

@section('content')
    <h2>{{ $article->title }}</h2>
    <p><strong>{{ $article->created_at }}</strong></p>
    <p>{{ $article->body }}</p>
        
    @if ( !$article->tags->isEmpty() )
        <p>
        @foreach ($article->tags as $tag)
            <a href="/blog/tagged/{{ $tag->name }}">{{ $tag->name }}</a>
        @endforeach
        </p>
    @endif
    
    
    
@endsection
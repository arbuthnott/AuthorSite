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
            <h3><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></h3>
            <p><strong>{{ $article->created_at }}</strong></p>
            <p>{{ $article->body }}</p>
            @if (!$article->tags->isEmpty())
                <p>
                    Tags:
                    @foreach ($article->tags as $tg)
                        <a href="/blog/tagged/{{ $tg->name }}">{{ $tg->name }}</a>
                    @endforeach
                </p>
            @endif
        @endforeach
    @endif
@endsection
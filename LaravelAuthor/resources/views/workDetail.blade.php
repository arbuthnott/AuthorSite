@extends('master')

@section('endOfHead')
    <title>
        {{ $work->title }} by Shane Arbuthnott
    </title>
@endsection

@section('content')
    <div class="squareInlineImage" style="max-width: 600px; background-image: url('/images/Stickbook.png');">
        <div class="bookImageSpacer"></div>
    </div>
    
    <h2>{{ $work->title }}</h2>
    <p>Published: {{ $work->publish_date }}</p>
    <p>{{ $work->long_description }}</p>
    <div class="clearing"></div>
        
    @if ( !$work->reviews->isEmpty() )
        @foreach ($work->reviews as $review)
            <hr />
            <p>
                {{ ucwords($review->source) }}:<br />
                <em>{{ $review->body }}</em>
            </p>
        @endforeach
    @endif
    
    @if ( !$work->links->isEmpty() )
        <hr />
        <p>Ways to Purchase:</p>
        <ul>
            @foreach ($work->links as $link)
                <li>
                    <a href="{{ $link->url }}">{{ $link->description }}</a>
                </li>
            @endforeach
        </ul>
    @endif
        
    <p><a href="/works">Back to All Published Works</a></p>
@endsection
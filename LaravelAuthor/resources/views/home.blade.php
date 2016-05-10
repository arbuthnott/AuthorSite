@extends('master')

@section('endOfHead')
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <title>Shane Arbuthnott</title>
@endsection

@section('content')
    <div class="row homeContent">
        <!-- most recent book-image column -->
        <div class="col-md-4 col-sm-6 imageColumn">
            <!--<div class="bookImage" style="width: 100%;"><div class="spacer"></div></div>-->
            <img class="fullColumn" src="/images/{{ $recentBook->alias }}.png" />
            @if ($recentBookLink)
                <a class="linkonly" href="{{ $recentBookLink->url }}" target="_blank">
                    <img src="/images/amazonAvailable.png" class="amazonOverlay" />
                </a>
            @endif
        </div>
            
        <!-- most recent book-text column -->
        <div class="col-md-4 col-sm-6 textColumn">
            <h2 class="title">{{ $recentBook->title }}</h2>
            <h4 class="published">{{ date('F jS, Y', strtotime($recentBook->publish_date)) }}</h4>
            <hr class="clearing" />
            @if ($review != null)
                    <p class="review"><em>"{{ $review->body }}"</em></p>
                    <p class="text-right"><a href="{{ $review->link }}">- {{ $review->source }}</a></p>
                    <hr />
            @endif
            <p class="description">{{ $recentBook->long_description }}</p>
            <p class="linktomore"><a href="/works/{{ $recentBook->alias }}">
                More about {{ $recentBook->title }}...
            </a></p>
        </div>
            
        <!-- most recent blog-post column -->
        <div class="clearfix visible-sm"></div>
        <div class="col-md-4 col-sm-12 blogColumn">
            <h2>From the blog...</h2>
            <div class="articleContainer">
                @include('partials.publicArticle', ['article' => $recentArticle])
            </div>
            <p class="linktomore"><a href="/blog">
                More Blog Posts...
            </a></p>
        </div>
    </div>
    
@endsection
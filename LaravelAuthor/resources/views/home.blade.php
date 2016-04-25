@extends('master')

@section('endOfHead')
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <title>Shane Arbuthnott</title>
@endsection

@section('content')
    <div class="squareInlineImage" id="homeImage">
        <div class="squareImageSpacer"></div>
    </div>
    <div class="textSpacer">
        <h2>Here is the homepage content!!</h2>
        <p>
            Welcome to the page. My name is Shane and I like to write books and stories.
        </p>
        <p>
            More text, bla bla hello hello.  The quick brown fox jumps over the lazy brown
            dog. More text, bla bla hello hello.  The quick brown fox jumps over the lazy brown
            dog. More text, bla bla hello hello.  The quick brown fox jumps over the lazy brown
            dog. More text, bla bla hello hello.  The quick brown fox jumps over the lazy brown
            dog.
        </p>
        <p>
            Hope you enjoy the site, and use the <em>Contact</em> page to get in touch.
        </p>
    </div>
    
@endsection
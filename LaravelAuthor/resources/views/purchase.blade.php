@extends('master')

@section('endOfHead')
    <title>Shane Arbuthnott - Purchase</title>
@endsection

@section('content')
    <h2>Purchases</h2>
    <p>You can buy my books at a number stores, or online. Some links to online shops are shown below:</p>
    <hr />
    
    @if (!$amazon->isEmpty())
        <h3>From Amazon:</h3>
        <ul>
            @foreach ($amazon as $link)
                <li><a href="{{ $link->url }}">{{ $link->work->title }}</a></li>
            @endforeach
        </ul>
    @endif
    
    @if (!$publisher->isEmpty())
        <h3>From my Publisher:</h3>
        <ul>
            @foreach ($publisher as $link)
                <li><a href="{{ $link->url }}">{{ $link->work->title }}</a></li>
            @endforeach
        </ul>
    @endif
    
    @if (!$other->isEmpty())
        <h3>Other Sources:</h3>
        <ul>
            @foreach ($other as $link)
                <li>
                    <a href="{{ $link->url }}">{{ $link->work->title }}</a>
                    ({{ $link->description }})
                </li>
            @endforeach
        </ul>
    @endif
@endsection

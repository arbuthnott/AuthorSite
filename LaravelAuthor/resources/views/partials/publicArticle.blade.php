<a class="linkonly" href="/blog/{{ $article->id }}">
    <h2>{{ $article->title }}</h2>
</a>
<h4>{{ date('F jS, Y', strtotime($article->created_at)) }}</h4>
<p>{{ $article->body }}</p>
    
@if (!$article->tags->isEmpty())
    <span>Tagged:</span>
    <ul class="blogtags">
        @foreach($article->tags as $tag)
            <a class="linkonly" href="/blog/tagged/{{ $tag->name }}">
                <li>{{ $tag->name }}</li>
            </a>
        @endforeach
    </ul>
@endif
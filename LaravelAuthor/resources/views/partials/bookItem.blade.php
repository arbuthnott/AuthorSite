<a class="linkonly" href="/works/{{ $work->alias }}">
    <div class="bookItem">
        <div class="squareInlineImage" style="max-width:100px; background-image:url('/images/Stickbook.png');">
            <div class="bookImageSpacer"></div>
        </div>
        
        <div class="textSpacer">
            <h3>{{ $work->title }}</h3>
            <p>{{ $work->short_description }}</p>
        </div>
        <div class="clearing"></div>
    </div>
</a>
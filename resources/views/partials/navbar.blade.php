<div class="head-nav">
    <span class="menu"> </span>
    <ul class="cl-effect-15">
        <li class="active"><a href="/">HOME</a></li>
        <li><a href="{{ route('about') }}" data-hover="ABOUT">ABOUT</a></li>
        <li><a href="{{ route('photos') }}" data-hover="PHOTOS">PHOTOS</a></li>
        <li><a href="{{ route('archives') }}" data-hover="ARCHIVES">ARCHIVES</a></li>
        <li><a href="{{ route('contact') }}" data-hover="CONTACT">CONTACT</a></li>
        @if(Auth::check())
            <li><a href="{{ route('articles.create') }}" class="btn btn-default">New Article</a></li>
        @endif
        <div class="clearfix"></div>
    </ul>
</div>
@extends('layouts.app')

@section('content')
    <div class="details">
        <div class="container">
            <div class="det_pic">
                <img src="{{ $article->image }}" class="img-responsive" alt="">
            </div>
            <div class="det_text">
                {!! $article->content !!}
            </div>
            <ul class="links">
                <li><i class="date"> </i><span
                            class="icon_text">{{ $article->created_at->toDayDateTimeString() }}</span></li>
                <li><a href="#"><i class="admin"> </i><span class="icon_text">{{ $article->author->name }}</span></a>
                </li>
                <li class="last"><a href="#"><i class="permalink"> </i><span class="icon_text">Permalink</span></a></li>
            </ul>
            <ul class="links_middle">
                <li><a href="#"><i class="title-icon"> </i><span class="icon_text">Lorem Ipsum Dolore</span></a></li>
                <li><i class="tags"> </i><span class="icon_text">No tags</span></li>
            </ul>
            <ul class="links_bottom">
                <li><a href="#"><i class="comments"> </i><span
                                class="icon_text">{{ $article->comments()->count() }}</span></a></li>
                <li><i class="views"> </i><span class="icon_text">{{ $article->view_count }}</span></li>
                <li><i class="likes"> </i><span class="icon_text">12</span></li>
            </ul>
            <div class="comments1">
                <h4>COMMENTS</h4>
                @foreach($article->comments as $comment)
                    <div class="comments-main">
                        <div class="col-md-2 cmts-main-left">
                            <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($comment->email))) }}"
                                 alt="">
                        </div>
                        <div class="col-md-10 cmts-main-right">
                            <h5>{{ $comment->name }}</h5>
                            {!! $comment->body !!}
                            <div class="cmts">
                                <div class="cmnts-left">
                                    <p>On {{ $comment->created_at->toFormattedDateString() }}</p>
                                </div>
                                <div class="cmnts-right">
                                    <a href="#">Reply</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>
            <div class="lev">
                <div class="leave">
                    <h4>Leave a comment</h4>
                </div>

                @include('errors.list')

                <form method="POST" action="{{ route('articles.comments.store', $article->id) }}" id="commentform">
                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" value="" size="30" aria-required="true">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" value="" size="30" aria-required="true">
                    <label for="url">Website</label>
                    <input id="url" name="url" type="text" value="" size="30">
                    <label for="comment">Comment</label>
                    <textarea name="body"></textarea>
                    <div class="clearfix"></div>
                    <input name="submit" type="submit" id="submit" value="Send">
                    <div class="clearfix"></div>
                </form>
            </div>

        </div>
    </div>
@endsection

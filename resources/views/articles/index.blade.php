@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="content">
        <div class="container">
            <div class="load_more">
                <ul id="myList">
                @php $i = 0 @endphp
                @foreach($articles->chunk(3) as $articleSet)
                    @php $i++ @endphp
                    <!-- These are our grid blocks -->
                        <li>
                            <div class="l_g">
                                @foreach($articleSet as $article)
                                    <div class="col-md-3 integ">
                                        <div class="l_g_r">
                                            <div class="dapibus">
                                                <h2>{{ $article->title }}</h2>
                                                <p class="adm">Posted by <a href="#">{{ $article->author->name }}</a>
                                                    | {{ $article->created_at->diffForHumans() }}</p>
                                                <a href="{{ route('articles.show', $article->id) }}"><img
                                                            src="{{ $article->image }}" class="img-responsive"
                                                            alt=""></a>
                                                <p>{{ str_limit($article->content, 100) }}</p>
                                                <p>
                                                    <span class="badge">{{ $comments_count = $article->comments()->count() }}</span>
                                                    {{ str_plural('Comment', $comments_count) }}
                                                    <span class="badge">{{ $article->view_count }}</span> Views
                                                </p>
                                                <a href="{{ route('articles.show', $article->id) }}" class="link">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-3 integ">
                                    <div class="l_g_r">
                                        @include('partials.sidebar')
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                        <!----//--->
                    @endforeach
                </ul>
                <div id="loadMore">Load more</div>
                <div id="showLess">Show less</div>

            </div>
        </div>
    </div>
    <!-- content -->
@endsection

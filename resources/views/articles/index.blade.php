@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $article->title }}</div>

                        <div class="panel-body">
                            {{ str_limit($article->content, 400) }}

                            <br><br>

                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">CONTINUE
                                READING</a>

                        </div>
                    </div>
                @endforeach

                {{ $articles->links() }}

            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>

                    <div class="panel-body">
                        {{ $article->content }}
                    </div>

                    <div class="panel-footer">
                        <span class="badge">{{ $view_count = $article->view_count }}</span> {{ str_plural('View', $view_count) }}
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
@endsection

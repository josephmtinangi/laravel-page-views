@extends('layouts.app')

@section('content')
    <div class="about">
        <div class="container">
            <h2>About</h2>
            <div class="biography">
                @foreach($authors as $author)
                    <div class="biographys">
                        <div class="col-md-4 biography-info">
                            <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($author->email))) }}?s=200"
                                 class="img-responsive" alt=""/>
                        </div>
                        <div class="col-md-8 biography-into">
                            <h4>{{ $author->name }}</h4>
                            <p>
                                {{ $author->bio }}
                            </p>
                            <a href="details.html" class="link">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

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
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below ook It has
                                survived not only five centuries, a galley of type and reproduced scrambled survived not
                                only five it to make a type specimen book for those interested. Sections 1.10.32 and
                                1.10.33
                                from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                                original
                                form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <a href="details.html" class="link">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

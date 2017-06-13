@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h2 class="text-center">Publish a new article</h2>
        <div class="row">
            <div class="col-md-12 contact-info">

                @include('errors.list')

                <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" name="title" value="TITLE" onfocus="this.value='';"
                           onblur="if (this.value == '') {this.value = 'TITLE';}">
                    <textarea cols="70" rows="10" name="content" onfocus="this.value='';"
                              onblur="if (this.value == '') {this.value = 'CONTENT';}">CONTENT </textarea>
                    <br>
                    <label for="image">Image</label>
                    <input type="file" name="image">
                    <div class="clearfix"></div>
                    <input type="submit" value="PUBLISH"/>

                </form>
            </div>
        </div>
    </div>
@endsection

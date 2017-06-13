@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 contact-info">

                @include('errors.list')

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <input type="text" name="email" value="EMAIL" onfocus="this.value='';"
                           onblur="if (this.value == '') {this.value = 'EMAIL';}">
                    <input type="text" name="password" value="PASSWORD" onfocus="this.value='';"
                           onblur="if (this.value == '') {this.value = 'PASSWORD';}">
                    <div class="clearfix"></div>
                    <input type="submit" value="LOGIN"/>

                </form>
            </div>
        </div>
    </div>
@endsection

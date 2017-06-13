<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="/js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            size_li = $("#myList li").size();
            x = 3;
            $('#myList li:lt(' + x + ')').show();
            $('#loadMore').click(function () {
                x = (x + 1 <= size_li) ? x + 1 : size_li;
                $('#myList li:lt(' + x + ')').show();
            });
            $('#showLess').click(function () {
                x = (x - 1 < 0) ? 1 : x - 1;
                $('#myList li').not(':lt(' + x + ')').hide();
            });
        });
    </script>
</head>
<body>
<div id="app">

    <!-- header -->
    <div class="banner">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="/"><img src="http://lorempixel.com/261/100/nature/5" class="img-responsive" alt=""/></a>
                </div>
                <div class="header-right">
                    <ul>
                        <li><a href="#"><i class="fb"> </i></a></li>
                        <li><a href="#"><i class="twt"> </i></a></li>
                        <li>
                            <div class="search2">
                                <form action="/search">
                                    <input type="text" name="q" value="Search.." onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = 'Search..';}">
                                    <input type="submit" value="">
                                </form>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
        @include('partials.navbar')

        <!-- script-for-nav -->
            <script>
                $("span.menu").click(function () {
                    $(".head-nav ul").slideToggle(300, function () {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script-for-nav -->
        </div>
    </div>
    <!-- header -->

    @yield('content')
</div>

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="ham"></i>
            </div>
            <div class="top2">
                <h6>Copyrights &copy; {{ date('Y') }} {{ Config('app.name') }}</h6>
                <p>All rights reserved</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="men"></i>
            </div>
            <div class="top2">
                <h6>About: </h6>
                <p>
                    Blog like a boss
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="app"></i>
            </div>
            <div class="top2">
                <h6>Images From: </h6>
                <p><a href="#"> Images From:</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="lik"></i>
            </div>
            <div class="top2">
                <h6>Website </h6>
                <p><a href="#"> Website</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- footer -->

<!-- Scripts -->

</body>
</html>

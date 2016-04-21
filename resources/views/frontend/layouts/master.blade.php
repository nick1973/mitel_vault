<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <title>@yield('title', app_name())</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <link rel="stylesheet" href="/css/animate.css">
        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles-end')
        {!! Html::style(elixir('css/frontend.css')) !!}
        @yield('after-styles-end')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        {{--POPOVER CSS--}}
        <style>
            .popover{
                max-width: none;
                width:350px;
                height: auto;
            }

            .onoffswitch {
                position: relative;
                width: 88px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }

            .onoffswitch-checkbox {
                display: none;
            }

            .onoffswitch-label {
                display: block;
                overflow: hidden;
                cursor: pointer;
                border: 2px solid #999999;
                border-radius: 16px;
            }

            .onoffswitch-inner {
                display: block;
                width: 200%;
                margin-left: -100%;
                transition: margin 0.3s ease-in 0s;
            }

            .onoffswitch-inner:before, .onoffswitch-inner:after {
                display: block;
                float: left;
                width: 50%;
                height: 25px;
                padding: 0;
                line-height: 25px;
                font-size: 16px;
                color: white;
                font-family: Trebuchet, Arial, sans-serif;
                font-weight: bold;
                box-sizing: border-box;
            }

            .onoffswitch-inner:before {
                content: "Yes";
                padding-left: 15px;
                background-color: #337AB7;
                color: #FFFFFF;
            }

            .onoffswitch-inner:after {
                content: "No";
                padding-right: 15px;
                background-color: #EEEEEE;
                color: #999999;
                text-align: right;
            }

            .onoffswitch-switch {
                display: block;
                width: 40px;
                margin: -7.5px;
                background: #FFFFFF;
                position: absolute;
                top: 0;
                bottom: 0;
                right: 59px;
                border: 2px solid #999999;
                border-radius: 16px;
                transition: all 0.3s ease-in 0s;
            }

            .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
                margin-left: 0;
            }

            .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
                right: 0px;
            }
        </style>
    </head>
    <body id="app-layout">

        @include('frontend.includes.nav')

        <div class="container-fluid">
            @include('includes.partials.messages')
            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 15px">
                <img class="img-responsive" src="/images/bt_logo.jpg">
                <div>

                    {{--$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);--}}
                    {{--$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);--}}

                        {{--echo "<ol class=\"breadcrumb\">";--}}
                    {{--foreach($segments as $i =>$key){--}}
                            {{--echo "<li><a href=\"#\">" . $segments[$i] . "</a></li>";--}}
                        {{--} ?>--}}
                        {{--</ol>--}}

            @yield('content')
        </div><!-- container -->

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
        {!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

        @yield('before-scripts-end')
        {!! Html::script(elixir('js/frontend.js')) !!}
        @yield('after-scripts-end')

        @include('includes.partials.ga')
    </body>
</html>
<!doctype html>
<html class="no-js" lang="" ng-app="helloApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
        <title>@yield('title', app_name())</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
        <!-- Meta -->
        @yield('meta')
        <!-- Styles -->
        @yield('before-styles-end')
        {!! Html::style(elixir('css/backend.css')) !!}
        @yield('after-styles-end')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" ref="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    </head>
    <body class="skin-{!! config('backend.theme') !!}">
    <div class="wrapper">
        @include('backend.includes.header')
        @include('backend.includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('page-header')

                {{-- Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route --}}
                {!! Breadcrumbs::renderIfExists() !!}
            </section>

            <!-- Main content -->
            <section class="content">
                @include('includes.partials.messages')
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('backend.includes.footer')
    </div><!-- ./wrapper -->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
    {!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}
    @if(Active::pattern('admin/product_management/*'))
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="/jquery.dataTables.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="/angular-datatables.min.js"></script>
        <link href="/datatables.bootstrap.min.css" rel="stylesheet">

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.min.js"></script>



        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" rel="stylesheet">

        <script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script>

        <script src="/js/hardware.js"></script>
        <script src="/js/software.js"></script>
        <script src="/js/bivb_peripherals.js"></script>
        <script src="/js/training.js"></script>
        <script src="/js/terminals.js"></script>
        <script src="/js/upgrades.js"></script>
        <script src="/js/bt_peripherals.js"></script>
        <script src="/js/bundles.js"></script>
        <script src="/js/servers.js"></script>
    @endif

    @yield('before-scripts-end')
    {!! HTML::script(elixir('js/backend.js')) !!}
    @yield('after-scripts-end')



    </body>
</html>
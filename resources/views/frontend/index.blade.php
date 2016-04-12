@extends('frontend.layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 15px">
        <img class="img-responsive" src="images/bt_logo.jpg">
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Originator / Customer Details</a></li>
                <li role="presentation" class="active"><a href="#bundle" aria-controls="bundle" role="tab" data-toggle="tab">Profile</a></li>

            </ul>

            <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade" id="home">Originator / Customer Details.</div>

                <div role="tabpanel" class="tab-pane fade in active" id="bundle" class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 15px">


                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#bundle-home" aria-controls="bundle-home" role="tab" data-toggle="tab">Bundle</a></li>
                        <li role="presentation"><a href="#software" aria-controls="software" role="tab" data-toggle="tab">Software</a></li>
                        <li role="presentation"><a href="#servers" aria-controls="servers" role="tab" data-toggle="tab">Server</a></li>
                        <li role="presentation"><a href="#terminals" aria-controls="terminals" role="tab" data-toggle="tab">Terminals</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="software">
                            Software
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="servers">
                            Servers
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="terminals">
                            Terminals
                        </div>

                        <div role="tabpanel" class="tab-pane fade in active" id="bundle-home">
                            @include('frontend.includes.bundle')
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

{{--<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">--}}
    {{--@include('frontend.includes.cart')--}}

    {{--@include('frontend.includes.sidebar')--}}
{{--</div>--}}
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop




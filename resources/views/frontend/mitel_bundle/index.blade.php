@extends('frontend.layouts.master')

@section('content')


    <div class="col-lg-8 col-md-8 col-sm-8">

        @include('frontend.mitel_bundle.includes.form')

    </div>


    <div class="col-lg-4 col-md-4 hidden-xs">
        @include('frontend.includes.cart_static')

        {{--@include('frontend.includes.sidebar')--}}
    </div>

@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController

            console.log(cart);
    </script>
@stop
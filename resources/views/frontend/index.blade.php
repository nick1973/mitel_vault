@extends('frontend.layouts.master')

@section('content')


<div class="col-lg-9 col-md-9 col-sm-9">
    <img class="img-responsive" src="images/bt_logo.jpg"><span><h1 class="text-center" style="padding-bottom: 10px">BT Mitel Quote Tool</h1></span>

    {{--2 PRODUCTS--}}
    @include('frontend.includes.products_x2')

    {{--3 PRODUCTS--}}
    @include('frontend.includes.products_x3')

    {{--4 PRODUCTS--}}
    @include('frontend.includes.products_x4')

</div>

<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
    @include('frontend.includes.cart')

    @include('frontend.includes.sidebar')
</div>
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop




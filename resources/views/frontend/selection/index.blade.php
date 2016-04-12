@extends('frontend.layouts.master')

@section('content')
<div class="col-lg-8 col-lg-offset-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <p>
                <span class="col-lg-2">Select PBX for Quote: </span>
                <a class="btn btn-default" href="#" role="button">MiVB</a>
                <a class="btn btn-default" href="#" role="button">IP Office</a>
                <a class="btn btn-default" href="#" role="button">BT Quantum</a>
            </p>

            <p>
                <span class="col-lg-2">Select Quote Type: </span>
                <a class="btn btn-default" href="#" role="button">MiVB</a>
                <a class="btn btn-default" href="#" role="button">IP Office</a>
                <a class="btn btn-default" href="#" role="button">BT Quantum</a>
                <a class="btn btn-default" href="#" role="button">BT Quantum</a>
            </p>

            <p>
                <span class="col-lg-2">Select System Type: </span>
                <a class="btn btn-default" href="#" role="button">MiVB</a>
                <a class="btn btn-default" href="#" role="button">IP Office</a>
            </p>

            <p>
                <span class="col-lg-2">Quote Search: </span>
                <a class="btn btn-default" href="#" role="button">MiVB</a>
                <a class="btn btn-default" href="#" role="button">IP Office</a>
            </p>
        </div>
    </div>
</div>
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop
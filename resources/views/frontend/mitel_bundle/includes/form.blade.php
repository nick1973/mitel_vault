<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
        <div class="panel panel-default">
            <div class="panel-body">

                {!! Form::open([
                'url' => 'mitel_bundle',
                'class' => 'form-horizontal']) !!}
                {{ Form::token() }}

                    <div class="form-group">
                        <label for="lines" class="col-sm-5 control-label">
                            How many Lines?
                        </label>
                        <div class="col-sm-3">
                            {{ Form::input('lines', 'lines', null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lines" class="col-sm-5 control-label">
                            How many extensions?
                        </label>
                        <div class="col-sm-3">
                            {{ Form::input('extensions', 'extensions', null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Base System</h3>
                        @if($extensions < 14)
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Mitel 3300 Bundle 16
                                <a href="cart/B31274" class="btn btn-info pull-right">Add</a>
                            </div>
                        </div>
                    </div>
                @elseif($extensions < 22)
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Mitel 3300 24
                                <a href="cart/B31275" class="btn btn-info pull-right">Add</a>
                            </div>
                        </div>
                    </div>
                @else()
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Mitel 3300 32
                                <a href="cart/B31276" class="btn btn-info pull-right" role="button">Add</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{--<script src="https://cdn.firebase.com/js/client/2.4.0/firebase.js"></script>--}}
{{--<script>--}}
{{--var myFirebaseRef = new Firebase("https://luminous-inferno-5349.firebaseio.com/");--}}

{{--myFirebaseRef.set({cart});--}}

{{--</script>--}}
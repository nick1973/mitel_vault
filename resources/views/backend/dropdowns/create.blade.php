@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.dashboard.welcome') }} {!! access()->user()->name !!}!</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">


            <div class="col-md-3">
                {!! Form::open([
                'route' => 'admin.dropdown_management.store'
                ]) !!}

                <div class="form-group col-md-12">
                    {!! Form::label('selection', 'Add LOB Selection:', ['class' => 'control-label']) !!}
                    {!! Form::text('selection', null, ['class' => 'form-control']) !!}
                    <input name="table" value="lob" hidden>
                </div>

                <div class="form-group col-md-12">
                    <br>
                    {!! Form::submit('Add New', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-md-3">
                {!! Form::open([
                'route' => 'admin.dropdown_management.store'
                ]) !!}

                <div class="form-group col-md-12">
                    {!! Form::label('selection', 'Add BT Solution:', ['class' => 'control-label']) !!}
                    {!! Form::text('selection', null, ['class' => 'form-control']) !!}
                    <input name="table" value="bt_solution" hidden>
                </div>

                <div class="form-group col-md-12">
                    <br>
                    {!! Form::submit('Add New', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-md-3">
                {!! Form::open([
                'route' => 'admin.dropdown_management.store'
                ]) !!}

                <div class="form-group col-md-12">
                    {!! Form::label('selection', 'Add Competitor Switch:', ['class' => 'control-label']) !!}
                    {!! Form::text('selection', null, ['class' => 'form-control']) !!}
                    <input name="table" value="competitor" hidden>
                </div>

                <div class="form-group col-md-12">
                    <br>
                    {!! Form::submit('Add New', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-md-3">
                {!! Form::open([
                'route' => 'admin.dropdown_management.store'
                ]) !!}

                <div class="form-group col-md-12">
                    {!! Form::label('selection', 'Add Maintenance Term:', ['class' => 'control-label']) !!}
                    {!! Form::text('selection', null, ['class' => 'form-control']) !!}
                    <input name="table" value="maintenance" hidden>
                </div>

                <div class="form-group col-md-12">
                    <br>
                    {!! Form::submit('Add New', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
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

            {!! Form::model($competitor,[
            'method' => 'PATCH',
            'route' => ['admin.dropdown_management.update', 'competitor' . $competitor->id],
            'class' => 'form-horizontal']) !!}
            <div class="col-md-6">
                <h2>Edit Competitors:</h2>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Edit Competitors:</label>
                    <div class="col-sm-5">
                        {!! Form::input('selection', 'selection', null, ['class' => 'form-control']) !!}
                    </div>
                    <input type="submit" class="btn btn-success pull-right" value="Edit">
                </div>

                {!! Form::close() !!}

            </div><!-- /.box-body -->
        </div><!--box box-success-->
@endsection
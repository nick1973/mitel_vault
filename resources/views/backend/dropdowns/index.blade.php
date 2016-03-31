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


                <h1>
                    Drop Downs
                    <small>Change Drop Downs</small>
                </h1>

                <div class="col-md-3">
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to LOB</a>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="visible-lg">LOB Selection</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lobs as $results)
                            <tr>
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.dropdown_management.destroy', 'lob' . $results->id]
                                ]) !!}
                                <td>
                                    {{ $results->selection }}
                                </td>
                                <td width="150px">
                                    <a href="{{ route('admin.dropdown_management.edit', 'lob' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                </td>
                            </tr>
                            {!! Form::close() !!}
                        @endforeach
                    </table>
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to LOB</a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to BT Solutions</a>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="visible-lg">BT Solutions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pbx as $results)
                            <tr>
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.dropdown_management.destroy', 'bt_solution' . $results->id]
                                ]) !!}
                                <td>{{ $results->selection }}
                                    {{--<a href="{{ route('admin.access.dropdowns.edit', 'lob' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>--}}
                                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                </td>
                                <td width="150px">
                                    <a href="{{ route('admin.dropdown_management.edit', 'bt_solution' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                </td>
                            </tr>
                            {!! Form::close() !!}
                        @endforeach
                    </table>
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to BT Solutions</a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to Competitors</a>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="visible-lg">Competitor Selection</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($competitor as $results)
                            <tr>
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.dropdown_management.destroy', 'competitor' . $results->id]
                                ]) !!}
                                <td>{{ $results->selection }}
                                    {{--<a href="{{ route('admin.access.dropdowns.edit', 'lob' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>--}}
                                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                </td>
                                <td width="150px">
                                    <a href="{{ route('admin.dropdown_management.edit', 'competitor' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                </td>
                            </tr>
                            {!! Form::close() !!}
                        @endforeach
                    </table>
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to Competitors</a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to Maintenance </a>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="visible-lg">Maintenance Selection</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($maintenance as $results)
                            <tr>
                                {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.dropdown_management.destroy', 'maintenance' . $results->id]
                                ]) !!}
                                <td>{{ $results->selection }}
                                    {{--<a href="{{ route('admin.access.dropdowns.edit', 'lob' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>--}}
                                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                </td>
                                <td width="150px">
                                    <a href="{{ route('admin.dropdown_management.edit', 'maintenance' . $results->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                </td>
                            </tr>
                            {!! Form::close() !!}
                        @endforeach
                    </table>
                    <a href="{{ route('admin.dropdown_management.create') }}" class="btn btn-warning">Add to Maintenance </a>
                </div>


                <div class="clearfix"></div>





        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
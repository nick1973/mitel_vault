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

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Vendor Ref</th>
                        <th>BT Ref</th>
                        <th>BTB £</th>
                        <th>EUP £</th>
                        <th>Max Discount %</th>
                        <th>Quote Type</th>
                        <th>PBX Ref</th>
                        <th>Category Ref</th>
                        <th>1 Yr Standard Care</th>
                        <th>1 Yr Prompt Care</th>
                        <th>1 Yr Total Care</th>
                        <th>3 Yr Standard Care</th>
                        <th>3 Yr Prompt Care</th>
                        <th>3 Yr Total Care</th>
                        <th>5 Yr Standard Care</th>
                        <th>5 Yr Prompt Care</th>
                        <th>5 Yr Total Care</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
                <br/>
            </div>


        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
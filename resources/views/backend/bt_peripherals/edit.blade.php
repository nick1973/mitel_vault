@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="/admin/product_management/bt_peripherals">BT Peripherals</a></li>
        <li class="active">Add New</li>
    </ol>
    @if(Session::has('exists'))
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::get('exists') }}</p>
        </div>
    @endif

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">BT Peripherals</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            {!! Form::model($product,[
            'method' => 'PATCH',
            'route' => ['admin.product_management.bt_peripherals.update',$product->id],
            'class' => 'form-horizontal']) !!}

            <div class="col-md-6">
                <h2>BT Peripherals:</h2>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Product Name:</label>

                    <div class="col-sm-5">
                        {!! Form::input('name', 'name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Supplier Ref:</label>

                    <div class="col-sm-5">
                        {!! Form::input('supplier_ref', 'supplier_ref', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">BT Ref:</label>

                    <div class="col-sm-5">
                        {!! Form::input('bt_ref', 'bt_ref', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">BTB £:</label>

                    <div class="col-sm-5">
                        {!! Form::input('btbuy', 'btbuy', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Max Discount:</label>

                    <div class="col-sm-5">
                        {!! Form::input('max_discount', 'max_discount', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Quote Type:</label>

                    <div class="col-sm-5">
                        {!! Form::input('quote_type', 'quote_type', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">PBX Type:</label>

                    <div class="col-sm-5">
                        {!! Form::input('pbx_type', 'pbx_type', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Item Code:</label>

                    <div class="col-sm-5">
                        {!! Form::input('item_code', 'item_code', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">XFER:</label>

                    <div class="col-sm-5">
                        {!! Form::input('xfer', 'xfer', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Hardware Category:</label>

                    <div class="col-sm-5">
                        {!! Form::input('hardware_category', 'hardware_category', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <br/><br/><br/>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">BT EUP £:</label>

                    <div class="col-sm-5">
                        {!! Form::input('bteup', 'bteup', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Qty:</label>

                    <div class="col-sm-5">
                        {!! Form::input('qty', 'qty', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">One Year Standard Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('one_yr_standard_care', 'one_yr_standard_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">One Year Prompt Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('one_yr_prompt_care', 'one_yr_prompt_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">One Year Total Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('one_yr_total_care', 'one_yr_total_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Three Year Standard Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('three_yr_standard_care', 'three_yr_standard_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Three Year Prompt Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('three_yr_prompt_care', 'three_yr_prompt_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Three Year Total Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('three_yr_total_care', 'three_yr_total_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Five Year Standard Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('five_yr_standard_care', 'five_yr_standard_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Five Year Prompt Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('five_yr_prompt_care', 'five_yr_prompt_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Five Year Total Care:</label>

                    <div class="col-sm-5">
                        {!! Form::input('five_yr_total_care', 'five_yr_total_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

            </div>
            {!! Form::close() !!}

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['admin.product_management.bt_peripherals.destroy', $product->id,
                    'class' => 'form-horizontal']
                    ]) !!}
                    <input type="submit" class="btn btn-danger pull-right" value="Delete">
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
        <!-- /.box-body -->
    </div><!--box box-success-->
@endsection
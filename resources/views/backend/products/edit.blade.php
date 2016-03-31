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
            <h3 class="box-title">Edit Product</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">


            {!! Form::model($product,[
            'method' => 'PATCH',
            'route' => ['admin.product_management.update',$product->id],
            'class' => 'form-horizontal']) !!}
            <div class="col-md-6">
                <h2>Products Details:</h2>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Product Name:</label>
                    <div class="col-sm-5">
                        {!! Form::input('name', 'name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Vendor Ref:</label>
                    <div class="col-sm-5">
                        {!! Form::input('vendor_ref', 'vendor_ref', null, ['class' => 'form-control']) !!}
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
                    <label for="inputEmail3" class="col-sm-4 control-label">EUP £:</label>
                    <div class="col-sm-5">
                        {!! Form::input('eup', 'eup', null, ['class' => 'form-control']) !!}
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
                    <label for="inputEmail3" class="col-sm-4 control-label">PBX Ref:</label>
                    <div class="col-sm-5">
                        {!! Form::input('pbx_ref', 'pbx_ref', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Category Ref:</label>
                    <div class="col-sm-5">
                        {!! Form::input('category_ref', 'category_ref', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

            <div class="col-md-6">
                <br/><br/><br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">One Year Standard Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('one_yr_standard_care', 'one_yr_standard_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">One Year Prompt Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('one_yr_prompt_care', 'one_yr_prompt_care', null, ['class' => 'form-control']) !!}
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
                        {!! Form::input('three_yr_standard_care', 'three_yr_standard_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Three Year Prompt Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('three_yr_prompt_care', 'three_yr_prompt_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Three Year Total Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('three_yr_total_care', 'three_yr_total_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Five Year Standard Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('five_yr_standard_care', 'five_yr_standard_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Five Year Prompt Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('five_yr_prompt_care', 'five_yr_prompt_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Five Year Total Care:</label>
                    <div class="col-sm-5">
                        {!! Form::input('five_yr_total_care', 'five_yr_total_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">


                    {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['admin.product_management.destroy', $product->id,
                    'class' => 'form-horizontal']
                    ]) !!}
                    <input type="submit" class="btn btn-danger pull-right" value="Delete">
                    {!! Form::close() !!}
                </div>
            </div>






        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="/admin/product_management">Product Management</a></li>
        <li class="active">Edit Product</li>
    </ol>
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
            'files'=>true,
            'route' => ['admin.product_management.update',$product->id],
            'class' => 'form-horizontal']) !!}
            <div class="col-md-6">
                <h2>Products Details:</h2>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Product Name:</label>
                    <div class="col-sm-5">
                        {!! Form::input('item_name', 'item_name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">supplier Ref:</label>
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
                    <label for="inputEmail3" class="col-sm-4 control-label">EUP £:</label>
                    <div class="col-sm-5">
                        {!! Form::input('bteup', 'bteup', null, ['class' => 'form-control']) !!}
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
                        {!! Form::select('quote_type', ['New' => 'New', 'Upgrade' => 'Upgrade', 'Maintenance' =>
                        'Maintenance'], null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">PBX Type:</label>
                    <div class="col-sm-5">
                        {!! Form::select('pbx_type', ['MiVB' => 'MiVB', 'IP Office' => 'IP Office'], null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Category Ref:</label>
                    <div class="col-sm-5">
                        {!! Form::select('category', ['Hardware' => 'Hardware', 'lines' => 'Lines', 'sip_lines' => 'SIP
                        Lines', 'lan_data' => 'LAN Data', 'lan_switch' => 'LAN Switch',
                        'Software' => 'Software', 'licenses' => 'Licenses',
                        'terminals' => 'Terminals', 'ip_terminals' => 'IP Terminals', 'analogue_terminals' => 'Analogue
                        Terminals', 'dect_terminals' => 'DECT Terminals',
                        'digital_terminals' => 'Digital Terminals',
                        'mivb_peripherals' => 'MiVB Peripherals'], null, ['class' => 'form-control']) !!}
                        {{--{{ Form::select('category', array('Hardware' => 'Hardware', 'Software' => 'Software', 'terminals' => 'Terminals'), $product->category) }}--}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Image:</label>

                    <div class="col-sm-5">
                        <img width="100px" alt="No Image" src="http://btbeqt.com/{{ $product->image }}">
                        {!! Form::file('image', ['class' => 'form-control',]); !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">OA View?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('oa_view', '1', null); !!} Yes
                            {{--<input type="radio" name="oa_view" id="inlineRadio1" value="1" checked> Yes--}}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('oa_view', '0', null); !!} No
                            {{--<input type="radio" name="oa_view" id="inlineRadio2" value="0"> No--}}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Description:</label>

                    <div class="col-sm-5 col-lg-8">
                        {!! Form::textarea('description',null, ['class' => 'form-control']) !!}
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

                <h4>Upgrades</h4>

                @foreach($terminal_upgrades as $results)
                    <div class="form-group">
                        <label>
                            <input id="upgrade{{$results->id}}" type="checkbox" name="upgrades_id[]"
                                   value="{{ $results->id }}"> {{ $results->item_name }}
                            {{--{!! Form::checkbox('upgrades_id[]', $results->id, ['id'=>'dave']) !!}--}}
                        </label>
                    </div>
                @endforeach
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
    <script>
        var obj = jQuery.parseJSON('{!! $upgrades !!}');
        $.each(obj, function (key, value) {
            $("#upgrade" + value.id).prop("checked", true);
            console.log(value.id);
        });
    </script>
@endsection
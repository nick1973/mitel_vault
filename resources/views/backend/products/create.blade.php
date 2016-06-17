@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href={{ URL::previous() }}>Product Management</a></li>
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
            <h3 class="box-title">New Product</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

            {!! Form::open(array('url' => '/admin/product_management', 'files'=>true, 'class' => 'form-horizontal')) !!}
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
                        'Software' => 'Software', 'licenses' => 'Licenses', 'user_license' => 'User License',
                        'feature_license' => 'Feature License',
                        'terminals' => 'Terminals', 'ip_terminals' => 'IP Terminals', 'analogue_terminals' => 'Analogue
                        Terminals', 'dect_terminals' => 'DECT Terminals',
                        'digital_terminals' => 'Digital Terminals', 'server' => 'Servers', 'base_app' => 'Base
                        Application', 'teleworker' => 'Teleworker',
                        'mivb_peripherals' => 'MiVB Peripherals', 'peripherals_moh' => 'Peripherals MoH',
                        'peripherals_message' => 'Peripherals Message',
                        'peripherals_de' => 'Peripherals Door Access', 'peripherals_uc' => 'Peripherals UC',
                        'peripherals_headset' => 'Peripherals Headset', 'peripherals_vr' => 'Peripherals VR',
                        'peripherals_av' => 'Peripherals AV'], null, ['class' => 'form-control']) !!}
                        {{--{{ Form::select('category', array('Hardware' => 'Hardware', 'Software' => 'Software', 'terminals' => 'Terminals'), $product->category) }}--}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Image:</label>

                    <div class="col-sm-5">
                        <img width="100px" alt="No Image">
                        {!! Form::file('image', ['class' => 'form-control',]); !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">OA + Info View?:</label>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('oa_view', '1', null); !!} Yes
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('oa_view', '0', null); !!} No
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Show Image?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('image_view', '1', null); !!} Yes
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('image_view', '0', null); !!} No
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Show Description?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('description_view', '1', null); !!} Yes
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('description_view', '0', null); !!} No
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Product Description:</label>

                    <div class="col-sm-5 col-lg-8">
                        {!! Form::textarea('description',null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Info View?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('info_view', '1', null); !!} Yes
                            {{--<input type="radio" name="oa_view" id="inlineRadio1" value="1" checked> Yes--}}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('info_view', '0', null); !!} No
                            {{--<input type="radio" name="oa_view" id="inlineRadio2" value="0"> No--}}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Info Description:</label>

                    <div class="col-sm-5 col-lg-8">
                        {!! Form::textarea('info_description',null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Warning View?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('warning_view', '1', null); !!} Yes
                            {{--<input type="radio" name="oa_view" id="inlineRadio1" value="1" checked> Yes--}}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('warning_view', '0', null); !!} No
                            {{--<input type="radio" name="oa_view" id="inlineRadio2" value="0"> No--}}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Warning Description:</label>

                    <div class="col-sm-5 col-lg-8">
                        {!! Form::textarea('warning_description',null, ['class' => 'form-control']) !!}
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
                    <label for="inputEmail3" class="col-sm-4 control-label">Server Type:</label>

                    <div class="col-sm-5">
                        {!! Form::select('Server_type', ['gateway' => 'Gateway'], null, ['class' => 'form-control']) !!}
                        {{--{{ Form::select('category', array('Hardware' => 'Hardware', 'Software' => 'Software', 'terminals' => 'Terminals'), $product->category) }}--}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Form Factor:</label>

                    <div class="col-sm-5">
                        {!! Form::select('form_factor', ['rack' => 'Rack', 'tower' => 'Tower'], null, ['class' =>
                        'form-control']) !!}
                        {{--{{ Form::select('category', array('Hardware' => 'Hardware', 'Software' => 'Software', 'terminals' => 'Terminals'), $product->category) }}--}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Raid?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('raid', '1', null); !!} Yes
                            {{--<input type="radio" name="oa_view" id="inlineRadio1" value="1" checked> Yes--}}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('raid', '0', null); !!} No
                            {{--<input type="radio" name="oa_view" id="inlineRadio2" value="0"> No--}}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">PSU Redundancy?:</label>

                    <div class="col-sm-5">
                        <label class="radio-inline">
                            {!! Form::radio('psu_redundancy', '1', null); !!} Yes
                            {{--<input type="radio" name="oa_view" id="inlineRadio1" value="1" checked> Yes--}}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('psu_redundancy', '0', null); !!} No
                            {{--<input type="radio" name="oa_view" id="inlineRadio2" value="0"> No--}}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Max Server Users:</label>

                    <div class="col-sm-5">
                        {!! Form::input('max_server_users', 'max_server_users', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

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



            {!! Form::close() !!}

        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="/admin/product_management/hardware">Bundles</a></li>
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
            <h3 class="box-title">Bundles</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            {!! Form::open(array('url' => '/admin/product_management/mivb_bundles','class' => 'form-horizontal')) !!}
            <div class="col-md-6 col-lg-4">
                <h2>Bundle Name: {!! Form::input('name', 'name', null, ['class' => 'form-control', 'required']) !!}</h2>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Analogue Lines:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('analogue_lines', 'analogue_lines', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label col-lg-6">BRI Lines:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('bri_lines', 'bri_lines', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">PRI Lines:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('pri_lines', 'pri_lines', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">SIP Trunks:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('sip_lines', 'sip_lines', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">IP Extensions:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('ip_extensions', 'ip_extensions', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Digital Extensions:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('digital_extensions', 'digital_extensions', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Analogue Extensions:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('analogue_extensions', 'analogue_extensions', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">DECT Extensions:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('dect_extensions', 'dect_extensions', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Conference Extensions:</label>

                    <div class="col-sm-5 col-md-5 col-lg-4">
                        {!! Form::input('conference_extensions', 'conference_extensions', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <br/><br/><br/>

                {{--<div class="form-group">--}}
                {{--<label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">UCC Basic:</label>--}}

                {{--<div class="col-sm-5 col-lg-4">--}}
                {{--{!! Form::input('ucc_basic', 'ucc_basic', null, ['class' => 'form-control']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                {{--<label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">UCC Entry:</label>--}}

                {{--<div class="col-sm-5 col-lg-4">--}}
                {{--{!! Form::input('ucc_entry', 'ucc_entry', null, ['class' => 'form-control']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                {{--<label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">UCC Standard:</label>--}}

                {{--<div class="col-sm-5 col-lg-4">--}}
                {{--{!! Form::input('ucc_standard', 'ucc_standard', null, ['class' => 'form-control']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                {{--<label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">UCC Premium:</label>--}}

                {{--<div class="col-sm-5 col-lg-4">--}}
                {{--{!! Form::input('ucc_premium', 'ucc_premium', null, ['class' => 'form-control']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">LAN Ports:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('lan_ports', 'lan_ports', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Standalone SW:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('standalone_sw', 'standalone_sw', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Enterprise SW:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('enterprise_sw', 'enterprise_sw', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">BTB £:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('btbuy', 'btbuy', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">BT EUP £:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('bteup', 'bteup', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Discount Status:</label>

                    <div class="col-sm-5 col-lg-4">
                        <select name="discount_status" class="form-control">
                            <option>Discountable</option>
                            <option>None Discountable</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Discount Amount %:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('max_discount', 'max_discount', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <br/><br/><br/>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">One Year Standard Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('one_yr_standard_care', 'one_yr_standard_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">One Year Prompt Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('one_yr_prompt_care', 'one_yr_prompt_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">One Year Total Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('one_yr_total_care', 'one_yr_total_care', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Three Year Standard Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('three_yr_standard_care', 'three_yr_standard_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Three Year Prompt Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('three_yr_prompt_care', 'three_yr_prompt_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Three Year Total Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('three_yr_total_care', 'three_yr_total_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Five Year Standard Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('five_yr_standard_care', 'five_yr_standard_care', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Five Year Prompt Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('five_yr_prompt_care', 'five_yr_prompt_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-lg-6 control-label">Five Year Total Care:</label>

                    <div class="col-sm-5 col-lg-4">
                        {!! Form::input('five_yr_total_care', 'five_yr_total_care', null, ['class' => 'form-control'])
                        !!}
                    </div>
                </div>

            </div>

            {!! Form::close() !!}

        </div>
        <!-- /.box-body -->
    </div><!--box box-success-->
@endsection
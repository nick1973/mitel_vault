<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html ng-app="helloApp">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Add to Bundle</title>
    <link rel="stylesheet"
          href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script
            src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script
            src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script
            src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>

    {{--<script src="/js/controller.js"></script>--}}
    @yield('before-styles-end')
    {!! Html::style(elixir('css/backend.css')) !!}
    @yield('after-styles-end')

</head>
<!-- Controller name goes here -->
<body class="skin-{!! config('backend.theme') !!}">
<div class="wrapper">
    @include('backend.includes.header')
    @include('backend.includes.sidebar')

    @section('page-header')
        <h1>
            {!! app_name() !!}
            <small>{{ trans('strings.backend.dashboard.title') }}</small>
        </h1>
        {{--<a class="btn btn-danger pull-right" href="/admin/product_management/software/create">Add New!</a>--}}
        {{--<br/>--}}
        @endsection

                <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('page-header')

                {{-- Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route --}}
                {!! Breadcrumbs::renderIfExists() !!}
            </section>

            <!-- Main content -->
            <section class="content">
                @include('includes.partials.messages')

                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="col-lg-10">
                            <h3 class="box-title">Add Hardware to {{ $bundle->name }}</h3>
                        </div>
                        {{--{!! Form::open(array('url' => '','class' => 'form-horizontal', 'id' => 'form-create')) !!}--}}

                        {{--{!! Form::close() !!}--}}
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box tools -->
                        <?php if(Session::has('exists')) { ?>
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><?php echo Request::segment(3)?> Duplicate bundle name have been entered!</p>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- /.box-header -->
                    <div id="block" class="box-body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Hardware</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                       data-toggle="tab">Software</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                       data-toggle="tab">Terminals</a>
                            </li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                                       data-toggle="tab">Servers</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" ng-controller="CompanyCtrl">
                            <div role="tabpanel" class="tab-pane active" id="home">

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>Add Hardware to: {{ $bundle->name }}</h2>

                                        <form class="form-horizontal" role="form" ng-submit="addRow()">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Product Item</label>

                                                    <div class="col-md-6">
                                                        <select id="hardware-res" ng-model='item_name'
                                                                class="form-control">
                                                            <?php
                                                            $i = 0;
                                                            foreach ($json as $obj) {
                                                                $i++;
                                                                echo "<option id='" . $i . "' value='" . $obj{'item_name'} . "'>" . $obj{'item_name'} . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input id="product-id" ng-model="id" hidden>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Database</label>

                                                    <div class="col-md-3">
                                                        <input id="quote-type" class="form-control"
                                                               ng-model="quote_type"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT B-Code</label>

                                                    <div class="col-md-3">
                                                        <input ng-model='bt_ref' class='form-control' id='b_codes'>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div style="padding-left:110px">
                                                        <input type="submit" value="Add Product"
                                                               class="btn btn-primary"/>
                                                        {{--<input type="button" value="Clear Totals"--}}
                                                        {{--class="btn btn-warning clearproduct"/>--}}
                                                    </div>
                                                </div>


                                            </div>

                                            <!--                COLUMN 2-->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">PBX Type</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="pbx"
                                                               ng-model="pbx"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BTB £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="btb"
                                                               ng-model="btbuy"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT EUP £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="eup"
                                                               ng-model="bteup"/>
                                                    </div>
                                                </div>
                                                <br/>
                                                {{--<a href="/peripherals/{{ $customer->crf_id }}" class="btn btn-success">Auto Add Bonds Override!</a>--}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{--/////////////////////////////////////////////////////////////////////////--}}
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>Add Software to: {{ $bundle->name }}</h2>

                                        <form class="form-horizontal" role="form" ng-submit="addRow()">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Product Item</label>

                                                    <div class="col-md-6">
                                                        <select id="software-res" ng-model='item_name'
                                                                class="form-control">
                                                            <?php
                                                            $i = 0;
                                                            foreach ($json_software as $obj) {
                                                                $i++;
                                                                echo "<option id='" . $i . "' value='" . $obj{'item_name'} . "'>" . $obj{'item_name'} . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input id="software-id" ng-model="id" hidden>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Database</label>

                                                    <div class="col-md-3">
                                                        <input id="software-quote-type" class="form-control"
                                                               ng-model="quote_type"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT B-Code</label>

                                                    <div class="col-md-3">
                                                        <input ng-model='bt_ref' class='form-control'
                                                               id='software-b_codes'>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div style="padding-left:110px">
                                                        <input type="submit" value="Add Product"
                                                               class="btn btn-primary"/>
                                                        {{--<input type="button" value="Clear Totals"--}}
                                                        {{--class="btn btn-warning clearproduct"/>--}}
                                                    </div>
                                                </div>


                                            </div>

                                            <!--                COLUMN 2-->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">PBX Type</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="software-pbx"
                                                               ng-model="pbx"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BTB £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="software-btb"
                                                               ng-model="btbuy"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT EUP £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="software-eup"
                                                               ng-model="bteup"/>
                                                    </div>
                                                </div>
                                                <br/>
                                                {{--<a href="/peripherals/{{ $customer->crf_id }}" class="btn btn-success">Auto Add Bonds Override!</a>--}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{--/////////////////////////////////////////////////////////////////////////--}}
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>Add Terminals to: {{ $bundle->name }}</h2>

                                        <form class="form-horizontal" role="form" ng-submit="addRow()">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Product Item</label>

                                                    <div class="col-md-6">
                                                        <select id="hardware-res" ng-model='item_name'
                                                                class="form-control">
                                                            <?php
                                                            $i = 0;
                                                            foreach ($json as $obj) {
                                                                $i++;
                                                                echo "<option id='" . $i . "' value='" . $obj{'item_name'} . "'>" . $obj{'item_name'} . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input id="product-id" ng-model="id" hidden>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Database</label>

                                                    <div class="col-md-3">
                                                        <input id="quote-type" class="form-control"
                                                               ng-model="quote_type"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT B-Code</label>

                                                    <div class="col-md-3">
                                                        <input ng-model='bt_ref' class='form-control' id='b_codes'>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div style="padding-left:110px">
                                                        <input type="submit" value="Add Product"
                                                               class="btn btn-primary"/>
                                                        {{--<input type="button" value="Clear Totals"--}}
                                                        {{--class="btn btn-warning clearproduct"/>--}}
                                                    </div>
                                                </div>


                                            </div>

                                            <!--                COLUMN 2-->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">PBX Type</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="pbx"
                                                               ng-model="pbx"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BTB £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="btb"
                                                               ng-model="btbuy"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT EUP £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="eup"
                                                               ng-model="bteup"/>
                                                    </div>
                                                </div>
                                                <br/>
                                                {{--<a href="/peripherals/{{ $customer->crf_id }}" class="btn btn-success">Auto Add Bonds Override!</a>--}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{--//////////////////////////////////////////////////////////////////////////////////--}}
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>Add Servers to: {{ $bundle->name }}</h2>

                                        <form class="form-horizontal" role="form" ng-submit="addRow()">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Product Item</label>

                                                    <div class="col-md-6">
                                                        <select id="hardware-res" ng-model='item_name'
                                                                class="form-control">
                                                            <?php
                                                            $i = 0;
                                                            foreach ($json as $obj) {
                                                                $i++;
                                                                echo "<option id='" . $i . "' value='" . $obj{'item_name'} . "'>" . $obj{'item_name'} . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input id="product-id" ng-model="id" hidden>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Database</label>

                                                    <div class="col-md-3">
                                                        <input id="quote-type" class="form-control"
                                                               ng-model="quote_type"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT B-Code</label>

                                                    <div class="col-md-3">
                                                        <input ng-model='bt_ref' class='form-control' id='b_codes'>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div style="padding-left:110px">
                                                        <input type="submit" value="Add Product"
                                                               class="btn btn-primary"/>
                                                        {{--<input type="button" value="Clear Totals"--}}
                                                        {{--class="btn btn-warning clearproduct"/>--}}
                                                    </div>
                                                </div>


                                            </div>

                                            <!--                COLUMN 2-->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">PBX Type</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="pbx"
                                                               ng-model="pbx"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BTB £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="btb"
                                                               ng-model="btbuy"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT EUP £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="eup"
                                                               ng-model="bteup"/>
                                                    </div>
                                                </div>
                                                <br/>
                                                {{--<a href="/peripherals/{{ $customer->crf_id }}" class="btn btn-success">Auto Add Bonds Override!</a>--}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{--////////////////////////////////////////////////////////////////--}}
                            <div role="tabpanel" class="tab-pane" id="upgrades">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2>Add Upgrades to: {{ $bundle->name }}</h2>

                                        <form class="form-horizontal" role="form" ng-submit="addRow()">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Product Item</label>

                                                    <div class="col-md-6">
                                                        <select id="upgrade-res" ng-model='item_name'
                                                                class="form-control">
                                                            <?php
                                                            $i = 0;
                                                            foreach ($json_upgrades as $obj) {
                                                                $i++;
                                                                echo "<option id='" . $i . "' value='" . $obj{'item_name'} . "'>" . $obj{'item_name'} . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input id="product-id" ng-model="id" hidden>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Category</label>

                                                    <div class="col-md-3">
                                                        <input id="category" class="form-control"
                                                               ng-model="quote_type"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT B-Code</label>

                                                    <div class="col-md-3">
                                                        <input ng-model='bt_ref' class='form-control' id='b_codes'>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div style="padding-left:110px">
                                                        <input type="submit" value="Add Product"
                                                               class="btn btn-primary"/>
                                                        {{--<input type="button" value="Clear Totals"--}}
                                                        {{--class="btn btn-warning clearproduct"/>--}}
                                                    </div>
                                                </div>


                                            </div>

                                            <!--                COLUMN 2-->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">PBX Type</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="pbx"
                                                               ng-model="pbx"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BTB £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="btb"
                                                               ng-model="btbuy"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">BT EUP £</label>

                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="eup"
                                                               ng-model="bteup"/>
                                                    </div>
                                                </div>
                                                <br/>
                                                {{--<a href="/peripherals/{{ $customer->crf_id }}" class="btn btn-success">Auto Add Bonds Override!</a>--}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {!! Form::model($customer,[
                            'method' => 'PATCH',
                            'route' => ['admin.product_management.mivb_bundles.update',$bundle->id],
                            'class' => 'form-horizontal'])
                            !!}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input class="hidden users" name="crf_id"
                                   value="<?php //echo $customer->crf_id; ?>">
                            <table class="table">
                                <tr>
                                    <th>BT B-Code
                                    </th>
                                    <th>Product Item
                                    </th>
                                    <th>Qty
                                    </th>
                                    <th>BT Buy £
                                    </th>
                                    <th>BT EUP £
                                    </th>
                                    <th>Database
                                    </th>
                                </tr>
                                <tr ng-repeat="bond in bonds">
                                    <td width="150px">
                                        <input name="product_id[]" class="form-control users hidden" type="text"
                                               value="@{{bond.id}}">
                                        <input name="bt_ref[]" class="form-control users" type="text"
                                               value="@{{bond.bt_ref}}">
                                    </td>
                                    <td>
                                        <input name="item_name[]" class="form-control users" type="text"
                                               value="@{{bond.item_name}}">

                                    </td>
                                    <td width="100px">
                                        <input name="qtys[]" class="form-control users" type="text" value="1" required>
                                    </td>
                                    <td width="100px">
                                        <input name="btbuy[]" class="form-control users" type="text"
                                               value="@{{bond.btbuy}}">
                                    </td>
                                    <td width="100px">
                                        <input name="bteup[]" class="form-control users" type="text"
                                               value="@{{bond.bteup}}">
                                        {{--<input name="bonus[]" class="form-control users" type="text" value="@{{bond.bonus}}" required>--}}
                                    </td>
                                    <td width="100px">
                                        <input name="quote_type[]" class="form-control users" type="text"
                                               value="@{{bond.quote_type}}">
                                        {{--<input name="bonus[]" class="form-control users" type="text" value="@{{bond.bonus}}" required>--}}
                                    </td>
                                    <td>
                                        <input type="button" value="Remove"
                                               class="btn btn-danger addproduct"
                                               ng-click="removeRow(bond.id)"/>
                                    </td>

                                </tr>
                            </table>

                            <button class="btn btn-success" type="submit">Save</button>
                            </form>
                        </div>
                    </div>


                </div>


        </div>
        <!-- /.box-body -->
</div>
<!--box box-success-->


</section>
<!-- /.content -->
</div><!-- /.content-wrapper -->


<script>
    var js_array = <?php echo json_encode($json);?>;
    $("#hardware-res").change(function () {
        var id = $(this).children(":selected").attr("id");//the count
        var x = id - 1;
        console.log(x);

        var input = $('#b_codes');
        input.val(js_array[x]['bt_ref']);
        input.trigger('input');
        /////////////////////////
        var input2 = $('#eup');
        input2.val(js_array[x]['bteup']);
        input2.trigger('input');
        /////////////////////////
        var input3 = $('#bonusBond');
        input3.val(js_array[x]['xfer']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#quote-type');
        input3.val(js_array[x]['quote_type']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#btb');
        input3.val(js_array[x]['btbuy']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#pbx');
        input3.val(js_array[x]['pbx_type']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#product-id');
        input3.val(js_array[x]['id']);
        input3.trigger('input');
    });
    var js_software = <?php echo json_encode($json_software);?>;
    $("#software-res").change(function () {
        var id = $(this).children(":selected").attr("id");//the count
        var x = id - 1;
        console.log(x);

        var input = $('#software-b_codes');
        input.val(js_software[x]['bt_ref']);
        input.trigger('input');
        /////////////////////////
        var input2 = $('#software-eup');
        input2.val(js_software[x]['bteup']);
        input2.trigger('input');
        /////////////////////////
        var input3 = $('#software-bonusBond');
        input3.val(js_software[x]['xfer']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-quote-type');
        input3.val(js_software[x]['quote_type']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-btb');
        input3.val(js_software[x]['btbuy']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-pbx');
        input3.val(js_software[x]['pbx_type']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-id');
        input3.val(js_software[x]['id']);
        input3.trigger('input');
        console.log(js_software[x]['id']);
    });
    var json_upgrades = <?php echo json_encode($json_upgrades);?>;
    $("#upgrade-res").change(function () {
        var id = $(this).children(":selected").attr("id");//the count
        var x = id - 1;
        console.log(x);

        var input = $('#software-b_codes');
        input.val(json_upgrades[x]['bt_ref']);
        input.trigger('input');
        /////////////////////////
        var input2 = $('#software-eup');
        input2.val(json_upgrades[x]['bteup']);
        input2.trigger('input');
        /////////////////////////
        var input3 = $('#software-bonusBond');
        input3.val(json_upgrades[x]['xfer']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-quote-type');
        input3.val(json_upgrades[x]['category']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-btb');
        input3.val(json_upgrades[x]['btbuy']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-pbx');
        input3.val(json_upgrades[x]['pbx_type']);
        input3.trigger('input');
        //////////////////////////////////
        var input3 = $('#software-id');
        input3.val(json_upgrades[x]['id']);
        input3.trigger('input');
        console.log(json_upgrades[x]['id']);
    });

    var helloApp = angular.module("helloApp", []);
    helloApp.controller("CompanyCtrl", function ($scope, $http) {

        $http.get("/admin/bundle_set/{{ $bundle->id }}")
                .then(function (response) {
                    $scope.bonds = response.data;
                });

        $scope.addRow = function () {
            $scope.bonds.push({
                'item_name': $scope.item_name,
                'btbuy': $scope.btbuy,
                'bteup': $scope.bteup,
                'bt_ref': $scope.bt_ref,
                'quote_type': $scope.quote_type,
                'id': $scope.id
            });

            //console.log($scope.bonus);
            $scope.item_name = '';
            $scope.bt_ref = '';
            $scope.btbuy = '';
            $scope.bteup = '';
            $scope.quote_type = '';
            $scope.id = '';
        };

        $scope.removeRow = function (id) {
            var index = 0;
            var comArr = eval($scope.bonds);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].id === id) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.bonds.splice(index, 1);
        };
    });
</script>

@include('backend.includes.footer')
</div>
<!-- ./wrapper -->

</div>
@yield('before-scripts-end')
{!! HTML::script(elixir('js/backend.js')) !!}
@yield('after-scripts-end')
</body>
</html>

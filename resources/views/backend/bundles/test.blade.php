<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html ng-app="helloApp">
<head>
    <title>Bonus Bonds</title>
    <link rel="stylesheet"
          href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script
            src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script
            src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script
            src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>
</head>
<!-- Controller name goes here -->
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Import CRF</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<br/>

<div class="container" style="padding-top: 75px">


    <div class="panel panel-default">
        <div class="panel-body" ng-controller="CompanyCtrl">
            <h2>Bonus Bond Claim Details:</h2>

            <form class="form-horizontal" role="form" ng-submit="addRow()">

                <div class="col-md-8">

                    <div class="form-group">
                        <label class="col-md-3 control-label">Products</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control"
                                   ng-model="products"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Qty</label>

                        <div class="col-md-3">
                            <input type="text" class="form-control"
                                   ng-model="qtys"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Bond Value £</label>

                        <div class="col-md-3">
                            <input class='form-control' ng-model='bonus' id='bonusBond'>
                        </div>
                    </div>

                    <div class="form-group">
                        <div style="padding-left:110px">
                            <input type="submit" value="Add" class="btn btn-primary addproduct"/>
                            <input type="button" value="Clear Totals" class="btn btn-warning clearproduct"/>
                        </div>
                    </div>


                </div>

                <!--                COLUMN 2-->
                <div class="col-md-4">

                    <div class="form-group">
                        <label class="col-md-3 control-label">Code</label>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="b_codes"
                                   ng-model="codes"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">EUP £</label>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="eup"
                                   ng-model="eup"/>
                        </div>
                    </div>
                    <br/>
                    <a href="/peripherals/id" class="btn btn-success">Auto Add Bonds Override!</a>
                </div>

            </form>


            <input type="hidden" name="_token" value="">
            <input class="hidden users" name="crf_id" value="">
            <table class="table">
                <tr>
                    <th>Products
                    </th>
                    <th>Code
                    </th>
                    <th>Qty
                    </th>
                    <th>EUP £
                    </th>
                    <th>Bond Value £
                    </th>
                </tr>
                <tr ng-repeat="bond in bonds">
                    <td>
                        <input name="products[]" class="form-control users" type="text" value="@{{bond.products}}">
                    </td>
                    <td>
                        <input name="codes[]" class="form-control users" type="text" value="@{{bond.codes}}">
                    </td>
                    <td>
                        <input name="qty[]" class="form-control users" type="text" value="@{{bond.qtys}}">
                    </td>
                    <td>
                        <input name="eup[]" class="form-control users" type="text" value="@{{bond.eup}}">
                    </td>
                    <td>
                        <input name="bonus[]" class="form-control users" type="text"
                               value="@{{bond.qtys * bond.bonus}}">
                        {{--<input name="bonus[]" class="form-control users" type="text" value="@{{bond.bonus}}" required>--}}
                    </td>
                    <td>
                        <input type="button" value="Remove" class="btn btn-danger addproduct"
                               ng-click="removeRow(bond.products)"/>
                    </td>
                </tr>
                <tfoot>
                <tr>
                    <td>
                        <label class="col-md-5 control-label">Status</label>
                        <select name="status_bonds" class="form-control">
                            <option value="Not Actioned">Not Actioned</option>
                            <option value="Paid / Complete">Paid / Complete</option>
                            <option value="Sale Verified">Sale Verified</option>
                            <option value="Sale In Query">Sale In Query</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                        {{--{!! Form::select('status_bonds', ['','Sale Verified','Not Actioned','Sale In Query','Cancelled'], null, ['class' => 'form-control']) !!}--}}
                    </td>
                    <td>
                        <label class="col-md-7 control-label">Bond Ref:</label>

                    </td>
                    <td>
                        <label class="col-md-7 control-label">Qty Total:</label>

                    </td>
                    <td>
                        <label class="col-md-7 control-label">EUP Total:</label>

                    </td>
                    <td>
                        <label class="col-md-7 control-label">Bond Total:</label>

                    </td>
                </tr>
                </tfoot>
            </table>
            <div class="col-md-2">
                <label class="control-label">NS Ref:</label>
                {{--<input type="text" class="form-control col-md-1" name="ns_job" required/>--}}

                <br/><br/><br/>

            </div>

        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".addproduct").click(function () {
                var sum = 0;
                var sum2 = 0;
                var sum3 = 0;
                var sum4 = 0;
                $('input[name^="qty"]')
                        .each(function (i, e) {
                            var v = parseInt($(e).val());
                            if (!isNaN(v))
                                $("#qty").val(sum += v);
                            console.log(sum += v);
                        });

                $('input[name^="eup"]')
                        .each(function (i, e) {
                            var v = parseFloat($(e).val());
                            if (!isNaN(v))
                                $("#eupval").val(sum2 += v);
                            //console.log(sum += v);
                        });

                $('input[name^="bonus"]')
                        .each(function (i, e) {
                            var v = parseFloat($(e).val());
                            if (!isNaN(v))
                                $("#bonus").val(sum3 += v);
                            //console.log(sum += v);
                        });

                $('input[name^="btb_total"]')
                        .each(function (i, e) {
                            var v = parseFloat($(e).val());
                            if (!isNaN(v))
                                $("#forecast_total").val(sum4 += v);
                            //console.log(sum += v);
                        });
            });

            $(".clearproduct").click(function () {
                $("#qty").val("");
                $("#eupval").val("");
                $("#bonus").val("");
                $("#forecast_total").val("");
            });
        });

        var helloApp = angular.module("helloApp", []);
        helloApp.controller("CompanyCtrl", function ($scope, $http) {


            $http.get("test")
                    .then(function (response) {
                        $scope.bonds = response.data;
                    });


            $scope.addRow = function () {
                $scope.bonds.push({
                    'products': $scope.products,
                    'codes': $scope.codes,
                    'qtys': $scope.qtys,
                    'eup': $scope.eup,
                    'bonus': $scope.bonus
                });
                $scope.products = '';
                $scope.codes = '';
                $scope.qtys = '';
                $scope.eup = '';
                $scope.bonus = '';
            };

            $scope.removeRow = function (products) {
                var index = -1;
                var comArr = eval($scope.bonds);
                for (var i = 0; i < comArr.length; i++) {
                    if (comArr[i].products === products) {
                        index = i;
                        break;
                    }
                }
                //if( index === -1 ) {
                //    alert( "Something gone wrong" );
                //}
                $scope.bonds.splice(index, 1);
            };
        });
    </script>


</body>
</html>
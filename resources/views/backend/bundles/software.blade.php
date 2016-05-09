<div class="panel panel-default">
    <div class="panel-body" ng-controller="CompanyCtrl">
        <h2>Add Hardware to: {{ $bundle->name }}</h2>

        <form class="form-horizontal" role="form" ng-submit="addRow()">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-md-3 control-label">Product Item</label>

                    <div class="col-md-6">
                        <select id="hardware-res" ng-model='item_name'
                                class="form-control">
                            <?php
                            foreach ($json as $obj) {
                                echo "<option id='" . $obj{'id'} . "' value='" . $obj{'item_name'} . "'>" . $obj{'item_name'} . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="product-id" ng-model="id" hidden>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Database</label>

                    <div class="col-md-3">
                        <input id="quote-type" class="form-control" ng-model="quote_type"/>
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
                        <input type="submit" value="Add Product" class="btn btn-primary"/>
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
                    <input name="product_id[]" class="form-control users hidden" type="text" value="@{{bond.id}}">
                    <input name="bt_ref[]" class="form-control users" type="text"
                           value="@{{bond.bt_ref}}">
                </td>
                <td>
                    <input name="item_name[]" class="form-control users" type="text"
                           value="@{{bond.item_name}}">

                </td>
                <td width="100px">
                    <input name="qtys[]" class="form-control users" type="text" required>
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
<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>Terminals: </strong>Are Terminals required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-terminals"
                   onclick="visible(this.id,'nav-terminals')" checked>
            <label for="switch-terminals" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<br/>
<form id="nav-terminals" class="form-horizontal animated fadeIn" action="/post_terminals">
    <h3><i class="fa fa-ellipsis-h fa-2x" style="color: #58678F; vertical-align: middle"></i> Indicates Upgrade Options
        <small>(click to view)</small>
    </h3>
    <h4 class="col-lg-12 col-md-12"><strong>Analogue Terminals: </strong>What Analogue Terminals are required from BT?
    </h4>
    <div class="col-md-12 col-lg-6">

        <?php
        $total_terminals = count($analogue_terminals);
        $divided_terminals = $total_terminals / 2;
        $half_terminals = round($divided_terminals);
        $i = 1;
        $x = $half_terminals;
        ?>

            @foreach($analogue_terminals as $k=>$terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="terminals[{{ $terminal->bt_ref }}]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
                   data-content="<img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>"
                   data-animation="true"></i>
                <i class="fa fa-ellipsis-h fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="extraShow({{ $terminal->bt_ref }})"></i>
            </div>

            <?php if ($i++ == $half_terminals) break; ?>
        @endforeach
    </div>

    <div class="col-md-12 col-lg-6">
        @foreach($analogue_terminals as $k => $terminal)
            <?php if ($k < $x) continue; ?>
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="terminals[{{ $terminal->bt_ref }}]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
                   data-content="<img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>"
                   data-animation="true"></i>
                <i class="fa fa-ellipsis-h fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="extraShow({{ $k }})"></i>
            </div>
        @endforeach


    </div>

    <h4 class="col-lg-12"><strong>IP Terminals: </strong>What Type and Quantity of terminals are required from BT?</h4>

    <div class="col-md-12 col-lg-6">

        <?php
        $total_terminals = count($ip_terminals);
        $divided_terminals = $total_terminals / 2;
        $half_terminals = round($divided_terminals);
        $i = 1;
        $x = $half_terminals;
        ?>

        @foreach($ip_terminals as $terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="terminals[{{ $terminal->bt_ref }}]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>"
               data-animation="true"></i>
                <i class="fa fa-ellipsis-h fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="extraShow('5320')"></i>
            </div>
            <?php if ($i++ == $half_terminals) break; ?>
        @endforeach
    </div>

    <div class="col-md-12 col-lg-6">
        @foreach($ip_terminals as $k => $terminal)
            <?php if ($k < $x) continue; ?>
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="terminals[{{ $terminal->bt_ref }}]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
                   data-content="<img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>"
                   data-animation="true"></i>
                <i class="fa fa-ellipsis-h fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="extraShow('5320')"></i>
            </div>
        @endforeach
    </div>

    <h4 class="col-lg-12"><strong>BTB DECT: </strong>What Type and Quantity of BT DECT terminals are required from BT?
    </h4>

    <div class="col-md-12 col-lg-6">

        <?php
        $total_terminals = count($dect_terminals);
        $divided_terminals = $total_terminals / 2;
        $half_terminals = round($divided_terminals);
        $i = 1;
        $x = $half_terminals;
        ?>

        @foreach($dect_terminals as $terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="terminals[{{ $terminal->bt_ref }}]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
                   data-content="<img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>"
                   data-animation="true"></i>
                <i class="fa fa-ellipsis-h fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="extraShow('5320')"></i>
            </div>
            <?php if ($i++ == $half_terminals) break; ?>
        @endforeach
    </div>

    <div class="col-md-12 col-lg-6">
        @foreach($dect_terminals as $k => $terminal)
            <?php if ($k < $x) continue; ?>
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="terminals[{{ $terminal->bt_ref }}]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
                   data-content="<img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>"
                   data-animation="true"></i>
                <i class="fa fa-ellipsis-h fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="extraShow('5320')"></i>
            </div>
        @endforeach
    </div>
</form>
<button onclick="serversPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                        aria-hidden="true"></span> Previous
</button>
<button onclick="landataNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                              aria-hidden="true"></span></button>

<div class="modal fade" id="add5320" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>5320 Upgrade Options</h2>
            </div>
            <div class="modal-body">
                <form id="5320">
                    <div class="form-group">
                        @foreach($analogue_terminals as $k=>$terminal)
                            @foreach($terminal->upgrades as $upgrades)
                                <label for="inputEmail3"
                                       class="col-xs-3 col-sm-4 col-md-4 col-lg-8 control-label">{{ $upgrades->item_name }}</label>

                                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                                    <select name="universal_terminals_qty" class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                <div class="col-lg-1">
                    {{--{!! Form::open([--}}
                    {{--'method' => 'DELETE',--}}
                    {{--'route' => ['ipo-echosign.customer_detail.destroy', $customer->crf_id,--}}
                    {{--'class' => 'form-horizontal']--}}
                    {{--]) !!}--}}
                    <button type="button" onclick="addInputs('5320')" class="btn btn-success">Add</button>

                </div>
            </div>
        </div>
    </div>
</div>





<script>
    function serversPrev() {
        $('.nav-tabs a[href="#servers"]').tab('show');
    }

    function landataNext() {
        $("#tick-terminals").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#lan-data"]').tab('show');

        var URL = $("#nav-terminals").attr("action");
        var terminalData = $("#nav-terminals").serializeArray();
        $.post(URL,
                terminalData,
                function (data, textStatus, jqXHR) {

                });


        console.log(terminalData);
    }

    function extraShow(id) {
        $('#add' + id).modal('show')
    }

    function addInputs(id) {

        var formData = $('#' + id).serializeArray();
        //console.log(formData);

        var input = $("<input type='text' class='hidden' />")
                .attr("value", formData[0]['value'])
                .attr("name", formData[0]['name'])
                .attr("id", "fooBar");

        var wrapper = $("#nav-terminals");

        wrapper.append(input);

        //console.log(terminals);
    }
</script>





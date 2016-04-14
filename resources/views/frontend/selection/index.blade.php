@extends('frontend.layouts.master')

@section('content')
    <script>
        $(document).ready(function() {

            var pbx_result = [];

            $("#reset").click(function(){
                $("#selection2").hide('slow');
                $("#selection3").hide('slow');
                $("#selection4").hide('slow');
                $("#mivb").removeClass('active');
                $("#ip_office").removeClass('active');
                $("#btq").removeClass('active');
                $("#new").removeClass('active');
                $("#amend").removeClass('active');
                $("#upgrade").removeClass('active');
                $("#maint").removeClass('active');
                pbx_result = [];
            });

            $("#mivb").click(function(){
                $("#selection2").show('slow');
                $("#mivb").addClass('active');
                $("#ip_office").removeClass('active');
                $("#btq").removeClass('active');

                pbx_result.splice(0,1,"mivb");
                selection(pbx_result);
            });

            $("#ip_office").click(function(){
                $("#selection2").show('slow');
                $("#ip_office").addClass('active');
                $("#mivb").removeClass('active');
                $("#btq").removeClass('active');

                pbx_result.splice(0,1,"ip_office");
                selection(pbx_result);
            });

            $("#btq").click(function(){
                $("#selection2").show('slow');
                $("#btq").addClass('active');
                $("#mivb").removeClass('active');
                $("#ip_office").removeClass('active');

                pbx_result.splice(0,1,"bt_quantum");
                selection(pbx_result);
            });

            $("#new").click(function(){
                $("#selection4").hide('slow');
                $("#selection3").show('slow');
                $("#amend").removeClass('active');
                $("#new").addClass('active');

                pbx_result.splice(1,1,"new");
                selection(pbx_result);
            });

            $("#amend").click(function(){
                $("#selection3").hide('slow');
                $("#selection4").show('slow');
                $("#new").removeClass('active');
                $("#amend").addClass('active');
            });

            $("#bundle").click(function(){

                var mivb_pbx = $.inArray("mivb", pbx_result) > -1;
                var ip_office_pbx = $.inArray("ip_office", pbx_result) > -1;
                var btq_pbx = $.inArray("new", pbx_result) > -1;
                var new_type = $.inArray("new", pbx_result) > -1;

                if(mivb_pbx && new_type){
                    url("mivb","new");
                }
                else if(ip_office_pbx && new_type){
                    url("ip_office","new");
                }
                else if(btq_pbx && new_type){
                    url("btq","new");
                };
            });

            function url(pbx,type){
                $("#bundle").attr("href", pbx + '/' + type);
            };

            function selection(res) {
                pbx_result = res;
            }

        });

    </script>

<div class="col-lg-8 col-lg-offset-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <p>
                <span class="col-lg-3">Select PBX for Quote: </span>
                <a id="mivb" class="btn btn-default" href="#" role="button">MiVB</a>
                <a id="ip_office" class="btn btn-default" data-toggle="collapse" data-target="#collapse2" href="#" role="button">IP Office</a>
                <a id="btq" class="btn btn-default" data-toggle="collapse" data-target="#collapse2" href="#" role="button">BT Quantum</a>
                <a id="reset" class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse2" href="#" role="button">Reset</a>
            </p>

            <div id="selection2" hidden>
                <p>
                    <span class="col-lg-3">Select Quote Type: </span>
                    <a id="new" class="btn btn-default" href="#" role="button">New</a>
                    <a id="amend" class="btn btn-default" href="#" role="button">Amend</a>
                    <a id="upgrade" class="btn btn-default" href="#" role="button">Upgrade</a>
                    <a id="maint" class="btn btn-default" href="#" role="button">Maintenance</a>
                </p>
            </div>

            <div id="selection3" hidden>
                <p>
                    <span class="col-lg-3">Select System Type: </span>
                    <a id="bundle" class="btn btn-default" href="#" role="button">Bundle</a>
                    <a id="non_bundle" class="btn btn-default" href="#" role="button">Non Bundle</a>
                </p>
            </div>

            <br/>

            <div id="selection4" hidden>
                <div class="col-lg-4">
                    <p>
                        <span class="col-lg-6">Quote Search: </span>
                        <a class="btn btn-default" href="#" role="button">View All</a>
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <span class="col-sm-7 contro-label">Search by AX ref / Name:</span>
                        <div class="col-sm-5">
                            <select class="form-control">
                                <option>Select</option>
                                <option>34432</option>
                                <option>44333</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <p>Please press Go once you have made your selections above. <input type="button" class="btn btn-success btn-lg" value="GO!"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop
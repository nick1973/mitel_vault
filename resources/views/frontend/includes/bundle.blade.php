<script>
    $(document).ready(function(){


        $("#collapse1").collapse('show');
        $("#collapse3").collapse('show');
        $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-down"></span> Hide Order Overview');

        $("#collapse2").on("show.bs.collapse", function(){
            $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-up"></span> Show Order Overview');

            $("#expand").removeClass('col-lg-4 col-md-4 col-sm-4');
            $("#expand").addClass('col-lg-8 col-md-8 col-sm-8');
            $("#collapse1").collapse('show');
            $("#collapse3").collapse('hide');
        });

        $("#collapse2").on("hide.bs.collapse", function(){
            $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-down"></span> Hide Order Overview');
            $("#expand").removeClass('col-lg-8 col-md-8 col-sm-8');
            $("#expand").addClass('col-lg-4 col-md-4 col-sm-4');
            $("#collapse1").collapse('show');
            $("#collapse3").collapse('show');
        });

    });
</script>
<br/>
    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 15px">
        <div class="pull-right">
            <button id="toggle-button" type="button" class="btn btn-success hidden-xs hidden-sm hidden-md" data-toggle="collapse" data-target="#collapse2">
                <span class="glyphicon glyphicon-collapse-down"></span> Hide Order Overview
            </button>
        </div>
    </div>

    <div class="collapse fade" id="collapse1">
        <div id="expand" class="col-lg-4 col-md-4 col-sm-4">
            @include('frontend.includes.col_x1')
        </div>
    </div>

    <div class="collapse fade" id="collapse2">
        <div class="col-lg-4 col-md-4 col-sm-8">
            @include('frontend.includes.cart_static')
        </div>
    </div>

    <div class="collapse fade" id="collapse3">
        <div class="col-lg-4 col-md-8 col-sm-8 hidden-xs hidden-sm hidden-md">
            @include('frontend.includes.col_x2')
        </div>
        <div class="col-lg-4 col-md-8 col-sm-8">
            @include('frontend.includes.cart_static')
        </div>
    </div>

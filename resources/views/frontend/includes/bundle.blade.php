<script>
    $(document).ready(function(){
        $("#collapse3").collapse('show');
        $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-down"></span> Hide Quote');
        $("#collapse2").on("hide.bs.collapse", function(){
            $(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Hide Quote');
            $("#collapse3").collapse('show');
        });
        $("#collapse2").on("show.bs.collapse", function(){
            $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-up"></span> Show Quote');
            $("#collapse3").collapse('hide');
        });
    });
</script>
<br/>
    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 15px">
        <div class="pull-right">
            <button id="toggle-button" type="button" class="btn btn-success hidden-xs hidden-sm hidden-md" data-toggle="collapse" data-target="#collapse2">
                <span class="glyphicon glyphicon-collapse-down"></span> Hide Quote
            </button>
        </div>
    </div>

    @include('frontend.includes.col_x1')

    <div class="collapse fade" id="collapse2">
        <div class="col-lg-8 col-md-8 col-sm-8">
            @include('frontend.includes.col_x2')
        </div>
    </div>

    <div class="collapse fade" id="collapse3">
        <div class="col-lg-4 col-md-8 col-sm-8">
            @include('frontend.includes.col_x2')
        </div>
        <div class="col-lg-4 col-md-4 hidden-xs hidden-sm hidden-md">
            @include('frontend.includes.cart_static')
        </div>
    </div>

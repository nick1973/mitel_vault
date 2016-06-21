<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8"><strong>Support: </strong>Is support required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-support"
                   onclick="visible(this.id,'nav-support')" checked>
            <label for="switch-support" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<h4 class="col-lg-7 col-md-7"><strong>Is Proactive Monitoring is included in your standard system Bundle?</strong></h4>
<br/>
<form id="support-post" class="form-horizontal animated fadeIn" action="/hardware_post">
<div id="nav-support" class="col-md-12 col-lg-12 animated fadeIn">
    <div class="form-group">
        <h4 class="col-lg-4 col-md-6"><strong>Included monitoring:</strong> Foundation Package</h4>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
        </div>

        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
           data-content="<img src='/images/proactive_monitoring.png'>"
           data-animation="true"></i>
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Note:" data-placement="right"--}}
        {{--data-content="A 20 Day standard Lead time" data-animation="true"></i>--}}
    </div>

    <h4 class="col-lg-12 col-md-12"><strong>Additional PRM Options:</strong> The following licenses are able to be added
        to your BT Bundle</h4>
    <br/>

    @foreach($support_options as $line)
        <div class="form-group">

            <label class="col-xs-3 col-sm-4 col-lg-4 control-label">{{ $line->item_name }}:</label>
            {{--<input type="text" class="form-control" name="qty[]" value="0">--}}
            <input class="hidden" name="id[]" value="{{ $line->id }}">
            <input class="hidden" name="price[]" value="{{ $line->btbuy }}">
            <input class="hidden" name="name[]" value="{{ $line->item_name }}">

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                <select class="form-control" name="qty[]">
                    <option>0</option>
                    <option>1</option>
                </select>
            </div>
            @if($line->info_view==1)
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="{{ $line->item_name }}" data-placement="right" data-html="true"
                   data-content="@if($line->image_view_info==1)
                                        <img height='200px' alt='/{{ $line->item_name }}' src='/{{ $line->image }}'>
                                    @endif
                   @if($line->description_view_info==1)
                        <p>{{$line->info_description}}</p>
                       @endif
                           " data-animation="true"></i>
            @endif
            @if(count($line->upgrades)>0)
                <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                   onclick="showUpgrades('{{ $line->item_name }}', {{ $line->upgrades }})"></i>
            @endif
            @if($line->warning_view==1)
                <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                   data-toggle="popover" title="{{ $line->item_name }}" data-placement="right" data-html="true"
                   data-content="@if($line->image_view_warning==1)
                                        <img height='200px' alt='/{{ $line->item_name }}' src='/{{ $line->image }}'>
                                    @endif
                   @if($line->description_view_warning==1)
                        <p>{{$line->warning_description}}</p>
                       @endif
                           " data-animation="true"></i>
            @endif
        </div>
    @endforeach



</div>
</form>
<button onclick="teleworkerPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                           aria-hidden="true"></span> Previous
</button>
<button onclick="maintNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                            aria-hidden="true"></span></button>
<script>
    function teleworkerPrev() {
        $('.nav-tabs a[href="#remote"]').tab('show');
    }

    function maintNext() {
        $("#tick-support").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#maint"]').tab('show');

        var formData = $("#support-post").serializeArray();
        var URL = $("#support-post").attr("action");
        console.log(formData);
        $.post(URL,
                formData,
                function (data, textStatus, jqXHR) {
                    $('#reload_cart').load('/cart_reload');
                    $http.get("#")
                            .then(function (response) {
                            }).fail(function (jqXHR, textStatus, errorThrown) {
                                console.log(errorThrown);
                            });

                });
    }
</script>
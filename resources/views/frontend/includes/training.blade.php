<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8"><strong>Training: </strong>Is training required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-training"
                   onclick="visible(this.id,'nav-training')" checked>
            <label for="switch-training" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8">Is on-site training required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="onsite_training"
                   onclick="visible(this.id,'onsite-training')">
            <label for="onsite_training" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8">Is web training required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="web_training"
                   onclick="visible(this.id,'web-training')">
            <label for="web_training" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-training" class="form-horizontal animated fadeIn" action="/hardware_post">

    <div id="onsite-training" class="col-md-12 col-lg-12 collapse">
        <h4 class="col-lg-offset-6"><strong>On-Site Training: </strong></h4>

        @foreach($training_on_site as $terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                    <input class="hidden" name="id[]" value="{{ $terminal->id }}">
                    <input class="hidden" name="price[]" value="{{ $terminal->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $terminal->item_name }}">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                @if($terminal->info_view==1)
                    <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="@if($terminal->image_view_info==1)
                                        <img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>
                                    @endif
                       @if($terminal->description_view_info==1)
                        <p>{{$terminal->info_description}}</p>
                       @endif
                               " data-animation="true"></i>
                @endif
                @if(count($terminal->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                @endif
                @if($terminal->warning_view==1)
                    <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="@if($terminal->image_view_warning==1)
                                        <img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>
                                    @endif
                       @if($terminal->description_view_warning==1)
                        <p>{{$terminal->warning_description}}</p>
                       @endif
                               " data-animation="true"></i>
                @endif
            </div>
        @endforeach

    </div>

    <div id="web-training" class="col-md-12 col-lg-12 collapse">
        <h4 class="col-lg-offset-6"><strong>Web Training: </strong></h4>
        @foreach($training_web as $terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                    <input class="hidden" name="id[]" value="{{ $terminal->id }}">
                    <input class="hidden" name="price[]" value="{{ $terminal->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $terminal->item_name }}">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                @if($terminal->info_view==1)
                    <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="@if($terminal->image_view_info==1)
                                        <img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>
                                    @endif
                       @if($terminal->description_view_info==1)
                        <p>{{$terminal->info_description}}</p>
                       @endif
                               " data-animation="true"></i>
                @endif
                @if(count($terminal->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                @endif
                @if($terminal->warning_view==1)
                    <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="@if($terminal->image_view_warning==1)
                                        <img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'>
                                    @endif
                       @if($terminal->description_view_warning==1)
                        <p>{{$terminal->warning_description}}</p>
                       @endif
                               " data-animation="true"></i>
                @endif
            </div>
        @endforeach
    </div>
</form>
<button onclick="peripheralsPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                            aria-hidden="true"></span> Previous
</button>
<button onclick="teleworkerNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                                 aria-hidden="true"></span></button>
<script>
    function peripheralsPrev() {
        $('.nav-tabs a[href="#peripherals"]').tab('show');
    }

    function teleworkerNext() {
        $("#tick-training").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#remote"]').tab('show');

        var formDataLan = $("#nav-training").serializeArray();
        var URL = $("#nav-training").attr("action");
        console.log(formDataLan);
        $.post(URL,
                formDataLan,
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
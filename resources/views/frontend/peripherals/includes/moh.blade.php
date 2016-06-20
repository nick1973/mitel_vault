<br/>
<h4>Music On Hold Playback Unit</h4>
<br/>
<div class=" col-lg-12">
    @foreach($peripherals_moh_playback_unit as $terminal)
        <div class="form-group">
            <label for="inputEmail3"
                   class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                <input class="" name="id[]" value="{{ $terminal->id }}">
                <input class="" name="price[]" value="{{ $terminal->btbuy }}">
                <input class="" name="name[]" value="{{ $terminal->item_name }}">
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
<br/>
<h4>Music On Hold Playback Unit Upgrades</h4>
<br/>
<div class=" col-lg-12">
    @foreach($peripherals_moh_unit_upgrades as $terminal)
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

<br/>
<h4>Music On Hold - Non-copyright Managed Services
</h4>
<br/>
<div class=" col-lg-12">
    @foreach($peripherals_moh_managed_services as $terminal)
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

<br/>
<h4>Music On Hold - Copyright Managed Services</h4>
<br/>
<div class=" col-lg-12">
    @foreach($peripherals_moh_copyright_managed_services as $terminal)
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
<br/>
<hr>


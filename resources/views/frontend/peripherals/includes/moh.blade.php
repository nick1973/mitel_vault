<br/>
<h4><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music On Hold Playback Unit</h4>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-5 col-lg-8 col-md-8 control-label">
        BTB External MOH unit
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_ext_moh" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_ext_moh" class="toggleBtn onoffswitch-checkbox"
                   id="moh-unit">
            <label for="moh-unit" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<br/>
<h4><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music On Hold Playback Unit Upgrades</h4>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-5 col-lg-8 col-md-8 control-label">
        BTB Non-copyright Monthly Contract
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_ncopy_month" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_ncopy_month" class="toggleBtn onoffswitch-checkbox"
                   id="moh-mnth">
            <label for="moh-mnth" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-5 col-lg-8 col-md-8 control-label">
        BTB Non-copyright Quarterly Contract
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_ncopy_quart" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_ncopy_quart" class="toggleBtn onoffswitch-checkbox"
                   id="moh-quart">
            <label for="moh-quart" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<br/>
<h4><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music On Hold - Non-copyright Managed Services
</h4>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-5 col-lg-8 col-md-8 control-label">
        BTB Managed MOH unit + monthly non-copyright music Contract
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_ncopy_month_music" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_ncopy_month_music"
                   class="toggleBtn onoffswitch-checkbox" id="moh-musiccont">
            <label for="moh-musiccont" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-5 col-lg-8 col-md-8 control-label">
        BTB Managed MOH unit + quarterly non-copyright music Contract
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_ncopy_quart_music" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_ncopy_quart_music"
                   class="toggleBtn onoffswitch-checkbox" id="moh-musiccont-quart">
            <label for="moh-musiccont-quart" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<br/>
<h4><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music On Hold - Copyright Managed Services</h4>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-8 col-lg-8 col-md-8 control-label">
        BTB Managed MOH unit + monthly copyright music Contract
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_copy_month_music" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_copy_month_music"
                   class="toggleBtn onoffswitch-checkbox" id="moh-musiccont-mnth">
            <label for="moh-musiccont-mnth" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-8 col-lg-8 col-md-8 control-label">
        Customer has agreed to obtain their own PRS and PPL licenses
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <div class="onoffswitch">
            <input name="peripherals_obtain_own_prs" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripherals_obtain_own_prs" class="toggleBtn onoffswitch-checkbox"
                   id="moh-ppl">
            <label for="moh-ppl" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="form-group">
    <label for="" class="col-sm-5 col-lg-8 col-md-8 control-label">
        No. of lines on system for PRS and PPL copyright licenses fees
    </label>

    <div class="col-sm-1 col-lg-4 col-md-4">
        <input type="text" class="form-control">
        {{--{!! Form::input('peripherals_num_prs', 'peripherals_num_prs', null, ['class' => 'form-control']) !!}--}}
    </div>
</div>
<br/>
<hr>


<div class="form-group">
    <h4 class="col-lg-3 col-md-3 col-lg-offset-3">System Cabling:</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="cabling-install"
                   onclick="visible(this.id,'install_cabling')">
            <label for="cabling-install" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<div id="install_cabling" class="collapse">

    <br/><br/>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Select the cabling type to be used
        </label>

        <div class="col-sm-2">
            {!! Form::input('cabling_type','cabling_type', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Does existing cable exist that is to be reused?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_reuse_existing" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_reuse_existing" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-reused">
                <label for="cabling-reused" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are existing outlets to be reused and if yes, how many?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_reuse_outlets" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_reuse_outlets" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-out">
                <label for="cabling-out" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div class="col-sm-1">
            {!! Form::input('cabling_reuse_outlets_qty','cabling_reuse_outlets_qty', null, ['class' => 'form-control'])
            !!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Does the customer require BT to install new cabling?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_new" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_new" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-new">
                <label for="cabling-new" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are BT required to install new outlets, and if yes, how many?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_install_outlets" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_install_outlets" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-install">
                <label for="cabling-install" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div class="col-sm-1">
            {!! Form::input('cabling_install_outlets_qty','cabling_install_outlets_qty', null, ['class' =>
            'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are BT required to provide OSCA/Baluns, and if yes, how many?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_provide_osca" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_provide_osca" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-osca">
                <label for="cabling-osca" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div class="col-sm-1">
            {!! Form::input('cabling_provide_osca_qty','cabling_provide_osca_qty', null, ['class' => 'form-control'])
            !!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Has an order been placed with BT for the cabling to be installed?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_order_placed" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_order_placed" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-bt">
                <label for="cabling-bt" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Confirm the maximum distance BT are required to run a cable
        </label>

        <div class="col-sm-2">
            {!! Form::input('cabling_max_distance','cabling_max_distance', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Is a Voice Tie cable required?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="cabling_voice_tie" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="cabling_voice_tie" class="toggleBtn onoffswitch-checkbox"
                       id="cabling-tie">
                <label for="cabling-tie" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>
</div>

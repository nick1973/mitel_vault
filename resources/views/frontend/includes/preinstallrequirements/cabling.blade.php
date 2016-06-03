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

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are existing outlets to be reused and if yes, how many?
        </label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
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

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are BT required to install new outlets, and if yes, how many?
        </label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
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

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
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

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
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

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>
</div>

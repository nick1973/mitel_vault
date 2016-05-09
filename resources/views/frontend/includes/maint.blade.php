<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>Maintenance: </strong>Is Maintenance required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-maint"
                   onclick="visible(this.id,'nav-maint')">
            <label for="switch-maint" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-maint" class="form-horizontal collapse animated fadeIn" action="/bundle_post">
    <h4 class="col-lg-12 col-md-12"><strong>BT Maintenance: </strong>What BT Maintenance cover is required from BT?</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Standard Care:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Total Care:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">No Maintenance:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Prompt Care:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="pri">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="7410 DECT" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5320.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Critical Care:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

    </div>


    <h4 class="col-lg-12 col-md-12"><strong>BT Maintenance: </strong>Select BT Maintenance Term</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">12 Month Term:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">24 Month Term:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">36 Month Term:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="pri">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="7410 DECT" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5320.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">60 Month Term:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

    </div>

    <h4 class="col-lg-12 col-md-12"><strong>BT Phone Maintenance: </strong>Select BT Phone Maintenance</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Same as System:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Standard Care
                Phones:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">No Phone
                Maintenance:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="pri">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="7410 DECT" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5320.jpg'>" data-animation="true"></i>
        </div>

    </div>

</form>
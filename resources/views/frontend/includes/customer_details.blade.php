<div class="panel panel-default">
    <div class="panel-body">
        <h2>BT Originator:</h2>
        {{--{!! Form::model($customer,[--}}
        {{--'method' => 'PATCH',--}}
        {{--'route' => ['ipo-echosign.customer_detail.update',$customer->crf_id],--}}
        {{--'class' => 'form-horizontal']) !!}--}}
<form class="form-horizontal">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">BT Originators Name:</label>
                <div class="col-sm-5">
                    {!! Form::input('originator_name', 'originator_name', null, ['class' => 'form-control disabled']) !!}
                </div>
            </div>

            {{--<div class="form-group">--}}
            {{--<label for="inputEmail3" class="col-sm-4 control-label">BT CRF Number:</label>--}}
            {{--<div class="col-sm-5">--}}
            {{--{!! Form::input('crf_id', 'crf_id', null, ['class' => 'form-control','disabled']) !!}--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">BT Sales Channel:</label>
                <div class="col-sm-5">
                    <select class="form-control">
                        <option></option>
                    </select>
                    {{--{!! Form::select('sales_channel', $lob->lists('selection','selection'), null, ['class' => 'form-control']) !!}--}}
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">BT Sales Manager:</label>
                <div class="col-sm-5">
                    {!! Form::input('manager', 'manager', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <hr>

        <div class="col-md-7">

            <h2>Customer Details:</h2>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Company Name:</label>
                <div class="col-sm-5">
                    {!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Contact Name:</label>
                <div class="col-sm-5">
                    {!! Form::input('contact_name', 'contact_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Contact Number:</label>
                <div class="col-sm-5">
                    {!! Form::input('contact_number', 'contact_number', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Contact Email Address:</label>
                <div class="col-sm-5">
                    {!! Form::input('contact_email', 'contact_email', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Alternative Contact Name:</label>
                <div class="col-sm-5">
                    {!! Form::input('alt_contact_name', 'alt_contact_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Websites:</label>
                <div class="col-sm-5">
                    {!! Form::input('website', 'website', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Vertical Markets:</label>
                <div class="col-sm-5">
                    {{--{!! Form::select('vertical_markets', ['education'=>'Education',--}}
                    {{--'health'=>'Health',--}}
                    {{--'public'=>'Public Sector'],--}}
                    {{--null, ['class' => 'form-control']) !!}--}}
                </div>
            </div>

        </div>

        <div class="col-md-5">

            <h2>Address(es):</h2>

            <div class="form-group">
                <div class="col-sm-9">
                    <label for="inputEmail3">System Installation Address:</label>
                    {!! Form::textarea('system_address', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Postcode:</label>
                <div class="col-sm-5">
                    {!! Form::input('system_postcode', 'system_postcode', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Contact Number:</label>
                <div class="col-sm-5">
                    {!! Form::input('alt_contact_number', 'alt_contact_number', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{--<button type="submit" class="btn btn-primary">Save</button>--}}
            </div>
        </div>
        </form>

        <div class="form-group">
            <div class="col-sm-10">
                <button class="btn btn-danger" data-href="#" data-toggle="modal" data-target="#confirm-delete">
                    Delete
                </button>
                <button id="save-customer-details" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Are you sure you want to delete this CRF?</h2>
            </div>
            <div class="modal-body">
                <p>This can't be reversed</p>
            </div>
            <div class="modal-footer">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                <div class="col-lg-1">
                    {{--{!! Form::open([--}}
                    {{--'method' => 'DELETE',--}}
                    {{--'route' => ['ipo-echosign.customer_detail.destroy', $customer->crf_id,--}}
                    {{--'class' => 'form-horizontal']--}}
                    {{--]) !!}--}}
                    <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });

    $("#save-customer-details").click(function () {
        $("#tick-customer-details").removeClass('hidden');
        $('.nav-tabs a[href="#bundle"]').tab('show');
    });

</script>
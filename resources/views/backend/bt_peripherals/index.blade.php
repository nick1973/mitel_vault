@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
    <a class="btn btn-danger pull-right" href="/admin/product_management/bt_peripherals/create">Add New!</a>
    <br/>
@endsection

@section('content')
    @if(Session::has('exists'))
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::get('exists') }}</p>
        </div>
    @endif
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.dashboard.welcome') }} {!! access()->user()->name !!}!</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="bt_peripherals" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>supplier_ref</th>
                        <th>B-Code</th>
                        <th>Item</th>
                        <th>qty</th>
                        <th>description</th>
                        <th>item_code</th>
                        <th>xfer</th>
                        <th>bteup</th>
                        <th>btbuy</th>
                        <th>quote_type</th>
                        <th>max_discount</th>
                        <th>1 Yr Standard Care</th>
                        <th>1 Yr Prompt Care</th>
                        <th>1 Yr Total Care</th>
                        <th>3 Yr Standard Care</th>
                        <th>3 Yr Prompt Care</th>
                        <th>3 Yr Total Care</th>
                        <th>5 Yr Standard Care</th>
                        <th>5 Yr Prompt Care</th>
                        <th>5 Yr Total Care</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
                <br/>
            </div>
        </div>
        <!-- /.box-body -->
    </div><!--box box-success-->

@endsection

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Peripherals</h4>
            </div>
            <div class="modal-body">
                <div id="piechart"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




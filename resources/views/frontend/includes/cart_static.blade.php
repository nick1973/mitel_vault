<div class="table-responsive">
<div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Your Quote</h3></div>
        <div class="panel-body">
        <table class='table table-striped table-condensed'>
            <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Cost</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>£ {{ $row->price }}</td>
                    <td>£ {{ $row->subtotal }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h4>Total £{{ $total }}</h4>
        <a href='empty_cart' class='btn btn-danger'>Clear Quote</a>
            <a href='ax_cart' class='btn btn-primary pull-right'>Generate Quote</a>
    </div>
</div>
</div>

{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$('#static-btn').popover('show')--}}
    {{--});--}}

{{--</script>--}}

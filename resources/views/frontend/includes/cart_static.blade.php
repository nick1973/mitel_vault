<div id="reload_cart" class="table-responsive">
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
                {{--<th>Remove</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $row)
                <tr>
                    <td width="200px">{{ $row->name }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>£ {{ $row->price }}</td>
                    <td>£ {{ $row->subtotal }}</td>
                    <td><span onclick="remove_item('{{ $row->rowid }}')" class="glyphicon glyphicon-remove-circle"
                              style="color: #ff0000" aria-hidden="true"></span></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h4>Total £{{ $total }}</h4>
        <button onclick="emptyCart()" class='btn btn-danger'>Clear Quote</button>
        {{--<a href='/empty_cart' class='btn btn-danger'>Clear Quote</a>--}}
            <a href='ax_cart' class='btn btn-primary pull-right'>Generate Quote</a>
    </div>
</div>
</div>


{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$('#static-btn').popover('show')--}}
    {{--});--}}

{{--</script>--}}


    <button type="button" class="btn btn-primary pull-right" title="<h3><center>Your Quote</center></h4>" data-container="body" data-toggle="popover" data-placement="bottom"
            data-html="true" data-animation="fade" data-trigger="hover" data-delay='{"hide":"2000"}' data-content="
            <table class='table table-striped'>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Item Price</th>
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
            <a href='ax_cart' class='btn btn-primary pull-right'>Generate Quote</a>">
        Your Quote
    </button>




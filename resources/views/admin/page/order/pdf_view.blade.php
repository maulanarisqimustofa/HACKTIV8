<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <h1>List of Order</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="15%">Invoice Id</th>
                    <th width="15%">Produk</th>
                    <th width="15%">Pelanggan</th>
                    <th width="10%">Jumlah</th>
                    <th width="10%">Total</th>
                    <th width="10%">Status</th>
                    <th width="10%">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($DataOrder))
                @foreach($DataOrder as $key => $order)
                <tr>
                    <td>{{ $order->invoice_id }}</td>
                    <td>{{ $order->produk->nama }}</td>
                    <td>{{ $order->pelanggan }}</td>
                    <td>{{ $order->jumlah }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">there are no records
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
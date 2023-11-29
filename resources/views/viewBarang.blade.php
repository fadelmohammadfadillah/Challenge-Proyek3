<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengelolaan Pujasera</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- Styles -->
    </head>
    <body>
        <div class="card">
            <div class="card-body p-0" style="margin: 20px">
                <table
                    id="viewBarang"
                    class="table table-striped table-bordered display"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>kode_barang</th>
                            <th>kode_tenan</th>
                            <th>nama_barang</th>
                            <th>satuan</th>
                            <th>harga_satuan</th>
                            <th>stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <br>
        <a href="{{url('/')}}" class="btn bg-primary text-white" >kembali</a>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#viewBarang').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('getDataBarang') !!}',
            columns: [
                { data: 'kode_barang', name: 'kode_barang' },
                { data: 'kode_tenan', name: 'kode_tenan' },
                { data: 'nama_barang', name: 'nama_barang' },
                { data: 'satuan', name: 'satuan' },
                { data: 'harga_satuan', name: 'harga_satuan' },
                { data: 'stok', name: 'stok' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
</html>
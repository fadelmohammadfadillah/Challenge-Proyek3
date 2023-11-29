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
        @if(session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
            {{ session('status') }}
        </div>
        @endif
        <div>
            <form action="{{ route('storeBarang') }}" method="post">
                @csrf
                <label for="kode_barang">kode barang: </label>
                <input type="number" name="kode_barang" id="kodeBarang">
                <br>
                <label for="nama_barang">nama barang: </label>
                <input type="text" name="nama_barang" id="namaBarang">
                <br>
                <label for="satuan">satuan barang: </label>
                <input type="text" name="satuan" id="satuanBarang">
                <br>
                <label for="harga_satuan">Harga satuan: </label>
                <input type="number" name="harga_satuan" id="hargaSatuan">
                <br>
                <label for="stok">Stok: </label>
                <input type="number" name="stok" id="stok">
                <br>
                <label for="kode_tenan">Kode tenan: </label>
                <select name="kode_tenan" id="kodeTenan">
                    <option value="1">bu oneng</option>
                    <option value="2">warung katsu</option>
                </select>
                <br>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            <br>
            <a href="{{url('/')}}" class="btn bg-primary text-white" >kembali</a>
        </div>
    </body>

</html>
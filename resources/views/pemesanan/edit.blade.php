<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Pemesanan</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    @php
        $id = request()->route('pemesanan');
        $pemesanan = \App\Models\Pemesanan::find($id);
        $kasirs = \App\Models\Kasir::all();
    @endphp

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg" style="margin-top: 107px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">EDIT PEMESANAN</h1>
                            </div>
                            <form class="user" action="{{ route('pemesanan.edit', ['id' => $id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="ID pemesanan" name="txt_id" value="{{ $pemesanan->id }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama Customer" name="txt_nama_customer" value="{{ $pemesanan->nama_customer }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Jenis Pelayanan" name="txt_jenis_pelayanan" value="{{ $pemesanan->jenis_pelayanan }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga" name="txt_harga" value="{{ $pemesanan->harga }}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="No Antrian" name="txt_no_antrian" value="{{ $pemesanan->no_antrian }}">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Tanggal Pemesanan" name="txt_tanggal_pemesanan" value="{{ $pemesanan->tanggal_pemesanan }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-select" name="txt_kasirID">
                                        <option value="">Pilih Kasir</option>
                                        @foreach($kasirs as $kasir)
                                            <option value="{{ $kasir->kasirID }}" @if($kasir->kasirID == $pemesanan->kasirID) selected @endif>
                                                {{ $kasir->username }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary btn-user btn-block">TAMBAHKAN</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>

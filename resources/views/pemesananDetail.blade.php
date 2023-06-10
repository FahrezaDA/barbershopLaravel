<?php

if( isset($_POST['register']) ){
    $nama_customer = $_POST['txt_nama_customer'];
    $jenis_pelayanan = $_POST['txt_jenis_pelayanan'];
    $harga = $_POST['txt_harga'];
    $no_antrian = $_POST['txt_no_antrian'];
    $tanggal_pemesanan= $_POST['txt_tanggal_pemesanan'];
    $kasir = $_POST['txt_id_kasir'];

    
    $q = mysqli_query($koneksi, "SELECT*FROM pemesanan WHERE nama_customer='$nama_customer' ");
    $cek = mysqli_num_rows($q);

    // query memasukkan data 
    if ($cek == 0) {
        $query = "INSERT INTO pemesanan VALUES(null, '$nama_customer', '$jenis_pelayanan', '$harga','$no_antrian','$tanggal_pemesanan','$kasir')";
        $result = mysqli_query($koneksi, $query);
        header('Location: dashboardPemesanan.php');
        if($query){
            $alert = "<div class='alert alert-success'> anda berhasil </div>";
        }
    }
    else {
        $alert = "<div class='alert alert-danger'> Username sudah di pakai </div>";
    }
}
//$nomor = 1;
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Pesanan</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

@php
    $pelayanan = \App\Models\Pelayanan::all();
    $kasir = \App\Models\Kasir::all();
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
                                <h1 class="h4 text-gray-900 mb-4">PEMESANAN</h1>
                            </div>
                            <form class="user" action="{{ route('pemesanan.create') }}" method="GET">
                                @csrf
                                @if(isset($alert))
                                <div class="alert alert-success">{{ $alert }}</div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama" name="txt_nama_customer">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="No Antrian" name="txt_no_antrian"
                                        value="{{ $row['no_antrian'] ?? '' }}">
                                </div>
                                </br>
                                <div class="form-group">
                                    <select type="text" placeholder="Pilih Daftar Sebagai"
                                        class="form-control form-select" name="txt_jenis_pelayanan" id="OptionLevel">
                                        <option>Pilih Pelayanan</option>
                                        @foreach($pelayanan as $item)
                                            <option value="{{ $item->jenis_pelayanan }}">{{ $item->jenis_pelayanan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Harga" name="txt_harga">
                                </div>
                                <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                    placeholder="{{ date('d-m-Y') }}" value="{{ date('d-m-Y') }}"
                                    name="txt_tanggal_pemesanan" readonly><br>
                                <div class="form-group">
                                    <select type="text" placeholder="Pilih Daftar Sebagai"
                                        class="form-control form-select" name="txt_id_kasir" id="OptionLevel">
                                        <option>Pilih Kasir</option>
                                        @foreach($kasir as $item)
                                        <option value="{{ $item->kasirID }}">{{ $item->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="register"
                                    class="btn btn-primary btn-user btn-block">TAMBAHKAN</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>


</body>

</html>

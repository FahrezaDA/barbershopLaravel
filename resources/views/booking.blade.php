<?php

session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}


if( isset($_POST['register']) ){
    $foto = $_FILES['bukti_transfer']['name'];
    $temp = $_FILES['bukti_transfer']['tmp_name'];
    $size = $_FILES['bukti_transfer']['size'];
    $nama = $_POST['txt_nama'];
    $no_telpon = $_POST['txt_no_telpon'];
    $jenis_pelayanan = $_POST['txt_jenis_pelayanan'];
    $harga = $_POST['txt_harga'];
    $tanggal_booking = $_POST['txt_tanggal_booking'];
    $jam = $_POST['txt_jam'];
    $image_files=$foto;
    $status=$_POST['txt_status'];

    if($size > 5000000){
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
    }
    $q = mysqli_query($koneksi, "SELECT*FROM booking WHERE jam_booking='$jam' AND tanggal_booking='$tanggal_booking' ");

    $cek = mysqli_num_rows($q);

    copy($temp, "img/fileBooking/" . $image_files);
    if($cek==0 ){
        $query = "INSERT INTO booking VALUES(null, '$nama', '$no_telpon','$jenis_pelayanan','$harga', '$tanggal_booking','$jam','$foto','wait')";
         $result = mysqli_query($koneksi, $query);
        header('Location: bookingCustomer.php');
        if($query){
            $alert = "<div class='alert alert-success'> anda berhasil </div>";
        }
    }
else {
    $alert = "<div class='alert alert-danger'> JAM ATAU HARGA SALAH </div>";
}
    // query memasukkan data
}
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Booking</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
@php
    $pelayanan = \App\Models\Pelayanan::all();
    $kasir = \App\Models\Kasir::all();
    $DataBooking = \App\Models\DataBooking::all();
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
                                <h1 class="h4 text-gray-900 mb-4">Booking</h1>
                            </div>
                            <form class="user" action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <input  placeholder="No Telpon" type="text" class="form-control form-select" id="exampleInputUsername"
                                        name="no_telpon">
                                </div>
                                <div class="form-group">
                                    <select type="text" placeholder="Pilih Daftar Sebagai"
                                        class="form-control form-select" name="jenis_pelayanan" id="OptionLevel">
                                        <option>Pilih Pelayanan</option>
                                        @foreach($pelayanan as $item)
                                            <option value="{{ $item->jenis_pelayanan }}">{{ $item->jenis_pelayanan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" name="harga">

                                </select>
                                </div>
                                <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="<?php echo date('d-m-Y');?>" value="<?php echo date('d-m-Y');?>" name="tanggal_booking"  >
                                </div>
                                <div class="form-group">
                                    <select type="text" placeholder="Pilih Daftar Sebagai"
                                        class="form-control form-select" name="jam_booking" id="OptionLevel">
                                        <option>Pilih Jam</option>
                                        @foreach($DataBooking as $item)
                                            <option value="{{ $item->jam }}">{{ $item->jam }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p><b>Bukti Pembayaran :</P>
                                    <input  placeholder="bukti transfer" type="file" class="form-control form-select" id="exampleInputUsername"
                                        name="bukti_transfer">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="ID pemesanan" name="stats">
                                </div>
                                <p><b>No Rek : 12345678910  ( BRI a/n Paijah  Paijih )</b></p>


                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">TAMBAHKAN</button>
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}"></a>
                            </div>
                        </div>
                        <p><b><i>Jika ada masalah silahkan hubungi admin : </br>(jamila : 081222334411)</i></b></p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
    $(document).ready(function() {
        // Menangani perubahan pada select jenis pelayanan
        $('select[name="jenis_pelayanan"]').on('change', function() {
            var jenisPelayanan = $(this).val(); // Mendapatkan jenis pelayanan yang dipilih
            $.ajax({
                url: '{{ route("bookingCustomer.getHarga") }}',
                type: 'GET',
                data: { jenis_pelayanan: jenisPelayanan },
                success: function(response) {
                    $('#harga').text( response.harga);
                    $('input[name="harga"]').val(response.harga); // Mengisi nilai input hidden dengan harga
                },
                error: function() {
                    // Penanganan kesalahan jika diperlukan
                }
            });
        });
    });
</script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


</body>

</html>

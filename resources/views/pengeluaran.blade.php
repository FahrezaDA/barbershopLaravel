<?php
/*
require('koneksi.php');
if( isset($_POST['submit']) ){
    $foto = $_FILES['bukti_nota']['name'];
    $temp = $_FILES['bukti_nota']['tmp_name'];
    $size = $_FILES['bukti_nota']['size'];
    $userJenisPengeluaran = $_POST['txt_jenis_pengeluaran'];
    $userIdFasilitas = $_POST['txt_id_fasilitas'];
    $userJumlah = $_POST['txt_jumlah'];
    $userBiaya = $_POST['txt_biaya'];
    $image_files=$foto;
    $userTanggalPengeluaran = $_POST['txt_tanggal_pengeluaran'];
    $userIdUser = $_POST['txt_id_kasir'];
    
    if($size > 5000000){
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
    }
    copy($temp, "img/fileNota/" . $image_files);
    $query = "INSERT INTO pengeluaran VALUES(null, '$userJenisPengeluaran', '$userIdFasilitas', '$userJumlah','$userBiaya','$foto','$userTanggalPengeluaran','$userIdUser')";
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardPengeluaran.php');
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="{{ asset('stylesheet" href="css/sb-admin-2.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg" style="margin-top: 107px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-logo"></div>
                    <div class="col-lg-7 bg-form">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">TAMBAHKAN PENGELUARAN</h1>
                            </div>
                            <form class="user" action="/pengeluaran" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Jenis Pengeluaran" name="txt_jenis_pengeluaran">
                                </div>
                                <div class="form-group">
                                <select type="text" placeholder="Pilih Daftar Sebagai" class="form-control  form-select" name="txt_id_fasilitas" id="OptionLevel">
                                <option>Nama Fasilitas</option>
                                 <?php
                                 /*
                                $query = "SELECT * FROM fasilitas";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=$row[id_fasilitas] > $row[nama_fasilitas] </option>";}
                                */
                                ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Jumlah" name="txt_jumlah">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="biaya " name="txt_biaya">
                                </div>
                                <div class="form-group">
                                    <p><b>Bukti Pembayaran :</P>
                                    <input  placeholder="bukti transfer" type="file" class="form-control form-select" id="exampleInputUsername"
                                        name="bukti_nota">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" 
                                        placeholder="Tanggal Pengeluaran" name="txt_tanggal_pengeluaran">
                                </div>
                                <div class="form-group">
                                <select type="text" placeholder="Pilih Kasir" class="form-control  form-select" name="txt_id_kasir" id="OptionLevel">
                                <option>Pilih Kasir</option>
                                 <?php
                                 /*
                                $query = "SELECT * FROM kasir";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=$row[kasirID] > $row[username] </option>";}
                                */
                                ?>
                                </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah Pengeluaran</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

     <!-- Bootstrap core JavaScript-->
     <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


</body>

</html>
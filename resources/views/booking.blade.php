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
                            <form class="user" action="/booking" method="POST" enctype="multipart/form-data">
                                <?php echo @$alert ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama" name="txt_nama">
                                </div>
                                <div class="form-group">
                                    <input  placeholder="No Telpon" type="text" class="form-control form-select" id="exampleInputUsername"
                                        name="txt_no_telpon">
                                </div>
                                <div class="form-group">
                                <select type="text" placeholder="Pilih Daftar Sebagai" class="form-control  form-select" name="txt_jenis_pelayanan" id="OptionLevel">
                                <option>Pilih Pelayanan</option>
                                 <?php
                                // $query = "SELECT * FROM pelayanan";
                               // $result = mysqli_query($koneksi, $query);
                                // while ($row = mysqli_fetch_array($result)) {
                                // echo "<option value=$row[jenis_pelayanan] > $row[jenis_pelayanan] </option>";}
                                ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <select type="text" placeholder="Pilih Daftar Sebagai" class="form-control  form-select" name="txt_harga" id="OptionLevel">
                                <option>Harga</option>
                                 <?php
                                //$query = "SELECT * FROM pelayanan";
                                //$result = mysqli_query($koneksi, $query);
                                //while ($row = mysqli_fetch_array($result)) {
                                //echo "<option value=$row[harga]  > $row[jenis_pelayanan]    ( $row[harga] )  </option>";}
                                ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="<?php echo date('d-m-Y');?>" value="<?php echo date('d-m-Y');?>" name="txt_tanggal_booking"  >
                                </div>
                                <div class="form-group">
                                <select type="text" placeholder="Pilih Daftar Sebagai" class="form-control  form-select" name="txt_jam" id="OptionLevel">
                                <option>Pilih Jam Booking</option>
                                 <?php
                                //$query = "SELECT * FROM data_booking";
                                //$result = mysqli_query($koneksi, $query);
                                //while ($row = mysqli_fetch_array($result)) {
                                //echo "<option value=$row[jam] > $row[jam] </option>";
                                ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <p><b>Bukti Pembayaran :</P>
                                    <input  placeholder="bukti transfer" type="file" class="form-control form-select" id="exampleInputUsername"
                                        name="bukti_transfer">
                                </div>
                             
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="ID pemesanan" name="txt_status" value="">
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


    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


</body>

</html>

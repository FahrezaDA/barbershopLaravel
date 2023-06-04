<?php
/*
require('koneksi.php');
if( isset($_POST['submit']) ){
    $userName = $_POST['txt_nama'];
    $userAlamat = $_POST['txt_alamat'];
    $userNoTelpon = $_POST['txt_no_telpon'];
    $userEmail = $_POST['txt_email'];
    $userPassword = $_POST['txt_password'];
    $userJabatan = $_POST['txt_jabatan'];
    $userLevel = $_POST['txt_level'];
   
   

    $q = mysqli_query($koneksi, "SELECT*FROM user WHERE no_telpon='$userNoTelpon' AND  email='$userEmail' ");
    $cek = mysqli_num_rows($q);

    if($cek==0){
        $query = "INSERT INTO user VALUES(null, '$userName', '$userAlamat','$userNoTelpon','$userEmail','$userPassword','$userJabatan','$userLevel')";
        $result = mysqli_query($koneksi, $query);
        header('Location: dashboardUser.php');
        if($query){
            $alert = "<div class='alert alert-success'> anda berhasil </div>";
        }
    }
else {
    $alert = "<div class='alert alert-danger'> Email sudah di pakai </div>";
}
    
   
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
                                <h1 class="h4 text-gray-900 mb-4">TAMBAHKAN USER</h1>
                            </div>
                            <?php echo @$alert ?>
                            <form class="user" action="/registerUser" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama" name="txt_nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Alamat" name="txt_alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="No Telpon" name="txt_no_telpon">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email " name="txt_email">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Password " name="txt_password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Jabatan " name="txt_jabatan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Level " name="txt_level">
                                </div>
                                
                              
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah Customer</button>
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
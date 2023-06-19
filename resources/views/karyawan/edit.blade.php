<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Karyawan</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg" style="margin-top: 107px;">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Karyawan</h1>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('karyawan.edit', ['id' => $karyawan->id_karyawan]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="ID pemesanan" name="txt_id_karyawan" value="{{ $karyawan->id_karyawan}}">
                                </div>
                                <div class="form-group">
                                    <label for="txt_nama_karyawan">Nama Karyawan</label>
                                    <input type="text" class="form-control" id="txt_nama_karyawan" name="txt_nama_karyawan" value="{{ $karyawan->nama_karyawan }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_alamat">Alamat</label>
                                    <input type="text" class="form-control" id="txt_alamat" name="txt_alamat" value="{{ $karyawan->alamat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_no_telpon">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="txt_no_telpon" name="txt_no_telpon" value="{{ $karyawan->no_telpon }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_email">Email</label>
                                    <input type="email" class="form-control" id="txt_email" name="txt_email" value="{{ $karyawan->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_posisi">Posisi</label>
                                    <input type="text" class="form-control" id="txt_posisi" name="txt_posisi" value="{{ $karyawan->posisi }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_gaji">Gaji</label>
                                    <input type="number" class="form-control" id="txt_gaji" name="txt_gaji" value="{{ $karyawan->gaji }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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


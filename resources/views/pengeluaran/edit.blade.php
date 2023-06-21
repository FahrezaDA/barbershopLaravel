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
                        <h1 class="h4 text-gray-900 mb-4">EDIT PENGELUARAN</h1>
                    </div>
                
                    <form method="POST" action="{{ route('pengeluaran.update') }}">
                        @csrf
                        @method('PUT')
                        

                        <div class="form-group">
                            <label for="txt_jenis_pengeluaran">Jenis Pengeluaran</label>
                            <input type="text" class="form-control" id="txt_jenis_pengeluaran" name="txt_jenis_pengeluaran" value="{{ $pengeluaran->txt_jenis_pengeluaran }}" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_id_fasilitas">Id Fasilitas</label>
                            <input type="text" class="form-control" id="txt_id_fasilitas" name="txt_id_fasilitas" value="{{ $pengeluaran->id_fasilitas }}" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="txt_jumlah" name="txt_jumlah" value="{{ $pengeluaran->jumlah }}" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_biaya">Biaya</label>
                            <input type="text" class="form-control" id="txt_biaya" name="txt_biaya" value="{{ $pengeluaran->biaya }}" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_bukti_nota">Bukti Nota</label>
                            <input type="file" class="form-control" id="txt_bukti_nota" name="txt_bukti_nota">
                        </div>
                        <div class="form-group">
                            <label for="txt_tanggal_pengeluaran">Tanggal Pengeluaran</label>
                            <input type="date" class="form-control" id="txt_tanggal_pengeluaran" name="txt_tanggal_pengeluaran" value="{{ $pengeluaran->tanggal_pengeluaran }}" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_id_karyawan">Karyawan</label>
                            <input type="text" class="form-control" id="txt_id_karyawan" name="txt_id_karyawan" value="{{ $pengeluaran->id_karyawan }}" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary btn-user btn-block">UPDATE</button>
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

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>

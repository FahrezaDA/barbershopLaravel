<!DOCTYPE html>
<html>
<head>
    <title>Struk</title>
    <style>
        /* CSS untuk tampilan struk */
    </style>
</head>
<body>
    <center>
        <table style='width:350px; font-size:12pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <tr>
                <td width='70%' align='CENTER' vertical-align:top'>
                    <span style='color:black;'><b>CUT LUCK BARBERSHOP</b>
                        <br>Jl.Mastrip, Krajan Timur, Kec.Sumbersari</br>
                        Jember, Jawa Timur, 68121
                        <br>WA.085632572546</br>
                    </span>
                </td>
            </tr>
        </table>

        <table style='width:350; font-size:12pt;' cellspacing='2'>
            <tr>
                <td align='center'>============================</td>
            </tr>
        </table>
    </center>

    <br>

    <center>
        <table cellspacing='0' cellpadding='0' style='width:350px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='0'>
            <tr>
                <td>Customer</td>
                <td>:</td>
                <td>{{ $booking->nama }}</td>
            </tr>
            <tr>
                <td>Pelayanan</td>
                <td>:</td>
                <td>{{ $booking->jenis_pelayanan }}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>{{ $booking->harga }}</td>
            </tr>
            <tr>
                <td>Tanggal Booking</td>
                <td>:</td>
                <td>{{ $booking->tanggal_booking }}</td>
            </tr>
            <tr>
                <td>Jam Booking</td>
                <td>:</td>
                <td>{{ $booking->jam_booking }}</td>
            </tr>
        </table>
    </center>


    <center>
        <table style='width:350; font-size:12pt;' cellspacing='2'>
            <tr>
                <td align='center'>------------------------------------------------------</td>
            </tr>
        </table>
    </center>

    <center>
        <table>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>{{ $booking->harga }}</td>
            </tr>
        </table>
    </center>

    <br>

    <center>
        <table style='width:350; font-size:12pt;' cellspacing='2'>
            <tr>
                <td align='center'>****** TERIMAKASIH ******</td>
            </tr>
        </table>
    </center>
</body>
</html>

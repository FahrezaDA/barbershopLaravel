<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use PDF;

class StrukController extends Controller
{
    public function printStruk($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);

        $data = [
            'pemesanan' => $pemesanan
        ];

        $pdf = PDF::loadView('printStruk', $data);

        return $pdf->download('printStruk.pdf');
    }
}

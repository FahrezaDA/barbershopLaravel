<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class dashboardUtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardUtama()
    {
        return view('dashboardUtama');
    }
}
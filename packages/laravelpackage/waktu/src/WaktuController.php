<?php

namespace Laravelpackage\Waktu;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class WaktuController extends Controller
{

    public function index($waktu= NULL)
    {
        $waktu_masuk = ($waktu)
            ? Carbon::now(str_replace('-', '/', $waktu))
            : Carbon::now();
        return view('timezones::waktu', compact('waktu_masuk'));
    }

}
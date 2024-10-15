<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class IndexController extends Controller
{
    function index()
    {
        $qr = QrCode::format('png')
            ->margin(1)
            ->size(400)
            ->style('round')
            ->merge(public_path('assets/img/icon.png'), 0.3, true)
            ->errorCorrection('H')
            ->generate('https://maps.app.goo.gl/47uRA8uXkFor77946?g_st=aw');

        return view('index', ['qr' => $qr]);
    }
}

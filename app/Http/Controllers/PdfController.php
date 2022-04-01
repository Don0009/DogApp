<?php

namespace App\Http\Controllers;

use \PDF;
use App\OrangeInternetTv;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    public function generatePDF()
    {
        // return view('internet_tv.pdf');
        $orangeInternetTv =  OrangeInternetTv::findOrFail(1);
        $pdf = PDF::loadView('internet_tv.pdf');
        $pdf->setPaper('B4');
        return $pdf->stream();;
    }
}

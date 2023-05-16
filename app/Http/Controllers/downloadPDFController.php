<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class downloadPDFController extends Controller
{
    public function download(){
        $pdf = Pdf::loadview('pdf');
        return $pdf->download('pdf.pdf');
    }
}

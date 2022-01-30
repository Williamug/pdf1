<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
    public function htmlPdf()
    {
        // selecting PDF view
        $pdf = PDF::loadView('htmlView');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}

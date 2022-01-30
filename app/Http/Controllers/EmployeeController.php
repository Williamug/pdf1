<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showEmployees()
    {
        $employee = Employee::all();
        return view('welcome', compact('employee'));
    }

    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        $data = Employee::all();

        // share data to view
        view()->share('employee', $data);
        $pdf = PDF::loadView('welcome', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}

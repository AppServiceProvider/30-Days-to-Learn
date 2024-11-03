<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller{
    function retrieve(){
    // Fetch data from the Invoice model
    $invoices = Invoice::all();
    // // Generate the PDF with the data
    $pdf = Pdf::loadView('invoice',  ['invoices1' => $invoices]);
    // // Return the generated PDF for download
    return $pdf->download('invoice.pdf');
    }

    public function index(){
    $invoices = Invoice::all();
    return view('index', compact('invoices'));
    }
}
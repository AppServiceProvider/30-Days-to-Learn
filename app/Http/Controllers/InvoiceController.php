<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller{

    public function index(){
    $invoices = Invoice::all();
    return view('index', compact('invoices'));
    }
}
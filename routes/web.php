<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;

Route::get('/invoices/download', [InvoiceController::class, 'retrieve'])->name('invoices.download');

Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Sadmin\Block;
use App\Models\Sadmin\FlatArea;
use App\Models\Sadmin\Inv_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('superadmin.invoice.index');
    }

    public function create()
    {
         // Get the latest invoice number from the database
    $latestInvoice = DB::table('inv_master')->latest('id')->first();
    
    if ($latestInvoice) {
        // Extract the latest number and increment it
        $latestNumber = (int) substr($latestInvoice->InvoiceNumber, 4); // Remove 'INV-' prefix
        $nextNumber = $latestNumber + 1;
    } else {
        // Start from 1 if no invoices exist
        $nextNumber = 1;
    }
    
    // Generate the new invoice number
    $invoiceNumber = 'INV-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

    // Store the invoice number in session
    session(['invoice_number' => $invoiceNumber]);

    $inv_type = Inv_type::get();
    return view('superadmin.invoice.create', compact('inv_type'));
    }
    public function getFlats($blockId)
    {
        $flats = FlatArea::where('block', $blockId)->get();
        return response()->json($flats);
    }

    
}

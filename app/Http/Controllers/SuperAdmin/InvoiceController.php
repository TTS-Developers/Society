<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('superadmin.invoice.index');
    }

    public function create()
    {
        return view('superadmin.invoice.create');
    }
}

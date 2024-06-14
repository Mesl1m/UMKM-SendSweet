<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function catalogSendsweet()
    {
        return view('catalog.catalogSendsweet');
    }
}


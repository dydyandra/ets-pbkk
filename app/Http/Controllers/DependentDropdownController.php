<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DependentDropdownController extends Controller
{

    public function index()
    {
        $dokter = Dokter::pluck('nama', 'id');

        return view('form', [
            'dokter' => $dokter,
        ]);
    }
}


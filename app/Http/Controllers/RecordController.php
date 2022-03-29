<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(){
        return view('records', [
            "title" => 'Halaman Rekam Medis',
            "records" => Record::all()
        ]);
    }

    public function content(Record $record){
        return view('record', [
            "record" => $record
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Dokter;
Use App\Models\Pasien;

class Record extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;


    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }



}

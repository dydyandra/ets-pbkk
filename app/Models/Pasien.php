<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Record;

class Pasien extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function records(){
        return $this->hasMany(Record::class);
    }
}

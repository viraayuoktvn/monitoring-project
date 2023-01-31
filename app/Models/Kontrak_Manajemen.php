<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak_Manajemen extends Model
{
    use HasFactory;
    protected $table='kontrakmanajemen';
    
    public function perspektif()
    {
        return $this->belongsTo(PerspektifModel::class);
    }
}

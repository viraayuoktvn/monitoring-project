<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak_ManajemenV2 extends Model
{
    use HasFactory;

    protected $table = 'kontrakmanajemenv2';

    public function kontrakmanajemen()
    {
        return $this->belongsTo(Kontrak_Manajemen::class);
    }
}

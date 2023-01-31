<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerspektifModel extends Model
{
    use HasFactory;

    protected $table = 'perspektif';

    public function kontrak_manajemen()
    {
        return $this->hasMany(Kontrak_Manajemen::class);
    }
}

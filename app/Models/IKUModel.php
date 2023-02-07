<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IKUModel extends Model
{
    use HasFactory;
    protected $table='iku';

    public function perspektif()
    {
        return $this->belongsTo(PerspektifModel::class);
    }

    public function iku()
    {
        return $this->hasMany(IKUModelV2::class);
    }
}

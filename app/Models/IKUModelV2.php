<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IKUModelV2 extends Model
{
    use HasFactory;

    protected $table='ikuv2';

    public function iku()
    {
        return $this->belongsTo(IKUModel::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulanModel extends Model
{
    use HasFactory;

    protected $table = 'bulan';

    public function ikuv2()
    {
        return $this->hasMany(IKUModelV2::class);
    }
}

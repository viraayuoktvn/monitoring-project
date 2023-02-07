<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerjaModel extends Model
{
    use HasFactory;

    protected $table = 'unitkerja';

    public function iku()
    {
        return $this->hasMany(IKUModel::class);
    }
}

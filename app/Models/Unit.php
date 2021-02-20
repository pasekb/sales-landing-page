<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $primaryKey = 'id_unit';

    public function stok(){
        return $this->hasMany(Stok::class, 'unit_id', 'id_unit'); //foreign key, local key
    }
}

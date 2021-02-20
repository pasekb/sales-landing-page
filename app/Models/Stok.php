<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stoks';
    protected $primaryKey = 'id_stok';

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id_unit'); //foreign key, owner key
    }

    public function dealer(){
        return $this->belongsTo(Dealer::class, 'dealer_kode','kode_dealer');
    }
}

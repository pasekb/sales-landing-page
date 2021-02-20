<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $table = 'dealers';
    protected $primaryKey = 'id_dealer';

    public function stok(){
        return $this->hasMany(Stok::class, 'dealer_kode','kode_dealer');
    }
}

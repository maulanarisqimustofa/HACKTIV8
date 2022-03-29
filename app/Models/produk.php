<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    public function kategori(){
        return $this->
        belongsToMany("App\Models\kategori","kategori_produk","id_produk", "id_kategori");
    }
    public function order(){
        return $this->hasMany("App\Models\order","id_produk");
    }
}

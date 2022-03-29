<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';


    public function produk(){
        return $this->
        belongsToMany("App\Models\produk","kategori_produk","id_kategori", "id_produk");
    }
    public function kategori1(){
        return $this->belongsTo("App\Models\kategori1","id_kategori1");
    }
}

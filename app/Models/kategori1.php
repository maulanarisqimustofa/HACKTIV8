<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori1 extends Model
{
    use HasFactory;
    protected $table = 'kategori1';
    protected $primaryKey = 'id_kategori1';

    public function kategori(){
        return $this->hasMany("App\Models\kategori","id_kategori1");
    }


}


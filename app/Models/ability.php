<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ability extends Model
{
    use HasFactory;
    protected $table = 'ability';
    protected $primaryKey = 'id_ability';

    public function portfolio(){
        return $this->
        belongsToMany("App\Models\portfolio","portfolio_ability","id_ability", "id_ability");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $primaryKey = 'id_portfolio';

    public function ability(){
        return $this->
        belongsToMany("App\Models\ability","portfolio_ability","id_portfolio", "id_ability");
    }

}

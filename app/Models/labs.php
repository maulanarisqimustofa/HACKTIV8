<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labs extends Model
{
    use HasFactory;
    protected $table = 'labs';
    protected $primaryKey = 'id_labs';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    use HasFactory;
    protected $table = 'konsumen';
    protected $primaryKey = 'id_konsumen';
    protected $guarde = ['id_konsumen'];
}

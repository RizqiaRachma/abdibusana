<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga_material extends Model
{
    use HasFactory;
    protected $table = 'harga_material';
    protected $primaryKey = 'id';
    protected $guarde = ['id'];
}

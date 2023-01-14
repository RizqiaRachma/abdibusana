<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_bpjs extends Model
{
    use HasFactory;
    protected $table = 'Kategori_bpjs';
    protected $primaryKey = 'id';
    protected $guarde = ['id'];
}

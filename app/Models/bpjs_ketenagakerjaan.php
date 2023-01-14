<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bpjs_ketenagakerjaan extends Model
{
    use HasFactory;
    protected $table = 'bpjs_ketenagakerjaan';
    protected $primaryKey = 'id_bpjs';
    protected $guarde = ['id_bpjs'];
}

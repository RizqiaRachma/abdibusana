<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_bpjskesehatan extends Model
{
    use HasFactory;
    protected $table = 'jenis_bpjskesehatan';
    protected $primaryKey = 'id';
    protected $guarde = ['id'];
}

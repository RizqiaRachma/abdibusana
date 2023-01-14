<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_bpjstk extends Model
{
    use HasFactory;
    protected $table = 'jenis_bpjstk';
    protected $primaryKey = 'id';
    protected $guarde = ['id'];
}

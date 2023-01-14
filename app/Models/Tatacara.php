<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatacara extends Model
{
    use HasFactory;
    protected $table = 'tatacara';
    protected $primaryKey = 'id';
    protected $guarde = ['id'];
}

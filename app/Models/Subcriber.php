<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcriber extends Model
{
    protected $fillable = [
        'email',
    ];
    use HasFactory;
}

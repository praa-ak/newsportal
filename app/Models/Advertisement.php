<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'company_name',
        'contact',
        'email',
        'address',
        'payment',
        'banner',
        
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'created_at',
        'updated_at'
    ];
}

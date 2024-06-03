<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    // 允许大规模赋值的字段
    protected $fillable = [
        'name',
        'age',
        'position',
        'team',
        'image_url'
    ];
}

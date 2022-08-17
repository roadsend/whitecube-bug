<?php

namespace App\Models;

use App\Casts\ArticleFlexibleCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cube extends Model
{
    use HasFactory;

    protected $casts = [
        'sections' => ArticleFlexibleCast::class,
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use VanOns\Laraberg\Traits\RendersContent;


class Gutenberg extends Model
{
    use RendersContent;

    protected $table = 'gutenberg';

    protected $fillable = [
        'inhoud',

    ];
}

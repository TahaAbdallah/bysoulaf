<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeLayout extends Model
{
    use HasFactory;

    protected $table = ['home_layouts'];

    protected $fillable = [
        'row1_title1',
        'row1_title2',
        'row1_description',
        'row2_title1',
        'row2_title2',
        'row2_description',
        'row2_image',
    ];
}

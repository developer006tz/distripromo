<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_theme_header extends Model
{
    use HasFactory;
     protected $fillable = ['layout', 'header_position', 'sidebar','sidebar_position'];
     protected $table = 'site_theme_headers';
}

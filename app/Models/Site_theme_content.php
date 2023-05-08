<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_theme_content extends Model
{
    use HasFactory;
    protected $fillable = ['container', 'direction', 'body_font'];
    protected $table = 'site_theme_contents';
}

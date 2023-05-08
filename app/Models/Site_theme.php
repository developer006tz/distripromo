<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_theme extends Model
{
    use HasFactory;
    protected $fillable = ['version', 'primary_colour', 'navigation_header','header','sidebar'];

    protected $table = 'site_themes';

}

<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'social_media_platform_id',
        'name',
        'description',
        'price',
        'image',
    ];

    protected $searchableFields = ['*'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function socialMediaPlatform()
    {
        return $this->belongsTo(SocialMediaPlatform::class);
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['body', 'target_user'];

    protected $searchableFields = ['*'];

    public function sentMessages()
    {
        return $this->hasMany(SentMessage::class);
    }
}

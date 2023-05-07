<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SentMessage extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['message_id', 'user_id', 'phone', 'status', 'date'];

    protected $searchableFields = ['*'];

    protected $table = 'sent_messages';

    protected $casts = [
        'date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}

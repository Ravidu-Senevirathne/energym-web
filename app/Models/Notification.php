<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'type', 'message',
    ];

    /**
     * Get the user associated with the notification.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


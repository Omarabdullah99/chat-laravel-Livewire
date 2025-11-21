<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'body'
    ];

    public function isOwn(): bool
    {
        return $this->user_id === auth()->id();
    }


    public function getHumanDate(): string
    {
        // BD time এ convert
        $dt = $this->created_at->timezone('Asia/Dhaka');

        $day = match (true) {
            $dt->isToday()     => 'Today',
            $dt->isYesterday() => 'Yesterday',
            default            => $dt->toDateString(),
        };

        return $day . ' ' . $dt->format('H:i'); // minute পর্যন্ত
    }


    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

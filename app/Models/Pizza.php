<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import BelongsTo class

class Pizza extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $casts = [
        'toppings' => 'array',
    ];

//   gets user attribute
    protected $appends = [
        'chef',
        'last_updated',
    ];

//    hides user objects, only reuturn name
    protected $hidden = [
        'user',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getChefAttribute(): string
    {
        return $this->user->name;
    }
    public function getLastUpdatedAttribute(): string
    {
        return $this->updated_at->diffForHumans();
    }
}

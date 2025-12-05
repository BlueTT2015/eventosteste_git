<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Comment;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'items' => 'array',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}

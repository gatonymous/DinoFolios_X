<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;
    public function portafolioitem(): BelongsTo
    {
        return $this->belongsTo(Portafolioitem::class);
    }
}
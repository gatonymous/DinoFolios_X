<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portafolioitem extends Model
{
    use HasFactory;
    public function portafolio(): BelongsTo
    {
        return $this->belongsTo(Portafolio::class);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
    
}

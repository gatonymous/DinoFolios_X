<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portafolioitem extends Model
{
    use HasFactory;
    public function portafolios(): HasMany
    {
        return $this->hasMany(Portafolio::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}

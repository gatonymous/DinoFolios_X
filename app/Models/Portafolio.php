<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portafolio extends Model
{
    use HasFactory;
    public function portafolioitem(): BelongsTo
    {
        return $this->belongsTo(Portafolioitem::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function semestres(): HasMany
    {
        return $this->hasMany(Semestre::class);
    }

    public function cursos(): HasMany
    {
        return $this->hasMany(Curso::class);
    }
}

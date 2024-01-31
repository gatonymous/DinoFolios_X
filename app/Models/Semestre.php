<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Semestre extends Model
{
    use HasFactory;
    public function portafolio(): BelongsTo
    {
        return $this->belongsTo(Portafolio::class);
    }
}

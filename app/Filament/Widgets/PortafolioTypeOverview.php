<?php

namespace App\Filament\Widgets;

use App\Models\Portafolio;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PortafolioTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Completo', Portafolio::query()->where('status', 'completado')->count()),
            Stat::make('Observado', Portafolio::query()->where('status', 'observado')->count()),
            Stat::make('Pendiente', Portafolio::query()->where('status', 'pendiente')->count()),
        ];
    }
}
<?php

namespace App\Filament\Widgets;

use App\Models\Task;
use App\Models\CRM\CustomerEnquiry;
use App\Models\Order;
use App\Models\Product;
use App\Models\TestBooking;
use App\Models\TestType;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->isFilamentAdmin();
    }

    protected function getCards(): array
    {
        return [
            //            Card::make('Available Test Types', TestType::all()->count()),
            Card::make('My Tasks', Task::all()->count()),
        ];
    }
}

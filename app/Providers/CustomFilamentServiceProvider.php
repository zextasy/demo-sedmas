<?php

namespace App\Providers;

use App\Filament\Pages\Profile;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;

class CustomFilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'Account',
                'CRM',
                'Consultation',
                'Tests',
                'Finance',
                'Products',
                'Locations',
            ]);
            Filament::registerTheme(
                mix('css/app.css'),
            );
        });
        Filament::registerPages([
            Profile::class,
        ]);
        Filament::registerUserMenuItems([
            UserMenuItem::make()
                ->label('My Details')
                ->url('/admin/profile')
                ->icon('heroicon-o-user'),
            // ...
        ]);
    }
}

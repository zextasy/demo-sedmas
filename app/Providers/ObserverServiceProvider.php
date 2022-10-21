<?php

namespace App\Providers;

use App\Models\Task;
use App\Models\User;
use App\Models\Document;
use App\Models\BusinessGroup;
use App\Observers\TaskObserver;
use App\Observers\UserObserver;
use App\Observers\DocumentObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\BusinessGroupObserver;

class ObserverServiceProvider extends ServiceProvider
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
        BusinessGroup::observe(BusinessGroupObserver::class);
        Task::observe(TaskObserver::class);
        Document::observe(DocumentObserver::class);
        User::observe(UserObserver::class);
    }
}

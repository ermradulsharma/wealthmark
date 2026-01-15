<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

use Illuminate\Notifications\Channels\DatabaseChannel as IlluminateDatabaseChannel;
use Illuminate\Notifications\DatabaseNotification as TradeNotification;
use App\Channels\DatabaseChannel;
use App\Channels\SystemCancelTradeDatabaseChannel;
use App\DatabaseNotification;


// use Illuminate\Notifications\Channels\DatabaseChannel as IlluminateConfirmedOrderDatabaseChannel;
use Illuminate\Notifications\DatabaseNotification  as ConfirmedTradeNotification;
// use App\Channels\ConfirmedOrderDatabaseChannel;
use App\ConfirmedOderDatabaseNotification;


use App\Channels\ConfirmedOrderDatabaseChannel as ConfirmedOrderDatabaseChannel;

// ...




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->instance(IlluminateDatabaseChannel::class, new DatabaseChannel());
        $this->app->instance(TradeNotification::class, new DatabaseNotification());
        
        
        // $this->app->instance(ConfirmedOrderDatabaseChannel::class, new ConfirmedOrderDatabaseChannel());
        // $this->app->instance(ConfirmedTradeNotification::class, new ConfirmedTradeNotification());
        
     
        
        Schema::defaultStringLength(191);
    }
}
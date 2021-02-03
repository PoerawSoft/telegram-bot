<?php

namespace App\Providers;

use App\Services\TelegramBotService;
use Illuminate\Support\ServiceProvider;

class TelegramServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(TelegramBotService::class, function($app){
          $token = config('TELEGRAM_BOT_TOKEN');
          return new TelegramBotService($token);
        });
    }
}

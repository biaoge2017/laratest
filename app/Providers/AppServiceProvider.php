<?php

namespace App\Providers;
use App\observers\TopicObserver;
use Illuminate\Support\ServiceProvider;
use App\Models\Topic;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
         \Carbon\Carbon::setLocale('zh');
         Topic::observe(TopicObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

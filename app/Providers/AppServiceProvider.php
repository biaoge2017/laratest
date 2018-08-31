<?php

namespace App\Providers;
use App\observers\TopicObserver;
use App\observers\ReplyObserver;
use Illuminate\Support\ServiceProvider;
use App\Models\Topic;
use App\Models\Reply;

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
         Reply::observe(ReplyObserver::class);
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

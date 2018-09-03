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
        \App\Models\User::observe(\App\Observers\UserObserver::class);
        \App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
        \App\Models\Topic::observe(\App\Observers\TopicObserver::class);
        \App\Models\Link::observe(\App\Observers\LinkObserver::class);

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

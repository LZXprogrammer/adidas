<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        // 登录成功时触发...
        $events->listen('auth.login', function ($user, $remember) {

            // 获取登录日志
            $last_info = [
              'ip' => $user->last_ip,
              'time' => $user->last_time,
              'count' => $user->login_count,
            ];

            session()->put('last_info', $last_info);

            // 更新登录日志
            $user->last_ip = ip2long(request()->getClientIp());
            $user->last_time = time();
            $user->login_count += 1;
            $user->save();

        });
    }
}

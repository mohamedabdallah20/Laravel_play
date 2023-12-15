<?php

namespace App\Listeners;

use App\Events\UserLogin;
use App\Models\UserLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginHistory
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLogin $event): void
    {
        //
        UserLog::create([
            'ip' => request()->ip(),
            'agent' => request()->userAgent(),
            'name' => $event->user->name ,
            'email' => $event->user->email,
        ]);
    }
}

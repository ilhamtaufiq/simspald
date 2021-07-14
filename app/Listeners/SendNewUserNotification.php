<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use App\Notifications\NewUserNotification;
use Notification;


class SendNewUserNotification
{
    public function handle($event)
    {
        $admins = User::role('Super Admin')->get(); // Returns only users with the role 'writer'

        Notification::send($admins, new NewUserNotification($event->user));
    }
}

<?php

namespace App\Listeners;

use Notification;
use App\Events\NewNotificationEvent;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\RandomNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewNotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewNotificationEvent  $event
     * @return void
     */
    public function handle(NewNotificationEvent $event)
    {
        Notification::send($event->user, new RandomNotification($event->message));
    }
}

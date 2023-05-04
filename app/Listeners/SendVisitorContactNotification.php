<?php

namespace App\Listeners;

use App\Events\VisitorContactedEvent;
use App\Models\User;
use App\Notifications\VisitorContactNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendVisitorContactNotification
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
    public function handle(VisitorContactedEvent $event): void
    {
        $users = User::query()->where('type', User::TYPE_WEB_MANAGER)->get();

        foreach ($users as $user) {
            $user->getModel()->notify(new VisitorContactNotification($event->visitor));
        }
    }
}

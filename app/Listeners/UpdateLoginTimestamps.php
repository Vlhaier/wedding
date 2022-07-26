<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class UpdateLoginTimestamps
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
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;
        $timestamp = $user->freshTimestamp();

        if (empty($user->first_login)) {
            $user->setAttribute('first_login', $timestamp);
        }

        $user->setAttribute('last_login', $timestamp)->save();
    }
}

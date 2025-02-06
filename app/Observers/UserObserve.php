<?php

namespace App\Observers;

use App\Models\users;

class UserObserve
{

    /**
     * Handle the users "deleted" event.
     */
    public function deleted(users $users): void
    {
        //
    }

    /**
     * Handle the users "restored" event.
     */
    public function restored(users $users): void
    {
        //
    }

    /**
     * Handle the users "force deleted" event.
     */
    public function forceDeleted(users $users): void
    {
        //
    }
}

<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class SetTenantIdInSession
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
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        if (auth()->user()->tenant_id) {
            session()->put('tenant_id', $event->user->tenant_id);
            session()->put('user_id', $event->user->id);
        } else {
            Auth::logout();
            //session()->flash('message', 'your message');
            return redirect('welcome')->withErrors(['error', 'The Message']);;
        }

    }
}

<?php

namespace App\Listeners;

use App\Events\SongSavedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class WriteEventToLog
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
     * @param  SongSavedEvent  $event
     * @return void
     */
    public function handle(SongSavedEvent $event)
    {
        Log::info('A song with title "' . $event->song->title . '" was created');

    }
}

<?php

namespace App\Listeners;

use App\Events\ArticleOpened;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncrementViewCount
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
     * @param  ArticleOpened  $event
     * @return void
     */
    public function handle(ArticleOpened $event)
    {
        //
    }
}

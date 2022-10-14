<?php

namespace App\Listeners;

use App\Events\NewsCreated;
use App\Models\NewsView;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateNewsViewListener
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\NewsCreated  $event
     *
     * @return void
     */
    public function handle(NewsCreated $event)
    {
        NewsView::query()->create(['news_id' => $event->news->id, 'views' => 0]);
    }
}

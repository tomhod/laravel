<?php

namespace App\Listeners;

use App\Events\ProjectCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendProjectCreatedNotification
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\ProjectCreated  $event
     * @return void
     */
    public function handle(ProjectCreated $event)
    {
        $project = $event->project;

        // Log the project creation
        Log::info('A new project has been created:', [
            'name' => $project->name,
            'description' => $project->description,
            'start_date' => $project->start_date,
            'end_date' => $project->end_date,
        ]);
    }
}

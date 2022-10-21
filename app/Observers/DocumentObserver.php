<?php

namespace App\Observers;

use App\Events\NewDocumentAddedEvent;
use App\Models\Document;

class DocumentObserver
{
    public function creating(Document $model)
    {

    }

    public function created(Document $model)
    {
        NewDocumentAddedEvent::dispatch($model);
    }

    public function updated(Document $model)
    {
        //
    }

    public function deleted(Document $model)
    {
        //
    }

    public function restored(Document $model)
    {
        //
    }

    public function forceDeleted(Document $model)
    {
        //
    }
}

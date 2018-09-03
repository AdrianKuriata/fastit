<?php

namespace Devtemple\Fastit\Modules\Core\App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WebItemsListener
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
    public function handle($event)
    {
        return '/home/vagrant/code/fastit/packages/devtemple/fastit/src/modules/Core/routes/web.php';
    }
}

<?php

namespace Jgu\PendingActions;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jgu\PendingActions\Skeleton\SkeletonClass
 */
class PendingActionsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pending-actions';
    }
}

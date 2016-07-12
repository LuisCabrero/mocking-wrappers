<?php

namespace Afonso\MockingWrappers;

interface SleeperInterface
{
    /**
     * Delays execution by the given amount
     * of seconds.
     *
     * This function wraps PHP's native sleep().
     *
     * @param int $seconds
     * @return void
     */
    public function sleep($seconds);
}

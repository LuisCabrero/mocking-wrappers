<?php

namespace Afonso\MockingWrappers;

class Sleeper implements SleeperInterface
{
    /**
     * {@inheritdoc}
     */
    public function sleep($seconds)
    {
        \sleep($seconds);
    }
}

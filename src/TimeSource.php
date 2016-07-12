<?php

namespace Afonso\MockingWrappers;

class TimeSource
{
    public function now()
    {
        return time();
    }
}

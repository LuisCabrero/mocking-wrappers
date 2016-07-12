<?php

namespace Afonso\MockingWrappers\Tests\Unit;

use Afonso\MockingWrappers\TimeSource;

class TimeSourceTest extends \PHPUnit_Framework_TestCase
{
    public function testSourceShouldReturnCurrentTime()
    {
        $source = new TimeSource();
        $expected = time();

        $now = $source->now();

        $this->assertLessThan(2, abs($now - $expected));
    }
}

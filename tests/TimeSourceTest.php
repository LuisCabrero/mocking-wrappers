<?php

namespace CarlosAfonso\MockingWrappers\Tests\Unit;

use CarlosAfonso\MockingWrappers\TimeSource;

class TimeSourceTest extends \PHPUnit_Framework_TestCase {
	public function testSourceShouldReturnCurrentTime() {
		$source = new TimeSource();
		$expected = time();

		$now = $source->now();

		$this->assertLessThan(2, abs($now - $expected));
	}
}
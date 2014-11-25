<?php

namespace CarlosAfonso\MockingWrappers;

class TimeSource {
	public function now() {
		return time();
	}
}
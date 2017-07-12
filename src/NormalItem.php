<?php

namespace App;


class NormalItem extends Item {

	public function tick() {
		$this->decreaseQuality();

		$this->tickDate();

		if ($this->sellIn < 0) {
			$this->decreaseQuality();
		}
	}
}
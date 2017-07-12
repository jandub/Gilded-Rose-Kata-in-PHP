<?php

namespace App;


class AgedBrie extends Item {

	public function tick() {
		$this->tickDate();

        $this->increaseQuality();

        if ($this->sellIn < 0) {
            $this->increaseQuality();
        }
	}
}
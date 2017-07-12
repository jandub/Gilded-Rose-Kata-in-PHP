<?php

namespace App;


class BackStagePass extends Item {

	public function tick() {
		$this->increaseQuality();

        if ($this->sellIn < 11) {
            $this->increaseQuality();
        }

        if ($this->sellIn < 6) {
            $this->increaseQuality();
        }

        $this->tickDate();

        if ($this->sellIn < 0) {
            $this->quality = 0;
        }
    }
}
<?php

namespace App;


class ConjuredManaCake extends Item {

    public function tick() {
        $this->decreaseQuality();

        $this->tickDate();

        if ($this->sellIn < 0) {
            $this->decreaseQuality();
        }
    }

    protected function decreaseQuality() {
        if ($this->quality > 0) {
            $this->quality = $this->quality - 2;
        }
    }
}
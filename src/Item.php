<?php

namespace App;


abstract class Item {

    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn) {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public function tick();

    protected function increaseQuality() {
        if ($this->quality < 50) {
            $this->quality = $this->quality + 1;
        }
    }

    protected function decreaseQuality() {
        if ($this->quality > 0) {
            $this->quality = $this->quality - 1;
        }
    }

    protected function tickDate() {
        $this->sellIn = $this->sellIn - 1;
    }
}
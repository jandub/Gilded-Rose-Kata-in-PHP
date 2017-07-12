<?php

namespace App;

class GildedRose {

    private static $binding = array(
        'Aged Brie' => AgedBrie::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackStagePass::class,
        'Conjured Mana Cake' => ConjuredManaCake::class,
    );

    public static function of($name, $quality, $sellIn) {
        if (isset(self::$binding[$name])) {
            return new self::$binding[$name]($quality, $sellIn);
        } else {
            return new NormalItem($quality, $sellIn);
        }
    }
}

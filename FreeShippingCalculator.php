<?php

class FreeShippingCalculator
{
    const MINIMUM_VALUE = 150;

    public function apply(float|int $value): float|int
    {
        if ($value >= self::MINIMUM_VALUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>
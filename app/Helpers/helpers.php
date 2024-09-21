<?php

if (!function_exists('formatPriceVND')) {
    function formatPriceVND($price)
    {
        return ' $' . number_format($price, 0, ',', '.');
    }
}

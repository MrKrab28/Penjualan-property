<?php

use Nette\Utils\Random;

if (!function_exists('convertToNumber')) {
    function convertToNumber(string $value): float
    {
        return (float)str_replace(',', '', $value);
    }
}

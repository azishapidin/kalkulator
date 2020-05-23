<?php

namespace AzisHapidin\Kalkulator;

/**
 * Advance Calculator.
 * 
 */
class AdvanceCalculator
{
    /**
     * Convert dari integer/desimal ke biner.
     *
     * @param integer $number
     * @return string
     */
    public static function decimalToBinary(int $number)
    {
        return decbin($number);
    }

    /**
     * Convert dari Biner ke Decimal.
     *
     * @param string $string
     * @return float
     */
    public static function binaryToDecimal(string $string)
    {
        return bindec($string);
    }
}

<?php

namespace Sherweb\OtusPackage;

/**
 * Calculator
 */
class Calculator
{
    /**
     * Execute operation
     * @param float $a
     * @param float $b
     * @param string $operator
     * @return float
     */
    public function exec(float $a, float $b, string $operator): float
    {
        switch ($operator) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                return $a / $b;
            default:
                return 0;
        }
    }
}
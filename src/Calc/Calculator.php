<?php

namespace Calc;

class Calculator {

    /**
     * Get the sum of 2 numbers
     *
     * @param integer $a
     * @param integer $b
     * @return integer
     */
    public function add($a, $b): int
    {
        return $a + $b;
    }

    /**
     * Get the greater number
     *
     * @param integer $a
     * @param integer $b
     * @return integer
     */
    public function greater($a, $b): int
    {
        return ($a > $b) ? $a : $b;
    }

}
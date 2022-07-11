<?php

/**
 * FizzBuzz implementation class
 * @author Ricael V. Chiquetti <ricaelchiquetti27@gmail.com>
 */
class fizzbuzz
{

    const START = 0, END = 100;

    /**
     * Class contructor
     */
    public function __construct()
    {
        $this->start();
    }

    public function start()
    {
        $index = self::START;

        while ($index < self::END) {
            echo $this->getFizzBuzzValue($index) . '<br>';
            $index++;
        }
    }

    /**
     * Return the value to be displayed
     * @param int $number
     * @return string
     */
    private function getFizzBuzzValue($number)
    {
        $fizzValue = '';

        if ($this->isMultiple($number, 3)) {
            $fizzValue .= 'Fizz';
        }

        if ($this->isMultiple($number, 5)) {
            $fizzValue .= 'Buzz';
        }

        if ($fizzValue == '') {
            return $number;
        }
        return $fizzValue;
    }

    /**
     * check if the number is multiple
     * @param int $number
     * @param int $multi
     * @return boolean
     */
    private function isMultiple($number, $multi)
    {
        return $number % $multi == 0;
    }
}

new fizzbuzz();

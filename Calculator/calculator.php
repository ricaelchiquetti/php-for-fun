<?php

if (isset($_POST['math'])) {
    $Calculator = new Calculator($_POST['math']);
    echo json_encode($Calculator->calculate());
}


/**
 * calculatore base class
 * @author Ricael V. Chiquetti <ricaelchiquetti27@gmail.com>
 */
class Calculator
{
    private $mathText;
    private $total;

    function __construct($mathText)
    {
        $this->mathText = $mathText;
    }

    public function calculate()
    {
        $this->convertValueToMath();
        return $this->total;
    }

    private function convertValueToMath()
    {
        $math = str_split($this->mathText);
        $number1 = '';
        $number2 = '';
        $operator = '';

        foreach ($math as $value) {
            if (is_numeric($value)) {
                if ($operator == '') {
                    $number1 .= $value;
                } else {
                    $number2 .= $value;
                }
            } else {
                if ($operator != '') {
                    $iniValue = (int) (isset($this->total) ? $this->total : $number1);
                    $this->total = $this->calc($iniValue, $number2, $operator);
                    $number2 = '';
                }
                $operator = $value;
            }
        }
        $iniValue = (int) (isset($this->total) ? $this->total : $number1);
        $this->total = $this->calc($iniValue, $number2, $operator);
    }

    private function calc($number1, $number2, $operator)
    {
        switch ($operator) {
            case '+':
                return $number1 + $number2;
            case '-':
                return $number1 - $number2;
            case 'X':
                return $number1 * $number2;
            case '-':
                return $number1 / $number2;
        }
    }
}
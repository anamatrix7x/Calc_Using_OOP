<?php

class Calc{

    public $num1;
    public $num2;
    public $op;

    public function __construct($num1,$num2,$op){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->op = $op;
    }
    public function calcMethod(){
        switch ($this->op){
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;
            default:
                $result = 'Error';
                break;
        }
        return $result;
    }
}
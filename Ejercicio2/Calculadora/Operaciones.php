<?php

class Operaciones {

    public $num1;
    public $num2;

    public function getNum1() {
        return $this->num1;
    }

    public function getNum2() {
        return $this->num2;
    }

    public function setNum1($num1) {
        $this->num1 = $num1;
    }

    public function setNum2($num2) {
        $this->num2 = $num2;
    }

    public function sumar() {
        
        echo $total = $this->getNum1() + $this->getNum2();
    }

    public function restar() {
        
        echo $total = $this->getNum1() - $this->getNum2();
    }

    public function multiplicar() {
        
        echo $total = $this->getNum1() * $this->getNum2();
    }

    public function dividir() {
        if ($this->getNum2() == 0) {
            echo 'Error! No se puede dividir entre 0';
        } else {

            echo $total = $this->getNum1() / $this->getNum2();
        }
    }

}
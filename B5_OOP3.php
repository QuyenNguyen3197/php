<?php
    abstract class Shape{
        abstract public function dienTich();
    }

    class TamGiac extends Shape{
        private $base;
        private $height;
        public function __construct($base, $height){
            $this-> base = $base;
            $this-> height = $height; 
        }
        public function dienTich(){
            return 0.5 * $this -> base * $this -> height;
        }
    }

    class ChuNhat extends Shape{
        private $width;
        private $length;
        public function __construct($width, $length){
            $this -> width = $width;
            $this -> length = $length;
        }
        public function dienTich(){
            return $this -> length * $this ->width;
        }
    }

    $tamgiac = new TamGiac(3,4);
    echo "<br> Dien tich tam giac = ".$tamgiac->dienTich();
    $chunhat = new ChuNhat(3,4);
    echo "<br> Dien tich chu nhat = ".$chunhat->dienTich();

?>
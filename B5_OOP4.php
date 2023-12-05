<?php
    interface DoiKichThuoc{
        public function resize($a);
    }

    class HinhVuong implements DoiKichThuoc{
        private $canh;
        public function __construct($canh){
            $this -> canh = $canh;
        }
        public function resize($a){
            $this -> canh = $this -> canh * ($a/100);
        }
        public function getArea(){
            return pow($this -> canh, 2);
        }
        public function getCanh(){
            return $this -> canh;
        }
    }

    $hinhvuong = new HinhVuong(10);
    echo "<br> Chieu dai canh = ".$hinhvuong -> getCanh();
    $hinhvuong -> resize(60);
    echo "<br> Chieu dai canh la ".$hinhvuong -> getCanh();
    echo "<br> Dien tich hinh vuong = ".$hinhvuong->getArea();
?>

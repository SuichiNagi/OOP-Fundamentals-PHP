<?php 

class Car{
    public $price;
    public $speed;
    public $fuel;
    public $mileage;

    public function __construct($price, $speed, $fuel, $mileage){
        $this->price = $price;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->mileage = $mileage;
    }

    public function Display_all(){
        echo 'Price: '.$this->price.'<br>';
        echo 'Speed: '.$this->speed.'mph'.'<br>';
        echo 'Fuel: '.$this->fuel.'<br>';
        echo 'Mileage: '.$this->mileage.'mpg'.'<br>';
        echo 'Tax: '.$this->tax.'%'.'<br><br>';
    }
    public function Tax(){
        if($this->price >= 10000){
            $this->tax = '0.15';
        } else {
            $this->tax = '0.12';
        }
    }
}

$car1 = new Car(2000, 35, 'Full', 15);
$car1->Tax();
$car1->Display_all();

$car2 = new Car(2000, 5, 'Not Full', 105);
$car2->Tax();
$car2->Display_all();

$car3 = new Car(12000, 50, 'Kind of Full', 95);
$car3->Tax();
$car3->Display_all();

$car4 = new Car(20000, 70, 'Empty', 55);
$car4->Tax();
$car4->Display_all();

$car5 = new Car(35000, 95, 'Not Full', 15);
$car5->Tax();
$car5->Display_all();
?>
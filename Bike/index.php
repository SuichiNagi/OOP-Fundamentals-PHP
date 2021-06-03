<?php 

class Bike {
    public $price;
    public $max_speed;
    public $miles;

    public function __construct($price, $max_speed){
        $this->price = $price;
        $this->max_speed = $max_speed;
    }

    public function displayInfo(){
        echo 'Price: '.$this->price.'<br>';
        echo 'Maximum Speed: '.$this->max_speed.'<br>';
        echo 'Total Miles Driven: '.$this->miles.'<br><br>';
    }
    public function drive(){
        echo 'driving...'.'<br>';
        $this->miles += 10;
        return $this;
    }

    public function reverse(){
        if($this->miles <= 0){
            return $this;
        } else {
            $this->miles -= 5;
            return $this;
        }
    }
}

$mountain_bike = new Bike(8100, 15);
$mountain_bike->drive()->drive()->drive()->reverse()->displayInfo();

$road_bike = new Bike(25000, 35);
$road_bike->drive()->drive()->reverse()->reverse()->displayInfo();


$cyclo_cross_bike = new Bike(20000, 25);
$cyclo_cross_bike->reverse()->reverse()->reverse()->displayInfo();

?>
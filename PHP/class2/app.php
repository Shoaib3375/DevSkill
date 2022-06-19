<?php
class Human
{
    public $name;
    public $age;
    public function Display()
    {
        echo "Name $this->name" . "\n";
        echo "Age $this->age";
    }

}

$p1 = new Human();
$p1->name = "Kamal";
$p1->age = 23;
$p1->Display();
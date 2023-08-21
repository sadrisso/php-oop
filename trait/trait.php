<?php 

trait T {

    public $name = "Drisso";

    public function set () {
        echo $this->name;
    }

}
trait U {

    private function display () {
        echo "I am from display function";
    }

    public function getDisplay () {
        echo $this->display();
    }
}

class Person {
    use T,U;
}

$person = new Person;
$person->set();
$person->getDisplay();
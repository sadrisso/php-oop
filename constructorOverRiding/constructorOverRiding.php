<?php 

class Hello {
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function display () {
        echo "Name is: {$this->name}";
        echo PHP_EOL;
        echo "Age is: {$this->age}";
    }
}

class Hi extends Hello {
    public $roll;

    function __construct($name, $age, $roll)
    {
        parent:: __construct($name, $age);
        $this->roll = $roll;
    }

    public function display () {
        parent::display();
        echo "Roll is: {$this->roll}";
    }
}

$hi = new Hi("Jone", 44, 22);
$hi->display();
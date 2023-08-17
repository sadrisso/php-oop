<?php 

interface UserInterface {

    public function user();
    public function display();

}

class User implements UserInterface {

    public $name = 'Drisso';

    public function user () {
        return $this->name;
    }

    public function display () {
        echo 'Hi I am from display function';
    }
}

$user = new User;
$user->display();
echo $user->user();
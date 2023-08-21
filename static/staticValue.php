<?php 
//Static
class Foo {
    public static $name = 'drisso';

    public static function Bar () {
        return 'hello world';
    }
}

echo Foo::$name;
echo Foo::Bar();



//Constants
class ConstValue {
    public const NAME = 'hi';

    public function getConst () {
        echo self::NAME;
    }
}

$ob = new ConstValue;

$ob->getConst();

<?php

use JetBrains\PhpStorm\Pure;

class Singleton
{
    private static $field;

    public function getField()
    {
        if(self::$field === null)
        {
            $class = __CLASS__;
            self::$field = new Singleton();
            return self::$field;
        }
        else
            return self::$field;
    }
    private function __construct(){}
}

//$example = new Singleton();

class Base
{
    private int $a;
    private float $b;
    private string $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    protected function getParams(){
        echo "a == b: " . ($this->a == $this->b);
        echo "<br>b == c: " . ($this->b == $this->c);
        echo "<br>c === a: " . ($this->c === $this->a);
    }
}

class Extended extends Base
{
    private $d;
    private $e;
    private string $hash_array;

    #[Pure] public function __construct($a, $b, $c, $d, $e, $hash_array)
    {
        parent::__construct($a, $b, $c);
        $this->d = $d;
        $this->e = $e;
        $this->hash_array = $hash_array;
    }

    public function func1()
    {
        parent::getParams();
        echo "<br>d == e: " . ($this->d == $this->e);
        echo "<br>d === e: " . ($this->d === $this->e) ;
    }

    public function func2()
    {
        echo "<br><br>[$this->hash_array]";
        $arr = explode(" ", $this->hash_array);
        $str = implode(",", $arr);
        echo "<br>[$str]";
    }
}

$obj = new Extended(3, 3.0, "3", 3, 3, "a b c d e");
$obj->func1();
$obj->func2();

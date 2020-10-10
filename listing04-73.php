<?php

class Person {
    private $_name;
    private $_age;

    public function __set($property, $value)
    {

        $method = "set{$property}";
        if (method_exists($this,$method)) {
            return $this->$method($value);
        }
    }

    public function setName($name)
    {
        $this->_name = $name;
        if (! is_null($name)) {
            $this->_name =mb_strtoupper($this->_name);
        }
    }

    public function setAge($age)
    {
        $this->_age = $age;

    }
}

$p = new Person();
$p->name = "Иван";
print $_name;

//jhj

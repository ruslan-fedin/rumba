<?php


class Person {
    public function __get(string $property)
    {

        $method = "get{$property}";
        if (method_exists($this,$method)){
            return $this->$method();
        }

    }

    public function getName() :string
    {
        return "Иван";

    }

    public function getAge() :int
    {
        return 44;
    }

    public function __isset(string $property)
    {
       $method = "get{$property}";

       return method_exists($this,$method);
       }




}
if (isset($p->name)) {
    print $p->name;
}
$p = new Person();

print $p->name;

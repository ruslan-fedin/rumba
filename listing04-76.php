<?php


class Person

{
    private $writer;


    public function __construct( PersonWriter $writer)
    {
        $this->writer = $writer;
    }

    public function __call(string $method, array $args)
    {
        if (method_exists($this->writer,$method)){
            return $this->writer->$method($this);

        }
    }

    public function getName():string
    {
       return "Иван";
    }

    public function getAge():int
    {
       return 44;
    }


}

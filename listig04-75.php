<?php 


class PersonWriter {


    public function writeName(Person $p)
    {
        print $p->getName() . "\n";

    }

    public function writeAge(Person $p)
    {
        print $p->getAge() . "\n";

    }
}
<?php
namespace domain;
use domain\PersonGroup;

class Constructor extends PersonGroup implements ConstructorRole
{
    public function __construct($group)
    {
        parent::__construct($group);
    }

    function draw()
    {

    }

    
}
?>
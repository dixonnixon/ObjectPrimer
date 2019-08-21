<?php
namespace domain;
use domain\PersonRole;
use publ\ConstructorRole;

class Constructor extends PersonRole implements ConstructorRole
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
<?php
namespace domain;
use domain\PersonGroup;

class Coder extends PersonGroup implements CoderRole
{
    public function __construct($group)
    {
        parent::__construct($group);
    }

    function code()
    {

    }


}
?>
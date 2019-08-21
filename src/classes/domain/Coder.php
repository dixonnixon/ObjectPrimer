<?php
namespace domain;
use domain\PersonRole;
use publ\CoderRole;

class Coder extends PersonRole implements CoderRole
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
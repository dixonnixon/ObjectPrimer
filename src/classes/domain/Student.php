<?php
namespace domain;
class Student extends PersonGroup implements StudentRole
{
    public function __construct($group)
    {
        parent::__construct($group);
    }

    function hasParkingPrivileges(): boolean 
    {
        return true;
    }

    function number(): integer
    {
        return 1;
    }

}
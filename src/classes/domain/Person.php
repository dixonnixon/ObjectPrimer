<?php
namespace domain;
class Person
{
    private $_roles;

    function __construct()
    {
        $this->_roles = new \Ds\Vector();
    }

    function addRole(PersonGroup $value)
    {
        $this->_roles->push($value);
    }

    function roleOf(String $roleName, Group $group)
    {   
        return $this->_roles->filter(function($role) use ($roleName, $group) {
            $nspClassName = __NAMESPACE__ . "\\" . $roleName;
            if($role instanceof $nspClassName && $role->group() == $group) 
            {
                return $role;
            }
        });
    }
}


?>
<?php
namespace domain;

class Group
{
    private $_users;

    function __construct()
    {
        $this->_users = new \Ds\Vector();
    }
    
    public function addUser(PersonGroup $person)
    {
        $this->_users->push($value);
    }

    public function moveUser(PersonGroup $person)
    {
        $this->_users->remove($this->_users->find($person));
    }
}
?>
<?php
namespace domain;

use domain\Seminar;
use publ\StudentRole;
use publ\Searchable;

class Student extends Person implements StudentRole, Searchable
{
    public function __construct($group)
    {
        parent::__construct($group);
    }

    function hasParkingPrivileges(): \boolean 
    {
        return true;
    }

    function number(): \integer
    {
        return 1;
    }

    function enrollInSeminar(Seminar $sem)
    {
        $sem->enrollStudent($this);
    }

    function dropSeminar(Seminar $sem)
    {
        $sem->moveStudent($this);
    }

    function getSeminarHistory()
    {

    }

    function find() { return $this; }
}
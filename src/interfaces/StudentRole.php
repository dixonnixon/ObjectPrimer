<?php
namespace publ;
use domain\Seminar;

interface StudentRole
{
    function hasParkingPrivileges(): \boolean;
    function number(): \integer;
    function enrollInSeminar(Seminar $sem); 
}
?>
<?php
namespace domain;
interface StudentRole
{
    function hasParkingPrivileges(): boolean;
    function number(): integer;
}
?>
<?php
namespace publ;
interface EmployeeRole extends PersonRole
{
    function id();
    function number();
    function rating();
    function enterprise();

    function salary();
    function payAmount();
    function makeManager();
}
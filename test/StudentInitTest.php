<?php
use PHPUnit\Framework\TestCase;
use domain\Student;
use domain\Group;

class StudentInitTest extends TestCase
{
    function testArmourInit()
    {
       $g = new Group();
       $s = new Student($g);

    }
}
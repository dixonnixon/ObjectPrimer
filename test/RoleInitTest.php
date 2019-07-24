<?php
use PHPUnit\Framework\TestCase;
use domain\Person;
use domain\Constructor;
use domain\Coder;
use domain\Group;

class RoleInitTest extends TestCase
{
    function testRoleInit()
    {
        $g = new Group();

        //making constructor relative to a group
        $const = new Constructor($g);
        $coder = new Coder($g);
        

        $s = new Person();
        $s->addRole($const);
        $s->addRole($coder);
        // var_dump($s->roleOf("Coder", $g));
        // var_dump($s->roleOf("Constructor", $g));

        $this->assertInstanceOf($s->roleOf("Coder", $g)[0], $coder);
        $this->assertInstanceOf($s->roleOf("Constructor", $g)[0], $const);
    }

}
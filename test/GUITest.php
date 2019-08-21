<?php
use PHPUnit\Framework\TestCase;
use infra\GUI;
use domain\Student;
use domain\Group;


class GUITest extends TestCase
{
    function testTemplateInit()
    {
        $g = new Group();
        $stndt = new Student($g);
        $tmpl = new GUI($stndt);
        print_r($tmpl->screen());

    }
}
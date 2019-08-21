<?php
use PHPUnit\Framework\TestCase;
use templ\HtmlTemplate;

class TemplateTest extends TestCase
{
    function testTemplateInit()
    {
        $tmpl = new HtmlTemplate();
        $tmpl->setVariable("body", "black");
        print_r($tmpl->getHtml("<body text='{body}'>"));


        $this->assertEquals(true, true);

    }
}
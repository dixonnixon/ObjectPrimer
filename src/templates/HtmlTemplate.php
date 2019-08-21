<?php
namespace templ;

use publ\Template;

class HtmlTemplate implements Template
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            print_r();
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
} 



?>
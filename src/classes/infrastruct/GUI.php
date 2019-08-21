<?php
namespace infra;
use publ\Searchable;

class GUI
{
    private $cur;

    function __construct(Searchable $domain)
    {
        $this->cur = $domain->find();
    }

    function screen()
    {
        return $this->cur;
    } 
}  
?>
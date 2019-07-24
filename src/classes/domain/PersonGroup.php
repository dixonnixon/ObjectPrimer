<?php
namespace domain;
class PersonGroup
{
    protected $_group;
    
    protected function __construct(Group $group)
    {
        $this->_group = $group;
    }
    
    public function group() :Group
    {
        return $this->_group;
    }
    
    function __toString()
    {
        return get_called_class();
    }
}
?>
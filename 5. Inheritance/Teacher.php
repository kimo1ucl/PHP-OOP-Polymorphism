<?php
require_once 'Person.php';

Class Teacher extends Person{
    private float $salary;
    private $classes = Array();
    
    function __construct($firstname, $middlename, $lastname, $salary){
        parent::__construct($firstname, $middlename, $lastname);
        if (isset($salary)){
            $this->salary = $salary;
        }
        else{
            $this->salary = 0;
        }
    }
    public function __toString()
    {
        $rt =
              parent::getfirstname()."\n".
              parent::getmiddlename()."\n".
              parent::getlastname()."\n".  
              (string) $this->salary."\n";  

        return $rt; 
    }

    public function setClass($classname)
    {
        array_push($this->classes ,$classname);
    }

    public function getClass()
    {
        $s="";
        foreach ($this->classes as $class)
        {   
            $s .= $class.";";
        }
        return $s;
    }

    public function getSalary()
    {
        // do some security stuff
        return $this->salary;
    }

    public function setSalary($salary)
    {
        // do some security stuff
        $this->salary = $salary;
        return $this;
    }
}
?>
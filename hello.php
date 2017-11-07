<?php

class Film 
{
    private $name = null;
    private $description = "Description du film\n";
    private $time = 120;
    private $date = "Date de sortie\n";
    
    public function getName()
    {
        return $this->name;  
    }
    
    public function setName($name ="")
    {
        $this->name = $name;
    } 
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description ="")
    {
        $this->description = $description;
    }
    
       public function getTime()
    {
        return $this->time;  
    }
    
    public function setTime($time ="")
    {
        $this->time = $time;
    } 
    
    
       public function getDate()
    {
        return $this->date;  
    }
    
    public function setDate($date ="")
    {
        $this->date = $date;
    } 
    
    function Afficher()
    {
        echo $this->name;
        echo $this->description;
        echo $this->time;
    }
    
}

$Film = new Film("Mon film");
echo $Film->getName();

$Film->setName("Avatar\n");
$Film->Afficher();
 

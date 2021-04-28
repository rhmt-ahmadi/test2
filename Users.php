<?php
class Users{
    private $name, $lastname,$age;
//getter methods
    public function getName()
    {
        return $this->name;
    }
   public function getLastname()
    {
        return $this->lastname;
    }

     public function getAge()
    {
        return $this->age;
    }

//setter methods

 public function setName($name)
 {
     $this->name=$name;
 }

 public function setLastname($lastname)
 {
     $this->lastname=$lastname;
 }
 public function setAge($age)
 {
     $this->age=$age;
     if($age<21)
     {
         echo "Your age is not valid in this scholarship because your age is less than(".$age.")<br/>";
     }
     else{
         echo "you are valid<br/>";
     }
 }

}
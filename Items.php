<?php

class Items {
    private $itemsNo, $itemsName;

    public function getItemsNo()
    {
        return $this->itemsNo;
    }
   public function getItemsName()
    {
        return $this->itemsName;
    }
// setter methods
 public function setItemsNo($itemsNo){
     $this->itemsNo = $itemsNo;
 }
public function setItemsName($itemsName){
     $this->itemsName = $itemsName;
 }

}
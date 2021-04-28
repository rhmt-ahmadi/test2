<?php
include_once("Users.php");
include_once("Items.php");
$user = new Users();
$items = new Items();

$user->setName("ali");
$user->setLastname("Behrad");
$user->setAge(21);

echo $user->getName();
echo '<br/>';
echo $user->getLastname();
echo '<br/>';
echo $user->getAge();
echo "<hr/>";
$items->setItemsNo("MO00342");
$items->setItemsName("Dell Latitude 7240");

echo $items->getItemsNo();
echo "<br/>";
echo $items->getItemsName();


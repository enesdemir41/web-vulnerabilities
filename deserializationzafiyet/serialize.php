<?php


class user {
    var $firstname;
    var $lastname;

    function __construct($firstname,$lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    function __toString()
    {
        return $this->firstname." ".$this->lastname;
    }
}

//  $store_somewhere = serialize($user);

//  echo $store_somewhere ; 

$str = 'O:4:"user":2:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";}';

 $user = unserialize($str); 
 echo $user ; 



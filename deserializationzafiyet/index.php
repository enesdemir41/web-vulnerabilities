<?php




class user {
    var $firstname;
    var $lastname;
    var $is_admin = 0;
    


    function __construct($ad,$soyad)
    {
        $this->firstname = $ad;
        $this->lastname = $soyad;
        $this->is_admin = 0;
        
        
    }

    function __toString()
    {
        return $this->firstname." ".$this->lastname;
    }
}

class permissions {

    var $permissionsArr = array();

    function __wakeup()
    {
        echo "Hello";
    }

}

// $user = new user("enes","demir");
//echo $user ; 
// $store_somewhere = serialize($user);
// echo $store_somewhere;
//$string = 'O:4:"user":3:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";s:8:"is_admin";i:0;}';
$string = 'O:4:"user":3:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";s:8:"is_admin";O:11:"permissions":1:{s:14:"permissionsArr";a:0:{}}}';


$user = unserialize($string); 


//echo $user ;
// payload = 'O:4:"user":3:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";s:8:"is_admin";O:11:"permissions":1:{s:14:"permissionsArr";a:0:{}}}'
              

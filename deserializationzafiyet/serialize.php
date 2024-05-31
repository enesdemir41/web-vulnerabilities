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


// örnegin session id üzerinden kullanıcı bilgilerini aldım ve databaseye gidiyorum

//  $isim = "enes";                            //gercekte->>> $_SESSION['enes'];
//  $soyisim ="demir";                         //gercekte->>>$_SESSION['demir'];
// burada daha neler neler olabilir yetki - email vs böyle yapıp birde aşağıda oldugu gibi obje olusturmak isteren işlem yükü çok fazla 

// $user = new user($isim,$soyisim);
// // bu objeyi olusturmak yük oluşturuyor
// // bunu bir formata çevirip kullanıcıya verelim 
// // kullanıcı bize  geldiğinde direkt o formattan obje (ilgili classı )olussun
// echo $user ;

//  $store_somewhere = serialize($user);

//  echo $store_somewhere ; 

$str = 'O:4:"user":2:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";}';
// evet bu formatta tutabiliyourz
// bunu kullanıcıya veriyoruz session id cookie vs ile $_SESSION['sessionid'] = $str;

// daha sonra kullanıcı bu veri ile gelidiginde bu format ile direk obje olusacak
// şimdi yukarıdaki user adlı objemi kaldırdım  

//şimdi unserlize edicem 

 $user = unserialize($str); // aslında burayı $user = new user() olarak düşünebilirsin direkt str deserliaze edilerek obje olustu
 echo $user ; // strinten obje olusmus oldu BU KADAR 


//  $text = 'O:4:"User":2:{s:8:"username";s:6:"wiener";s:5:"admin";b:1;}';
//  echo urldecode(base64_decode($text));
 
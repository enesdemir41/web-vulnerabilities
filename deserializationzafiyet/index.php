<?php

// databaseden verileri çekmek yerine objeleri text halinde tutalım işlem yükü azalsın 
// login olan kullanıcın bilgilerini (yetki vs) databaseden olusturuldu diyelim.
// kullanıcı tekrar gelidiğinde bu işlemler tekrar olmasın 
// olusturdugumuz tutma ve daha sonra  nesnelere bir daha ulaşmamız gerekli


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

// user a ait bilgiler db'den sessionid üzerinden elde edildi
// user class i  olusturuldu
// $user = new user("enes","demir");

//echo $user ; 

// buraya kadar bu kodu çalıştırmak istediğimde yukarıdaki işlemler yapılıyor set get vs

// direkt ulaşsak olmaz mı ? doğrudan user obejesine ulasmak istiyorum (sessiona falan yazılıyor)

// $store_somewhere = serialize($user);

// echo $store_somewhere;

//$string = 'O:4:"user":3:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";s:8:"is_admin";i:0;}';
$string = 'O:4:"user":3:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";s:8:"is_admin";O:11:"permissions":1:{s:14:"permissionsArr";a:0:{}}}';
//              peki obje nasıl olusturulucagını biliyor diye sorarsan
//              burada user classına git diyor 

$user = unserialize($string); // burayı şöyle olmus gibi dusunebilirsin 
                              // $user = new user("enes","demir"); 

//echo $user ;



// ilk önce objemi oluşturdum class kullanarak 
// daha sonra bu objeyi serliaze ettim 
// serilize ettiğim bu objeyi $string değerinde tutuyorum
// daha sonra unserialize edince o obje yine oluşuyor 
// daha sonra ekrana yazdırınca enes demir gördüm tıpkı yukarudaki normal şekilde olusturulan objem gibi 


// peki kullanıcıdan alınan bir veri unserialize edilir ise ne olur.


// payload = 'O:4:"user":3:{s:9:"firstname";s:4:"enes";s:8:"lastname";s:5:"demir";s:8:"is_admin";O:11:"permissions":1:{s:14:"permissionsArr";a:0:{}}}'
              

//$this->is_admin  = new permissions(); böyle olmus gibi dusunebilirsin //
// is_admin nin degeri basta integer 0 dı fakat biz serialize edilmis stringi manipüle ederek 
// is_adminin integer değil permissions objesi oldugunu zorladık
// property orianted programing oluyor
// şidmi string ifadesine payloaddaki değeri yaz ve ne olacagını gor 
// is_admin permission kullanabiliyor artık baska classlar isin icine dahil oldu 
// ve ilginç tarafı permissions içindeki propetilere de baska classlar çağırabilirim 
// bu classlar icersinde sistem komutu cağrıan bir fonksiyon bulursan RCE ye kadar gider
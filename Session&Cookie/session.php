<?php
    /* Session ==> Oturum işlemlerinde kullanacağımız fonksiyonlardır. Üye giriş işlemleri, ürünlerin sepette kalması gibi. */
    
    session_start();
    $_SESSION["isim"]="Baki";
    $_SESSION["soyad"]="Özer";
    //print_r($_SESSION);
    //echo "Hoşgeldin: <b>$_SESSION[isim] $_SESSION[soyad]</b>";
    
    //$_SESSION["uyeler"] = array("Ahmet", "Mehmet", "Ali", "Veli");
    //echo $_SESSION["uyeler"][0];
    
    //session silme işlemi
    //unset($_SESSION["soyad"]);
    //echo $_SESSION["soyad"];

    //bütün sessionları siler.
    session_destroy();
    //uye.php den çağıramıyoruz
    //ama bu sayfadan çağırıp kullanabiliyoruz. Yani diğer sayfalardan erişimi koparıyoruz diyebiliriz.
    echo $_SESSION["isim"];
    
?>
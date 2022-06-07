<?php
/*
Değişkleri $ sembolü ile oluşturabiliriz.
$ad_soyad="Baki Özer"; //Örnek string(metinsel) değişken. 
$yas=25;  //Örnek int(sayısal) değişken
echo $ad_soyad;
echo $yas;
echo $ad_soyad . " - " . $yas; // birden fazla değişkeni .(nokta) ile birleştiriyoruz.
*/

/*
        --VERİ TİPLERİ--
    integer (int) ==> tam sayılar
    float ==> ondalıklı sayılar
    string ==> metinsel ifadeler "içerisine yazılırlar"
    boolean ==> mantıksal ifadeler - 1 veya 0 - true veya false
    array ==> diziler
    object ==> nesneler
*/

/*
$renkler = array("Kırımızı", "Mavi", "Beyaz"); // Dizi örneği
var_dump($renkler); // verinin dosya yolunu ver veri tipini öğrenebiliriz.
*/


/*
    --Çift tırnak Tek tırnak kullanımı--
$sayi =15;
echo "$sayi";
echo "Ankara'ya nasıl gidebilirim?"
echo 'Ankara\'ya nasıl gidebilirim?'
*/


/*
    --define (sabitler)--
         ==> Değişmesini istemediğim, devamlı kullandığım değişkenler için tanımlarız.
 örnek veritabanı bağlantısı gibi
define("_SITEAD","www.google.com",true);
    //"Değişken Adı","Değer",Büyük/Küçük Harf duyarlılığı
echo _SITEAD;
*/

/*
    --Sihirli Sabitler--
Birkaç Örnek
echo "Dosyanın Yolu: " . __FILE__ . "<br>";
echo "Satır: " . __LINE__ . "<br>";
echo "PHP Version: " . PHP_VERSION . "<br>";
echo "Sistem: " . PHP_OS . "<br>";
echo "Dizin: " . __DIR__ . "<br>";
*/

/* 
    --KARŞILAŞTIRMA OPERATÖRLERİ--
== : eşittir
!= : eşit değildir
<> : eşit değildir
<  : küçüktür
>  : büyüktür
<= : küçük eşittir
>= : büyük eşittir
*/

/*
    -- İf-Else Koşulları --
&& : ve
|| : veya
*/

    //Örnek kullanım
/*
$sayi1 = 10;
$sayi2 = 15;
if ($sayi1>$sayi2) // Koşul parantez içerisine yazılır
{
    //Koşulun sağlanması durumunda çalışacak kodlar scope/süslü parantez{içerisine yazılır.}
    echo "doğru";
}
else //Hiç bir koşul sağlanmaz ise çalışacak kodlar else karar yapısının içerisine yazılır.
{
    //Çalışacak kodlar scope/süslü parantez{içerisine yazılır.}
    echo "yanlış";
}

----------------------------------------------

$not =100;
if ($not>=0&&$not<45) 
{
    echo "Zayıf";
}
elseif ($not>=45&&$not<70) 
{
    echo "İyi";
}
elseif ($not>=70&&$not<=100) 
{
    echo "Pekiyi";
}
else {
    echo "Hatalı not girişi!";
}
*/

/*
    -- Switch-Case --

$renk ="mavi";
switch ($renk) 
{
    case "kırmızı":
        echo "seçilen renk kırmızı";
        break;
    case "mavi":
        echo "seçilen renk mavi";
        break;
    case "yeşil":
        echo "seçilen renk yeşil";
        break;
    default:
        echo "seçilen renk yapılmadı!";
        break;
}
*/

/*
    -- For Döngüsü --

for ($i=1; $i <=10 ; $i++) 
{ 
    //(başlangıç, bitiş, artış mikratı)
    //1'dan başla 10'a eşit olana kadar 1'er 1'er arttır
    //Her seferinde çalışacak kodları buraya yaz.
    echo $i."<br>";
}
*/

/*
    -- Foreach Döngüsü --  (Şimdilik Dizilerde kullanılır diyelim)

    $dizi = array(1,2,3,4,5,6,7,8);
foreach ($dizi as $d) 
{
    echo $d . "<br>";
}

$dizi2 = array(
    "Ad"=>"Baki",
    "Soyad"=>"Özer",
    "Yas"=>"25");
foreach ($dizi2 as $d2 => $value) 
{
    echo "$d2: ". "$value" . "<br>";
    
}

*/

/*
    -- While Döngüsü --
// Şarta bakılır ve döngüye girer yada girmez. Şart sağlanmayana kadar döngüden çıkmaz.

$sayi = 1;
while ($sayi <= 10) 
{
    echo $sayi . "<br>";
    $sayi++;    
}
*/

/*
    -- Do while Döngüsü
// Şart sağlanmasa bile bir kez mutlaka dögüye girer. sonra şartı kontrol eder.

$sayi=0;
do 
{
    echo $sayi;
    $sayi+=2;
}while ($sayi<5);
*/

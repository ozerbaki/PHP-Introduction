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

/*
    -- Diziler --
    
    //I. Yol
    //$meyveler = array("Erik", "Şeftali", "Kayısı");
    //print_r ($meyveler);
    
    //II. Yol
    $meyveler[0] = "Erik";
    $meyveler[1] = "Şeftali";
    $meyveler[2] = "Kayısı";
    echo $meyveler[0];
    
    
    // İki boyutlu dizi örneği -- İç içe dizi
    $sporlar = array(
        "ToplaOynanlar" => array(
            1=>"Futbol", 2=>"Basketbol", 3=>"Tenis"),
        "Atletizm" =>array(
            4=>"Koşu Yarışı", 5=>"Uzun Atlama")
    );
    print_r($sporlar);
    echo $sporlar["ToplaOynanlar"][3];
*/

/*
-- Dizilerde Sıralama Fonksiyonları --

sort: [değer] küçükten büyüğe, key-value korunmaz
rsort: [değer] büyükten küçüğe, key-value korunmaz
shuffle: [değer] rastgele, key-value korunmaz
asort: [değer] küçükten büyüğe, key-value korunur
arsort: [değer] büyükten küçüğe, key-value korunur
ksort: [key] küçükten büyüğe, key-value korunur
krsort: [key] büyükten küçüğe, key-value korunur

*/

//$sayilar=array(
//    /* Key */ /* => */ /* Değer */
//    "bir"=>1,
//    "iki"=>2,
//    "uc"=>3,
//    "dort"=>4
//);

/*
    sort($sayilar);
    print_r ($sayilar);
    echo "<br>";
    rsort($sayilar);
    print_r ($sayilar);
    echo "<br>";
    shuffle($sayilar);
    print_r ($sayilar);
    echo "<br>";
    asort($sayilar);
    print_r ($sayilar);
    echo "<br>";
    arsort($sayilar);
    print_r ($sayilar);
    echo "<br>";
    ksort($sayilar);
    print_r ($sayilar);
    echo "<br>";
    krsort($sayilar);
    print_r ($sayilar);
*/


/*
    -- Dizi Elemanlarını Düzenlemek/Silmek --

    $isimler = array("ali","ahmet","ebru","eyşan");
    unset($isimler[2]); //Silme işlemi
    print_r ($isimler);
    
    $isimler[3]="Muhittin"; //Düzenleme/Update İşlemi
    print_r ($isimler);

*/


/*
    -- Fonksiyon Oluşturmak --
    
    --Geriye değer döndürmeyen
    function carpma($sayi1, $sayi2)
    {
        echo $sayi1 * $sayi2;
    }
    
    carpma(11, 2);

    --Geriye değer döndüren
    
    function carpma($sayi1, $sayi2)
        {
            return $sayi1*$sayi2;
        }
        
    echo carpma(2, 26);

*/
/*
    -- Fonksiyon Örnekleri --

    function ornek($sayi = null)
    {
        if ($sayi == null) 
        {
            echo "Sayı Belirtmediniz! :(";
        }
        elseif (!is_int($sayi)) //Sayı değişkeni int değil mi ? sorusunu sorduk true dönerse içeri girer.
        {
            echo "Geçerli Bir Sayı Değeri Belirtiniz :(";
        }
        else {
            for ($i=1; $i <= $sayi; $i++) 
            { 
                //echo "Merhaba";
                echo "$i  <br>";
            }
        }
    }
    //ornek();
    //ornek("asdf");
    ornek(10);

*/

/*
    -- Global Değişkenler --

    $sayi1 = 25;
    $sayi2 = 5;
    function Topla($a)
    {
        global $sayi1, $sayi2; //Global olarak tanımlamazsak kullanmammıza izin vermiyor.
        return $a + $sayi1 + $sayi2;
    }
    echo Topla(10);

*/

/*
    -- String Fonksiyonlar --

    --strstr ==> içeriyor mu ?
    $metin = "Merhaba ben Baki.";
    if (strstr($metin,"ben")) 
    {
        echo "var";
    }
    else {
        echo "Yok";
    }

    --strlen ==> Karakter sayısını verir.
    $metin = "Merhaba ben Baki.";
    echo strlen($metin); //Ekran çıktısı : 17

    --substr ==> Metinden parça almamızı sağlar
    $metin = "Merhaba ben Baki.";
    // Metin, Başlangıç, Bitiş
    echo substr($metin, 0, 5); //Ekran çıktısı : Merha

    --str_replace ==> Değiştirme işlemi yapar
    $metin = "Merhaba ben Baki.";
    echo str_replace("Baki", "Ahmet", $metin); //Ekran çıktısı : "Merhaba Ben Ahmet" oldu.

    --strtoupper ==> Tamamı büyük harf olur.
    --strtolower ==> Tamamı küçük harf olur.
    $metin = "Merhaba ben Baki.";
    echo strtoupper($metin);
    echo strtolower($metin);

    --ucfirst ==> İlk harfi büyük yapar.
    $metin = "merhaba ben Baki.";
    echo ucfirst($metin);

    --ucwords ==> Tüm kelimelerin ilk harflerini büyük yapar.
    $metin = "merhaba ben baki.";
    echo ucwords($metin);

*/

/*
    -- Matematiksel Fonksiyonlar --

    --floor ==> aşağı yuvarlar.
    --ceil  ==> yukarı yuvarlar.
    --round ==> bildiğimiz yuvarlama işelmi.
    --cos   ==> trigonometik işlemler için.
    --sin   ==> trigonometik işlemler için.
    --tan   ==> trigonometik işlemler için.
    --rand  ==> restgele sayı üretir.
    --sqrt  ==> karekök alma işlemi.
    --pow   ==> üs alma işlemi.
    --abs   ==> mutlak değer işlemi.
    --max   ==> en büyük sayıyı bulur.
    --min   ==> en küçük sayıyı bulur.
    
    $sayi1 = 10;
    $sayi2 = 25.9999;
    
    //echo floor($sayi2);
    //echo ceil($sayi2);
    //echo round($sayi2);
    //echo cos($sayi1);
    //echo sin($sayi1);
    //echo tan($sayi1);
    //echo rand(111,999);
    //echo sqrt(16);
    //echo pow(4, 2);
    //echo abs(-33);
    //echo max(1,55,9652,21,2165,564);
    //echo min(1,55,9652,21,2165,564);
*/


/*
    -- Date/Time Fonksiyonları --

    date_default_timezone_set("Europe/Istanbul") // Tarihi ve saati kullanırken kaynak göstermemiz bizim için faydalı olabilir. Kiraladığımız sunucu yurtdışında ise türkiye için doğru zamanı elde edemeyebiliriz. Hala saat ve tarih düzelmediyse sunucuya reset atılması gerekebilir.
    
    setlocale(LC_ALL,"turkish"); //Dili türkçeye çeviriyoruz.

    //echo date("Y-m-d H:i:s");

    $tarih = "2022-06-08 12:00:00";
    echo date($tarih);
*/

/*
    -- Dizi Fonksiyonları --

    
    $renkler = array("mavi","siyah","yesil","turuncu","mor","kirmizi","sari");
    $yaslar = array(15,22,5,55,36,74,65);
    
    //var_dump($renkler); 
    // Çıktısı:
    //C:\wamp64\www\php\index.php:426:
    //array (size=7)
    //0 => string 'mavi' (length=4)
    //1 => string 'siyah' (length=5)
    //2 => string 'yesil' (length=5)
    //3 => string 'turuncu' (length=7)
    //4 => string 'mor' (length=3)
    //5 => string 'kirmizi' (length=7)
    //6 => string 'sari' (length=4)
    
    //echo count($yaslar); // Kaç elemanlı olduğunu sayar.
    
    //var_dump(is_array($renkler));
    //Çıktısı:
    //C:\wamp64\www\php\index.php:441:boolean true
    
    //array_push($renkler,"birinci","ikinci"); //Eleman eklemeye yarar.
    //var_dump($renkler); 
    
    //array_pop($renkler); // Dizinin son elemanını siler.
    //var_dump($renkler);
    
    //if (in_array("siyah", $renkler)) //İçeriyor mu?
    //{
    //    echo "Var";
    //}
    //else {
    //    echo "Yok";
    //}
    
    //$sonuc = array_diff($renkler, $yaslar); // 1. dizi(A kümesi) ile 2. diziyi(B kümesi) karşılaştırır. A/B küme mantığı ile sonucu verir.
    //print_r($sonuc);
*/


/*
    -- Recursive Fonksiyonlar --
    -- Özyinelemeli(Kendini yineleyen) Fonksiyonlar
    
    function faktoriyel($sayi) //4 = 4*3*2*1 ==> 24
    {
        if ($sayi==0) 
        {
            return 1;
        }
        return $sayi * faktoriyel($sayi-1);
    }
    echo faktoriyel(4);
*/
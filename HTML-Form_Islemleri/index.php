<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML + PHP</title>
    </head>
    <body>
        <!-- 
            //GET İle Değer döndürme işlemi//
        <form actioon="" method="GET">
            <input type="text" name="ad" placeholder="Adınızı girin"> <br>
            <input type="text" name="soyad" placeholder="Soyadınızı girin"> <br>
            Erkek <input type="radio" name="cinsiyet" value="erkek"> <br>
            Kadın <input type="radio" name="cinsiyet" value="kadin"> <br>
            <input type="email" name="email" placeholder="example@email.com"> <br>
            <input type="submit" name="kaydet" value="Kaydet">
            <input type="reset" name="temizle" value="Temizle">
        </form>

        <?php
            //Eğer kaydet kılandıysa
            if(@$_GET["kaydet"])
            {
                //print_r($_GET);
                echo "
                Ad: <b>$_GET[ad]</b><br>
                Soyad: <b>$_GET[soyad]</b><br>
                Cinsiyet: <b>$_GET[cinsiyet]</b><br>
                Email: <b>$_GET[email]</b><br>
                ";
            }
            else 
            {
                echo "Tıklanmadı";
            }
        ?>
        -->

        <!--POST İle Değer döndürme işlemi-->
        <form actioon="" method="POST">
            <input type="text" name="ad" placeholder="Adınızı girin"> <br>
            <input type="text" name="soyad" placeholder="Soyadınızı girin"> <br>
            Erkek <input type="radio" name="cinsiyet" value="erkek"> <br>
            Kadın <input type="radio" name="cinsiyet" value="kadin"> <br>
            <input type="email" name="email" placeholder="example@email.com"> <br>
            
            <select name="gun">
                <?php for ($i=1; $i <=31 ; $i++) 
                { 
                    echo '<option value="'.$i.'"> '.$i.' </option>';
                }
                ?>
            </select>
            <?php
                $aylar = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
            ?>
            <select name="ay">
                <?php 
                    foreach ($aylar as $ay) 
                    {
                        echo '<option value="'.$ay.'">'.$ay.'</option>';
                    }
                ?>
                
            </select>
            <select name="yil">
                <?php for ($i=1900; $i <=date("Y") ; $i++) 
                { 
                    echo '<option value="'.$i.'"> '.$i.' </option>';
                }
                ?>
            </select><br><br>

            <input type="submit" name="kaydet" value="Kaydet">
            <input type="reset" name="temizle" value="Temizle">
        </form>

        <?php
            //Eğer kaydet kılandıysa
            if(@$_POST["kaydet"])
            {
                //print_r($_POST);
                echo "
                Ad: <b>$_POST[ad]</b><br>
                Soyad: <b>$_POST[soyad]</b><br>
                Cinsiyet: <b>$_POST[cinsiyet]</b><br>
                Email: <b>$_POST[email]</b><br>
                Doğum: <b>$_POST[gun]/$_POST[ay]/$_POST[yil]</b><br>
                ";
            }
            else 
            {
                echo "Tıklanmadı";
            }
        ?>





    </body>
</html>
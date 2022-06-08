<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML + PHP</title>
    </head>
    <body>
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

    </body>
</html>
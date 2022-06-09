<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML + PHP</title>
    </head>
    <body>
        <h1>Resim Yükleme</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="file"><br><br>
            <input type="submit" name="submit">
            <hr>
            <?php
                //print_r($_FILES["file"]);
                if (@$_POST["submit"])
                {
                    if ($_FILES["file"]["size"]>0) 
                    {
                        //Dosya seçildiyse işlemlere başla
                        $uzanti = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); //jpg, png, vs.
                        if ($uzanti =="jpg"||$uzanti =="jpeg") 
                        {
                            $yeniAd = "uploads/" . uniqid() . "." . $uzanti;

                            if (move_uploaded_file($_FILES["file"]["tmp_name"], $yeniAd))
                            {
                                echo "Başarıyla yüklendi :).<br>"; 
                                echo "<img src='$yeniAd' width='200'>";
                            }
                            else 
                            {
                                echo "Dosya Yüklenirken bir hata meydana geldi!!!";
                            }
                        }
                        else {
                            echo "Sadece jpg ve jpeg formatı yükleyebilirsiniz!";
                        }
                    }
                    else {
                        echo "Dosya Seçimi Yapınız";
                    }
                }
                else {
                    echo "Tıklanmadı!";
                }
            ?>
        </form>
    </body>
</html>
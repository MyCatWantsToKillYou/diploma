<?php
    $host="localhost:3306";
    $user="root";
    $pass="Svensps838"; //установленный вами пароль
    $db_name="deliver";
    $link=mysqli_connect($host,$user,$pass);
    mysqli_select_db($link,$db_name);

    if($_POST["sel"]=="bank"){

    if ($_POST["Col0"]=="" and $_POST["Col1"]=="" and $_POST["Col2"]=="") {

         die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO банк (`idБанк`, `БИК`,`Название`) 
                        VALUES ('".$_POST['Col0']."','".$_POST['Col1']."','".$_POST['Col2']."')");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}



else if($_POST["sel"]=="driver"){

    if ($_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        and $_POST["Col6"]==""
        and $_POST["Col7"]==""
        and $_POST["Col8"]==""
        ) {
        die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO водители (idВодители, Имя, Фамилия, Отчество, NПаспорта, Серия, Выдан, Удостоверение, Телефон) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."',
                            '".$_POST['Col6']."',
                            '".$_POST['Col7']."',
                            '".$_POST['Col8']."'
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


else if($_POST["sel"]=="city"){


     if ($_POST["Col0"]=="" and $_POST["Col1"]=="") {
        die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO города (idГорода, Город) 
                        VALUES ('".$_POST['Col0']."','".$_POST['Col1']."')");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


else if($_POST["sel"]=="shipper"){

    if ($_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        and $_POST["Col6"]==""
        and $_POST["Col7"]==""
        ) {
        die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO грузоотправитель (`idГрузоотправителя`, `Название`, `Отпускающий`, `Должность`, `Адрес`, `Телефон`, `КодГорода`, `ИНН`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."',
                            '".$_POST['Col6']."',
                            '".$_POST['Col7']."'
                            
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


else if($_POST["sel"]=="Consignee"){


    if ($_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        and $_POST["Col6"]==""
        and $_POST["Col7"]==""
        ) {
        die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO грузополучатель (`idГрузополучатель`, `Название`, `Принимающий`, `Должность`, `Адрес`, `Телефон`, `КодГорода`, `ИНН`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."',
                            '".$_POST['Col6']."',
                            '".$_POST['Col7']."'
                            
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


else if($_POST["sel"]=="units") {

    if ($_POST["Col0"]=="" and $_POST["Col1"]=="") {
        die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO единицыизмерения (idЕдиницыизмерения, Название) 
                        VALUES ('".$_POST['Col0']."','".$_POST['Col1']."')");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


    else if($_POST["sel"]=="ordered"){


        if (
            $_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        and $_POST["Col6"]==""
        
        ) {
            die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO заказано (`idзаказано`, `КодЗаказа`, `КодПродукта`, `Количество`, `Цена`, `ВесНетто`, `ВесБрутто`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."',
                            '".$_POST['Col6']."'
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}

    

    else if($_POST["sel"]=="order"){

         if (
            $_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        and $_POST["Col6"]==""
        and $_POST["Col7"]==""
        ) {
            die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO заказы (`idЗаказы`, `КодГрузополучателя`, `КодГрузоотправителя`, `ДатаЗаключения`, `КодВодителя`, `КодАвто`, `ДатаИсполнения`, `СуммаДоставки`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."',
                            '".$_POST['Col6']."',
                            '".$_POST['Col7']."'
                            
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


    else if($_POST["sel"]=="organization"){

        if ($_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        and $_POST["Col6"]==""
        and $_POST["Col7"]==""
        and $_POST["Col8"]==""
        ) {
            die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO  организации_1 (`idОрганизации_1`, `Название`, `Принимающий/Отпускающий`, `Должность`, `Адрес`, `Телефон`, `КодГорода`, `ИНН`, `КПП`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."',
                            '".$_POST['Col6']."',
                            '".$_POST['Col7']."',
                            '".$_POST['Col8']."'
                            
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


    else if($_POST["sel"]=="products"){

         if (
            $_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        and $_POST["Col4"]==""
        and $_POST["Col5"]==""
        
        
        ) {
            die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO продукты (`idПродукты`, `Название`, `КодГрузоотправителя`, `КодЕдиницы`, `Nпрейскуранта`, `Артикул`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."',
                            '".$_POST['Col4']."',
                            '".$_POST['Col5']."'
                            
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


else if($_POST["sel"]=="accounts"){

if (
            $_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        and $_POST["Col3"]==""
        
       
        
        ) {
    die('Введите данные!');
     }
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO счета (`idСчета`, `КодБанка`, `НомерСчёта`, `КодОрганизации`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."',
                            '".$_POST['Col3']."'
                           
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


else if($_POST["sel"]=="transport"){

    if (
            $_POST["Col0"]=="" 
        and $_POST["Col1"]=="" 
        and $_POST["Col2"]==""
        
        
       
        
        ) {
    die('Введите данные!');
     }
$sql = mysqli_query($link, "INSERT INTO транспорт (`idТранспорт`, `Марка`, `Госномер`) 
                        VALUES ('".$_POST['Col0']."',
                            '".$_POST['Col1']."',
                            '".$_POST['Col2']."'
                            
                           
                            )");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }


}

?>
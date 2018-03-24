<?php
/*
    function load_files($files) {
        for($i = 0; $i < count($files['name']); $i++) {
            if($files['error'][$i] == 0) {
            
            if($_files['size'][$i] <=100000) {
                if(
                    ($_files['type'][$i] == "image/jpeg")||
                    ($_files['type'][$i] == "image/png")||    
                    ($_files['type'][$i] == "image/gif")||
                    ($_files['type'][$i] == "image/bmp")||
                    ($_files['type'][$i] == "image/jpg")
                )   {
                    move_uploaded_file($_files['tmp_name'][$i],
                    'upload/'.$_files['name'][$i]);
                    echo "Վերբեռնվել է մեկ նկար: " . $_files['name'][$i]; 
                    }            
                    else {
                        echo "Սխալ տիպի ֆայլ եք ընտրել: " . $_files['name'][$i];
                    }
            }
            else {
                echo "ошибка с размером файла:" . $_files['name'][$i];
            }
        }
        else {
            echo "Ошибка при передачи файла на сервер:" . $_files['name'][$i];
        }
    }                   
    
    
    if(isset($_POST['send-request'])) {
        load_files($_FILES['load']);
    }   
    */

    /*
    if(isset($_POST['send-request'])) {
        if($_FILES['load']['error'] == 0) {
            
            if($_FILES['load']['size'] <=10000000000) {
                if(
                    ($_FILES['load']['type'] == "image/jpeg")||
                    ($_FILES['load']['type'] == "image/png")||    
                    ($_FILES['load']['type'] == "image/gif")||
                    ($_FILES['load']['type'] == "image/bmp")||
                    ($_FILES['load']['type'] == "image/jpg")
                )   {
                    move_uploaded_file($_FILES['load']['tmp_name'],
                    '../mycomp.am/app/upload/'.$_FILES['load']['name']);
                    echo "Վերբեռնվել է մեկ նկար" ;
                    }            
                    else {
                        echo "Սխալ տիպի ֆայլ եք ընտրել";
                    }
            }
            else {
                echo "ошибка с размером файла!";
            }
        }
        else {
            echo "Ошибка при передачи файла на сервер!";
        }
    }                   
                 
?>   
<form method="post" enctype="multipart/form data">
    <input type="file" name="load" multiple /> 
    <input type="submit"  name="send-request"  value="Վերբեռնել" />՚    
    
</form>    

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


*/



?>


 <meta charset="utf-8">
 <form enctype="multipart/form-data" action="../mycomp.am/public/userfile" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="../mycomp.am/public/userfile" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <input name="userfile" type="file" />
    <input type="submit" value="Загружить Файл" />
</form>





<?php
    
    if(isset($_POST['send-request'])) {
        if($_FILES['load']['error'] == 0) {
            
            if($_FILES['load']['size'] <=100000) {
                if(
                    ($_FILES['load']['type'] == "image/jpeg")||
                    ($_FILES['load']['type'] == "image/png")||    
                    ($_FILES['load']['type'] == "image/gif")||
                    ($_FILES['load']['type'] == "image/bmp")||
                    ($_FILES['load']['type'] == "image/jpg")
                )   {
                    move_uploaded_file($_FILES['load']['tmp_name'],
                    'upload/'.$_FILES['load']['name']);
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
<form> method="post" enctype="multipart/form data">
    <input type="file" name="load" multiple /> 
    <input type="submit"  name="send-request"  value="Վերբեռնել" />՚    
    
</form>    

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">







<?php
$nume_fisier = $_FILES['file']['name'];
define('PATH', realpath(dirname(__DIR__)));
$locatie = PATH.'/upload/' . $nume_fisier;
$uploadOk = 1;

if($uploadOk == 0){
    echo 0;
}else{
    if(move_uploaded_file($_FILES['file']['tmp_name'],$locatie)){
        echo $locatie;
    }else{
        echo 0;
    }
}
?>
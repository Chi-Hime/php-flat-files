<?php
    $form_data = $_POST['AddLine'];
   
    $file = fopen("shakespeare.txt", "a+") or die("shakespeare poem died");

    fwrite($file, "\n".$form_data);
    fclose($file);
    header("Location: http://localhost:8888/php-flat-files/");
    die();
?> 

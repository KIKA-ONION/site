<?php
    if ($_POST) {

    $array = file('callback.json');
    $array = json_decode($array[0], true);
    echo "<br><br>";
    array_push($array, array("name" => $_POST["name"], "number" => $_POST["number"]));
    $array = json_encode($array, JSON_UNESCAPED_UNICODE);
    $file = fopen("callback.json", "w");
    fwrite($file, $array);
    echo "<h2 align=center>Заявка успешно оставлена </h2> <a href=./main.html>Вернуться на главную</a>  ";
    

    }   
    else {  
        echo "ERROR";
    }
?>

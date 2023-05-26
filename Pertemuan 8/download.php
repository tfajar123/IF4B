<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="info.php"');
    header('Conent-Type: text/php');
    readfile(__DIR__ . '/file/info.php');
    exit();
}
else{
    echo "Invalid Key! <br> <a href='upload.php'>Back</a>";
}
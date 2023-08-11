<?php
    function escrever($msg, $file){
        $id = fopen($file, 'a');
        fwrite($id, "$msg | ");
        fclose($id);
    }
    
    session_start();
    error_reporting(0);

    $_SESSION['txt'] = $_POST['txt'];
    $arquivo = 'C:\xampp\htdocs\chat\registro.txt';

    escrever($_SESSION['txt'], $arquivo);
    include('index.html');
?>
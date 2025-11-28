<?php 
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    // Mude apenas esta linha abaixo
    define("BASE", "biblioteca"); // Era "concessionaria2122m"

    $conn = new MySQli(HOST,USER,PASS,BASE);
?>
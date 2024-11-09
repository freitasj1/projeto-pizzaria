<?php 

    include_once("conn.php");

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "GET") {
        $bordasQuery = $conn->query("SELECT * FROM bordas;");
        $bordas = $bordasQuery->fetchAll();
        

        $massasQuery = $conn->query("SELECT * FROM massas;");
        $massas = $massasQuery->fetchAll();


        $saboresQuery = $conn->query("SELECT * FROM sabores;");
        $sabores = $saboresQuery->fetchAll();

        // print_r($sabores); exit;
        
    } 
    // Criação de pedido
    else if ($method == "post") {
        
    }
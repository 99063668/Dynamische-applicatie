<?php
    function connection_database(){
        $host = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "dynamische content";

        try {
            $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connection succeed";
            echo "<br>";
            return $connect;
        } catch (PDOException $error) {
            echo "Database connection failed: ".$error->getMessage();
            echo "<br>";
        }
    }

    function fetchall_data(){
        global $result, $value;
        $connect = connection_database();

        $stmt = $connect->prepare("SELECT * FROM characters");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        if(isset($_GET["pages"])){
            $index = ($_GET["pages"] - 1);
        }else{
            $index = 0;
        }

        $value = $result[$index];

        $connect = null;       
    }
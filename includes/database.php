<?php
    function connection_database(){
        $host = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "dynamische content";

        try {
            $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $error) {
            echo "Database connection failed: ".$error->getMessage();
            echo "<br>";
        }
    }

    //Verzamelt alle data van de characters op volgorde van naam
    function getCharacters(){
        $connect = connection_database();

        $stmt = $connect->prepare("SELECT * FROM characters ORDER BY name");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        return $result;

        $connect = null;       
    }

    //Telt hoeveel characters er in de database zitten en laat dit zien 
    function telResultaten(){
        $connect = connection_database();

        $stmt = $connect->prepare("SELECT COUNT(*) AS aantal FROM characters");
        $stmt->execute();
        $result2 = $stmt->fetch(PDO::FETCH_ASSOC); 
        
        return $result2;

        $connect = null;       
    }

    //Haalt 1 character op uit de database 
    function getCharacter($id){
        $connect = connection_database();

        $stmt = $connect->prepare("SELECT * FROM characters WHERE id=?");
        $stmt->execute([$id]);
        $result3 = $stmt->fetch(PDO::FETCH_ASSOC); 

        return $result3;

        $connect = null;       
    }
    

<?php
    include "includes/database.php";
    $result2 = telResultaten();
    $result = getCharacters();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="Vormgeving/resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $result2["aantal"];?> characters uit de database</h1>

</header>
<div class="center">
    <?php 
        foreach ($result as $array => $value) {
            echo "<div class='container'>
                <a class='item' href=".'includes/character.php?id='.$value['id'].">
                    <div class='left'> 
                        <img class='avatar' src=".'Vormgeving/resources/images/'.$value['avatar']; if($value['id'] == 2){echo " style='transform: rotate(270deg)'";} echo ">
                    </div>
                    <div class='right'>
                        <h2>".$value['name']."</h2>
                        <div class='stats'>
                            <ul class='fa-ul'>
                                <li><span class='fa-li'><i class='fas fa-heart'></i></span> ".$value['health']."</li>  
                                <li><span class='fa-li'><i class='fas fa-fist-raised'></i></span> ".$value['attack']."</li>
                                <li><span class='fa-li'><i class='fas fa-shield-alt'></i></span> ".$value['defense']."</li>
                        </div>
                    </div>
                    <div class='detailButton'><i class='fas fa-search'></i> bekijk</div>
                </a>
            </div>";
        }
    ?>
</div>
<footer>&copy; Dewi van der Velden @2021</footer>
</body>
</html>

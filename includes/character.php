<?php
    include "database.php";
    $id = $_GET["id"];
    $result3 = getCharacter($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character <?php echo $result3["name"];?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../Vormgeving/resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $result3["name"];?></h1>
    <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="../Vormgeving/resources/images/<?php echo $result3['avatar'];?>" alt ="pageimages" <?php if($result3['id'] == 2){echo " style='transform: rotate(270deg)'";}?>>
            <div class="stats" style="background-color: <?php echo $result3['color'];?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $result3['health'];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $result3['attack'];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $result3['defense'];?></li>
                </ul>
                <ul class="gear">
                    <li <?php if($result3['weapon'] == null){echo " style='display: none'";}?>>
                    <b>Weapon</b>: <?php echo $result3['weapon'];?>
               
                    <li <?php if($result3['armor'] == null){echo " style='display: none'";}?>>
                    <b>Armor</b>: <?php echo $result3['armor'];?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo nl2br($result3['bio'], false);?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Dewi van der Velden @2021</footer>
</body>
</html>

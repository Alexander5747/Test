<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test2/style.css">
    <link rel="stylesheet" href="../css/header/style.css">
</head>

<body>
<?php require_once 'connect.php' ?> 
<?php require_once '../templates/header.php'?>
  
    <section>
        
            <?php 
                $info = mysqli_query($connect, "SELECT * FROM `blog1`");
                $info = mysqli_fetch_all($info);
              
                foreach ($info as $infos) {
            ?>
            <div class="content">
                <h1><?= $infos[1]?></h1>
                <p><?= $infos[2]?></p>
                <p><?= $infos[3]?></p>
            </div>
                    <?php
                }
            ?>
        
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header/style.css">
    
</head>
<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    background: rgb(128, 126, 126);
}
h1{
    padding: 12px 12px 12px 25px;
}
section{
    max-width: 700px;
    margin: 0 auto; 
    background: #fff;
    padding: 20px;
}
.content{
    background: rgb(128, 126, 126);
    border: 4px solid #be1116;
    border-radius: 10px;
    margin-bottom: 5vh;
    color: rgb(248, 234, 234);
}
p{
    padding: 20px;
}
</style>
<body>
<?php require_once 'test2/connect.php' ?> 
<?php require_once 'templates/header.php'?>
<section>
        
        <?php 
        
       
            $info = mysqli_query($connect, "SELECT * FROM `blog1`");
            $info = mysqli_fetch_all($info);
           
            $titlepage2 =$info[2];
            $titlepage3 =$info[3];
            $titlepage4 =$info[4];
            $new_text2 = implode(array_slice($titlepage2, 2, 1 ));
            $new_text3 = implode(array_slice($titlepage3, 2, 1 ));
            $new_text4 = implode(array_slice($titlepage4, 2, 1 ));
            $i2=substr_replace($new_text2,'',170);
            $i3=substr_replace($new_text3,'',330);
            $i4=substr_replace($new_text4,'',117);
        ?>
        <div class="content">
            <h1><?= $info[2][1]?></h1>
            <p><?= $i2?></p>
            <p><?= $info[2][3]?></p>
        </div>
        <div class="content">
            <h1><?= $info[3][1]?></h1>
            <p><?= $i3?></p>
            <p><?= $info[3][3]?></p>
        </div>
        <div class="content">
            <h1><?= $info[4][1]?></h1>
            <p><?= $i4?></p>
            <p><?= $info[4][3]?></p>
        </div>

                <?php
            
       
        ?>
    
</section>
<script src="js/main.js"></script>
</body>
</html>

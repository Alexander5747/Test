<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test1/style.css">
    <link rel="stylesheet" href="../css/header/style.css">
</head>
<style>
    body{
    background: rgb(128, 126, 126);
    }

    .info_form_table{
    display: flex;
    justify-content: center;
    }
    th, td{ 
    padding: 10px;
    background: rgb(196, 188, 188);
    }

</style>
<body>
     <?php require_once 'connect.php' ?> 
     <?php require_once '../templates/header.php'?>
        <div class="form_wraper">
            <form action="create.php" method="post" name='fs'>
                <input type="text" name="user_name" placeholder="Введите ФИО" required >          
                <input type="text" name="ardress" placeholder="Введите адрес" required>           
                <input type="tel" name="telephone" placeholder="Введите номер телефона" patern='7-[0-9]{3}-[0-9]{3}-[0-9]{3}' required>
                <input type="email" name="email" placeholder="Введите email" required>
                
                <input type="submit" value="Отправить" id="send">
            </form>
       

        </div>
        <div class="info_form_table">
        <table>
            <tr>
                <th>ФИО</th>
                <th>Адрес</th>
                <th>Номер телефона</th>
                <th>Email</th>
            </tr>
            <?php 
                $info = mysqli_query($connect, "SELECT * FROM `send1`");
                $info = mysqli_fetch_all($info);
                foreach ($info as $infos) {
                    ?>
                    <tr>
                        <td><?= $infos[1]?></td>
                        <td><?= $infos[2]?></td>
                        <td><?= $infos[3]?></td>
                        <td><?= $infos[4]?></td>
                    </tr>
                    <?php
                }
            ?>
         
        </table>
    </div>

</body>
</html>
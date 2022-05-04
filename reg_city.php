<?php

include 'connect.php';
include 'checklogin.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $i="insert into city(namecity)value('Colatina')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
=======
header('Content-Type: text/html; charset=utf-8');
include 'connect.php';
include 'checkLogin.php';

if(isset($_POST['sub'])){
    
    $nameCity=$_POST['nameCity'];

    // $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    $i = "insert into city(nameCity) values ('$nameCity')";
    mysqli_query($con, $i);
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <meta charset=”UTF-8”>
>>>>>>> b035153f0a0e0bb7515c7b79c1e08efb138f833c
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name

                        <input type="text" name="text">
=======
                        <input type="text" name="nameCity">
>>>>>>> b035153f0a0e0bb7515c7b79c1e08efb138f833c
                    </td>
                </tr>
                
                <tr>
                    <td>

                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                    <td>
                        <a href="login.php"> Fazer login</a>

=======
                        <input type="submit" value="submit" name="sub">         
                    </td>
                    <td>
                        <a href="login.php"> Login</a>

                    </td>
                </tr>
            </table>
    </body>
</html>

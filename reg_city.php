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
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name
                        <input type="text" name="text">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                    <td>
                        <a href="login.php"> Fazer login</a>

                    </td>
                </tr>
            </table>
    </body>
</html>

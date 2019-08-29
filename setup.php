<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        
        <title></title>
    </head>
    <body>
        <h1>Setting up...</h1>
        <?php
        require_once './ketnoi.php';

        create Table Userr (
    uId serial PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    status CHAR(1));
                echo "<br>";
        
        
        
        ?>
        <h1>...done!</h1>       
    </body>
</html>
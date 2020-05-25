<?php
include("dbconnect.php");
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="user_process.php" method="POST" name="user">
            Name: <input type="text" name="name" value="">
            <br>
            City: <input type="text" name="city" value="">
            <br>
            email: <input type="email" name="email" value="">
            <br>
            Message: <textarea name="Message"></textarea>
            <br>
            <input type="submit" value="submit"> 

        </form>
    </body>
</html>
<?php
    $first_name = htmlspecialchars(filter_input(INPUT_GET, 'fname'));
    $last_name = htmlspecialchars(filter_input(INPUT_GET,'lname'));
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="index.php" method="get">   
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"> <br>
        <input type="submit" value="Submit">
        </form>
        
        <?php
//        echo "Hi " . $first_name . " " . $last_name;
        include ('nav.php');
        ?>
        
        <form action="view.php" method="post">   
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"> <br>
        <input type="submit" value="Submit">
        </form>
        
        
    </body>
</html>

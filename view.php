<?php
    $first_name = htmlspecialchars(filter_input(INPUT_POST, 'fname'));
    $last_name = htmlspecialchars(filter_input(INPUT_POST,'lname'));
    
    
    $some_number = 42;
    $some_number_with_a_decimal = 7.77;
    $name = "Laith Riley";
    $is_based = true;
    
    $name .= " Your Liege";
    
    //increment
    $some_number++;
    
    //decrement
    $some_number--;
    
    
    $some_number += 10;
    $some_number -= 10;
    
    //integer division
    $integer_quotient = intdiv(7, 2);
    
    $output = "";
    
    $counter = 1;
    while ($counter < 10) {
        $output .= "</br> $counter";
        $counter++;
    }
    
    for($index = 0; $index <10; $index++) {
        $output .= "</br> $index";
    }
        
    
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        echo "Hi " . $first_name . " " . $last_name;
        echo "</br>";
        echo $some_number . " is the answer";
        echo "</br>";
        echo "$name is Based: $is_based";
        echo "</br>";
        echo " 7 / 2 is: " . (7 / 2);
        echo "</br>";
        
    // triple equals (===) checks for identical, same value and same type.
    if ( $first_name == 10 ) {
        echo " World's first integer name ";
    } else {
        echo " Incredulous... ";
    }
    
    echo "$output";

       include ('nav.php');
        ?>
        
    </body>
</html>

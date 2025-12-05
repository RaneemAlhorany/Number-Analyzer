<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Number Analyzer</title>
    </head>
    <body>
        <form action="" method ="GET">
            <input type="number" name = "number" required>
            <input type="submit">
        </form>

        <?php
            
            if (isset($_GET["number"])){
                $number  = $_GET["number"];
                echo "<h1> Number : $number </h1>";
                sign($number);
                evernOrOdd($number);
                Divisible_by_3($number);
                Divisible_by_5($number);
                prime($number);
            }
        ?>
        
    </body>
</html>

<?php

function sign($number)
{
    if ($number > 0)
        echo "<h1> Sign : positive </h1>";
    else if ($number < 0)
        echo "<h1> Sign : negative </h1>";
    else
       echo "<h1> Sign : zero </h1>";        
}
function evernOrOdd($number)
{
        if ($number %2 == 0)
        echo " <h1> Even/Odd: Even </h1>";
    else 
        echo "<h1> Even/Odd: Odd </h1>";
}
function Divisible_by_3($number)
{
    if ($number %3 == 0)
        echo "<h1>Divisible by 3? yes </h1>";
    else 
        echo " <h1> Divisible by 3? No </h1>";
}
function Divisible_by_5($number)
{
    if ($number % 5 == 0)
        echo " <h1> Divisible by 5? yes </h1>";
    else 
        echo "<h1> Divisible by 5? No </h1>";
}

function prime($number)
{
    $count = 2;
    if ($number <= 1)
        echo "<h1> prime? No </h1>";

    while ($number >= $count)
    {
        if ($count == $number)
        {
            echo "<h1> Prime? Yes </h1>";
            return;
        }else if ($number % $count == 0)
        {
            echo "<h1> Prime? No </h1>";
            return;
        }
        $count ++;
    }
}


?>

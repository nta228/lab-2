<?php
$num2 = 0;
echo "The multiplication calue of 14 * 15 is<br> ";
function multiply()
{
    $num1 = 14;
    $num2 = 15;
    $num2 = $num1 * $num2;
    echo $num2;
}

multiply();
echo "<br> The value of the local cariable on exiting th function is <br>";
echo $num2;
?>

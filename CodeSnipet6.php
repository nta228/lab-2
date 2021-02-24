<HTML>
<HEAD>
    <TITLE>Static Variable</TITLE>
</HEAD>
<BODY>
<?php
function decrement()
{
    static $static_int1 = 99;
    $static_int1--;
    echo "The decrement value is $static_int1";
}

decrement();
?>
</BODY>
</HTML>
<?php

    if(isset($_GET['op1']))
    {
        echo $_GET['n1'] + $_GET['n2'];
    }
    if(isset($_GET['op2']))
    {
        echo $_GET['n1'] - $_GET['n2'];
    }
    if(isset($_GET['op3']))
    {
    echo $_GET['n1'] * $_GET['n2'];
    }
    if(isset($_GET['op4']))
    {
    echo $_GET['n1'] / $_GET['n2'];
    }
?>
<?php
//не трогать, мое
if (isset($_COOKIE['name']))
{
    unset($_COOKIE['name']); 
    setcookie('name', null, -1, '/');
}

if (isset($_COOKIE['logsuccess']))
{
    unset($_COOKIE['logsuccess']);
    setcookie('logsuccess', null, -1, '/');
}

if (isset($_COOKIE['logsuccess']))
{
    unset($_COOKIE['logsuccess']);
    setcookie('logsuccess', null, -1, '/');
}
header("Refresh: 0; url=http://worldofop.ru/index.php");
?>
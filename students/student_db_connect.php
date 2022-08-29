<?php
$servername='localhost';
$username="u950483018_scholars";
$password="Scholars123";

try
{
    $con=new PDO("mysql:host=$servername;dbname=u950483018_auth_verify",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}

?>
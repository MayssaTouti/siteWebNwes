<?php
$host='localhost'; 
$user='root'; 
$password=''; 
$dbname='sitenwes'; 
$dsn=''; 
try{

    $dsn='mysql:host='.$host.';dbname='.$dbname;
    $pdo=new PDO($dsn,$user,$password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    //  echo "connection valide :"; 
}catch(PDOException $e)
{
    echo 'la connexion a échoué :'.$e->getMessage();  
}


?>
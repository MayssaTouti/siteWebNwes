<?php
require ('connection.php'); 
if(isset($_POST['submit']))
{
try{
    $dsn= new PDO ("mysql:host=$host;dbname=$dbname",$user,$password); 
    $dsn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $nomPrenom=$_POST['nomPrenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pays=$_POST['pays']; 
    $password=password_hash($password ,PASSWORD_BCRYPT,array("cost"=>12));
    $sql="SELECT  count(email) AS num FROM visiteur WHERE email= :email"; 
    $stmt=$pdo->prepare($sql); 
    $stmt->bindValue(':email',$email); 
    $stmt->execute(); 
    $row=$stmt->fetch(PDO ::FETCH_ASSOC);
    if($row['num']>0){
        echo '<script> alert ("lemail existe déjà");</script>';   
   
   }else {

    $stmt=$dsn->prepare("INSERT INTO visiteur(nomPrenom,email,password,pays)  values( :nomPrenom,:email,:password,:pays)  ");
    $stmt->bindParam(':nomPrenom',$nomPrenom);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password); 
    $stmt->bindParam(':pays',$pays);   
    if($stmt->execute())
    {
      echo '<script> alert("inscription réussi") ;</script>'; 
    }else 
   {
     $error="error :".$e->getMessage(); 
    echo '<script> alert("'.$error.'") ;</script>'; 
   }
}
}catch(PDOException $e){
    $error="error :".$e->getMessage();
    echo '<script> alert("'.$error.'") ;</script>';
}
}





?>
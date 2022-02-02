<?php
class visiteur
{
public $id ; 
public $nomPrenom;
public $email;
public $password; 
public $pays; 


function __construct()
{

} 
function insertCompte()
{  require_once('connect.php');
    $cnx=new connexion();
    $pdo=$cnx->cnxbase();
$req= "insert into visiteur(nomPrenom,email,password,pays) values('$this->nomPrenom','$this->email','$this->password','$this->pays')";

    $pdo->exec($req);


}
function rechereCompte($id)
{ 
     require_once('connect.php');
    $cnx=new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT count(*) FROM visiteur WHERE id='$id'";
    $res=$pdo->query($req);
    return $res;
}




}


?>
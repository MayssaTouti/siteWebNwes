<?php
class contact
{
public $id ; 
public $nom;
public $email;
public $contenu; 


function __construct()
{

} 
function insertContact()
{  require_once('connect.php');
    $cnx=new connexion();
    $pdo=$cnx->cnxbase();
    $req= "insert into contact (nom,email,contenu) values('$this->nom','$this->email','$this->contenu')";

    $pdo->exec($req);


}
function rechercheContact($id)
{ 
     require_once('connect.php');
    $cnx=new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT count(*) FROM contact WHERE id='$id'";
    $res=$pdo->query($req);
    return $res;
}




}


?>
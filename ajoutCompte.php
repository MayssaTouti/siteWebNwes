<?php 
// if(isset($_POST['valider']))
// {
// if(isset($_POST['nom']) AND  isset($_POST['email']) And  isset($_POST['contenu']))
// {
//     if(!empty($_POST['nom']) AND  !empty($_POST['email']) And  !empty($_POST['contenu']))
// {
    include ('contact.php');
    $us=new contact();
    $us->nomPrenom=$_POST['nomPrenom'];
    $us->email=$_POST['email'];
    $us->password=$_POST['password'];

    $us->pays=$_POST['pays']; 

    $row=$us->rechereCompte($us->id); 
    $n=$row->fetchColumn(0);
    if($n==0)
    {
        $us->insertCompte();
    
    
        echo "<script type='text/javascript'>alert(' insertion effectué !'); </script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('insertion non effectué '); </script>";
    }







    
 

?>
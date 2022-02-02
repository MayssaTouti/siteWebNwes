<?php 
if(isset($_POST['valider']))
{
if(isset($_POST['nom']) AND  isset($_POST['email']) AND  isset($_POST['contenu']))
{
    if(!empty($_POST['nom']) AND  !empty($_POST['email']) AND  !empty($_POST['contenu']))
{
    include ('contact.php');
    $us=new contact();
    $us->nom=$_POST['nom'];
    $us->email=$_POST['email'];
    $us->contenu=$_POST['contenu']; 
    
    $row=$us->rechercheContact($us->id); 
    $n=$row->fetchColumn(0);
    if($n==0)
    {
        $us->insertContact();
        echo "<script type='text/javascript'>alert(' insertion effectué !'); </script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('insertion non effectué '); </script>";
    }

}

else 
{
    echo "<script type='text/javascript'>alert(' Oups! champ vide détecté. Veuillez remplir tous les champs  !'); </script>";
  
}
}else 
{
    echo "<script type='text/javascript'>alert(' Veuillez remplir tous les champs!'); </script>";
}
}


?>
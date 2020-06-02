<?php
    try{
        include("test.php");
        $con=new exec("insert into users(prenom, nom, login, password) values('janette', 'preira', 'sonatel.odc', '0000')");
        echo "Enregistrement reussie reussie";
    }
    catch{
        die("Erreur: ".$e->getMessage());
    }
?>
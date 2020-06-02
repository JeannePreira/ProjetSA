<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image: url('./public/images/fond.jpg'); 
            background-repeat: no-repeat; 
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
     require_once('data/fonctions.php');
    if(isset($_GET['lien'])){
        switch ($_GET['lien']) {
            case 'accueil':
                require_once("pages/admin.php");
                break;
            case 'jeux':
                require_once("pages/jeux.php");
                break;  
            case "inscription":
                require_once ('pages/inscription.php');
            break;  
        }
    }else{
        require_once("pages/connexion.php");
    } 
    
     //verifier si le statut existe et si c'est logout
        if(isset($_GET['statut']) && $_GET['statut']==="logout"){
            session_destroy();
        }
    ?>

</body>
</html>
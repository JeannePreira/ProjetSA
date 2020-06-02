<?php
    function connexion($pseudo,$pwd){  
        try{
            $pdo= new PDO('mysql:dbname=ma_base;host=localhost','root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
        }
        echo"$pseudo $pwd";
           $data=$pdo->prepare('SELECT * FROM utilisateur wHERE Pseudo=:pseu  AND password=:password');
           $data->execute(array('pseu'=>$pseudo,'password'=>$pwd));
           $users=$data->fetch();
         
         if($users!==false)
         {
             $role=$users['nom_role'];
             $_SESSION['users']=$users;
             $_SESSION['statut']="login"; 
             if($role==="admin")
             {
                 return "accueil";
             }else{
                 return "jeux";
             }
         }
         else
         {
             return "error";
         }
      
       
    }


    


    function is_connect(){
       if(!isset( $_SESSION['statut'])){
            header("location:index.php");
        }  
    }
?>

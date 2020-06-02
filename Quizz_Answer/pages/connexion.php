<?php
//ar_dump($_POST);
if(!empty($_POST)){
    $pseudo=$_POST['user'];
    $password=$_POST['pass'];
   $result=connexion($pseudo,$password);

   if($result=="error"){
       echo "login ou mot de pass incorrect";
   }else{

       header("location:index.php?lien=".$result); 
   }
}
 
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/index.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="line-logo "></div>
        <div class="col-sm-12">WELCOME TO QUESTION ANSWER GAME</div>
    </div>
    <!--bloc de connexion-->
   
        <div class="col-xm-12 col-sm-10 col-md-8 col-lg-6 connexion-bloc">
            <div class="titre2">le plaisir de jouer</div>
            <form action="" method="post" id="form-connexion">
                <div class="row connexion-bloc2">
                    <!--line login-->
                    <div class="col-xm-12 col-sm-6">

                        <div class="form-group pseudo_bloc">
                            <label for="password" >PSEUDO</label>
                            <div class="line-pseudo line-icon-pseudo"></div>
                            <input type="text" class="form-control input_form" error="error-1" name="user"  id="" placeholder="Pseudo">
                            <div class="line-error" id="error-1"></div>
                        </div>

                        <div class="form-group">
                            <label for="password" >PASSWORD</label>
                            <div class="line-pass line-icon-password"></div>
                            <input type="password" class="form-control input_form" error="error-2" name="pass"  id="" placeholder="Password">
                            <div class="line-error" id="error-2"></div>
                        </div>
                            <button type="submit" name="btn_submit" class="form-control btn-primary connect">CONNEXION</button> 
                        
                    </div>                     
                    <!--line register-->
                    <div class="col-xm-12 col-sm-6 line_inscription ">
                                <div class="logo_big"></div>
                                <a class="btn btn-primary form-control inscription" href="index.php?lien=inscription" role="button">INSCRIPTION</a>
                    </div>
                
                </div>
            </form>
        </div>
                       
            
       
  



           
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>


        
          



<?php

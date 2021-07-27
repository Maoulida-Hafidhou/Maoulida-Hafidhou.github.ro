
<center>

  

    
          <div class="col-lg-10">
            <form  name="inserer"  method="post" action="?page=contact" role="form" class="php-email-form"> 
            <h1 class="box-title"><p style="color:#FF0000";>Les champs Nom et E-mail sont obligatoire !</p></h1>
         
              <div class="form-row">

                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" data-rule="minlen:4" /><span class="error_form" id="nomerr"></span>
                  <div class="validate"></div>

                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="email" class="form-control"  id="email" placeholder=" Email" data-rule="minlen:4" /> <span class="error_form" id="emailerr"></span>
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>

              <input type="submit" value="Envoyer " name="inserer" id="btn" name="submit" class="box-button">

         
            </form>
          </div>

        </div>
       
      </div>
     
<?php
if(isset($_POST['inserer']) && $_POST['nom']!="" && $_POST['email']!="" && $_POST['sujet']!="" && $_POST['message']!="" ){
	require("connexion.php");
	$res=$idcon->exec("insert into contact (nom,email,sujet,message) values ('".$_POST['nom']."','".$_POST['email']."','".$_POST['sujet']."','".$_POST['message']."')");
	
	if($res){

	
		header("location/index.php");
    
	}
	else{
		echo "Enregistrement n'est pas inserer";
	}

	$idcon=NULL;
}

?>
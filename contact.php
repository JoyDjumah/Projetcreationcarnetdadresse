<?php
$basedonne=new PDO('mysql:host=localhost;dbname=contact;charset=utf8','root','');
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo_justified.css" rel="stylesheet">
	<title>Afficher un contact</title>
    
</head>
<body>
<div class="text-center">
    <?php
  $affichcontact =$basedonne->query("SELECT*FROM  contacts WHERE id='".$_GET["modif"]."' "); 
  $sbdcontact=$affichcontact->fetch();
   ?>
   <div style="text-align: center; padding:10px;">
  <div>
  <a href="#"><img src="images/templatemo_header_blank.jpg" alt="Simplex Responsive Template" class="img-responsive" /></a>
    
        <div class="form-div mb-5 mt-3">
            <center><h1 class="title-form">NOS CONTACTS</h1></center>
        </div>
        <div class="col-md-6">
              	<h2>Contact Us</h2>           
              
                  <div class="form-div mt-3"style="text-align: center; padding:10px;">
                    <label for="nom">Nom:</label>
                    <p><?php echo $sbdcontact["nom"];?></p>
  
                  </div>

                  <div class="form-div mt-3">
                    <label for="prenom">Prenom:</label>
                    <p><?php echo $sbdcontact["prenom"];?></p>
                    
                  </div>

                  <div class="form-div mt-3">
                    <label for="numero">Num Telephone:</label>
                    <p><?php echo $sbdcontact["numero"];?></p>
                 
                  </div>

                  <div class="form-div mt-3">
                    <label for="adresse">Adresse:</label>
                    <p><?php echo $sbdcontact["adresse"];?></p>
                    
                  </div>

                  <div class="form-group">
                    <label for="description">Description:</label>
                  	
				  </div>
    <div class="p-3 m-auto text-center mb-3 mt-3">
            <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-color: blue;height:30px; text-align: right; align-items: center;"><a href="./liste_contacts.php" style="color: red;">contacts</a></button>  
        </div>
       
  </div>
  </div>
</body>
</html>                    
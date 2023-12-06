<?php 
    session_start();
    ob_start();
    include('conn.php');
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div style="text-align: center; padding:10px;">
 <form action="" method="post" enctype="multipart/form-data">

<div style="text-align: center; padding:10px;">

<div style="text-align: center; padding:10px;">
    <center><h1>NOTRE CARNET D'ADRESSE</h1></center>
</div>
<div style="text-align: center; padding:10px;">
    <input type="text" name="nom" id="" class="form-control" placeholder="Nom du Contact" required autocomplete="off" style="width: 300px; height:40px">
</div>

<div style="text-align: center; padding:10px;">
    <input type="text" name="prenom" id="" placeholder="Prenom du Contact" required autocomplete="off" style="width: 300px; height:40px">
</div>

<div style="text-align: center; padding:10px;">
    <input type="telephone" name="telephone" required placeholder="Telephone" autocomplete="off" style="width: 300px; height:40px">
</div>

<div style="text-align: center; padding:10px;">
    <input type="text" name="adresse" required placeholder="Adresse du contact" autocomplete="off" style="width: 300px; height:40px">
</div>
<div style="text-align: center; padding:10px;">
    <input type="email" name="email" required placeholder="Email" autocomplete="off" style="width: 300px; height:40px">
</div>


<div style="text-align: center; padding:10px;">
    <input type="text" name="description "required placeholder="Description" autocomplete="off" style="width: 300px; height:40px">
</div>

<div style="text-align: center; padding:10px;">
    <button type="submit" name="save" style="color:mediumblue">Envoyer</button>
    <button type="reset" name="reset" style="color:mediumblue">Annuler</button>
    <button type="submit" name="save"><a href="./liste_contacts.php" style="color:mediumblue">Contacts</a></button>  
</div>

</form>

<?php 
    if (isset($_POST["save"])) {
        $nom= $_POST["nom"];
        $prenom = $_POST["prenom"];
        $telephone = $_POST["telephone"];
        $adresse = $_POST["adresse"];
        $email = $_POST["email"];
        $description = $_POST["description"];

        $insert_contact = "INSERT INTO `contactS`( `nom`, `prenom`, `numero`, `adresse`, `email`, `description`) VALUES ('$nom','$prenom','$adresse','$telephone','$email','$description')";

        $dbh->exec($insert_contact);

        header("location:./liste_contacts.php");
    }
?> 
 </div>

</body>
</html>

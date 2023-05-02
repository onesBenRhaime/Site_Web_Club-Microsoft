<?php  include 'header.php';
       include '../conn.php';
       session_start();
       if (isset($_POST['dec'])){
              session_destroy();
              header("Location:../index.php");
              exit;
       }
?>
<div class="container">
<div class="spacer">
<form  method="POST"> 
<table>
<tr><td>
       <h1 class="title"><b>Bienvenue,dans l'espace d'administration</b></h1><hr>
</td></tr>

       <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Inscrit un membre au club :</td>
        <td><a href="ajoumembreclub.php"><input type="button" name="affiche" value="Afficher" /></a></b></p><br></td></tr>
        
        </div> </div>

        <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Afficher la Liste de Membres :</td>
        <td><a href="membre.php"><input type="button" name="affiche" value="Afficher" /></a></b></p><br></td></tr>
        
        </div> </div>
        
        <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Afficher la Liste de participants :</td>
        <td><a href="participan.php"><input type="button" name="affiche" value="Afficher" /></a></b></p><br></td></tr>
        
        </div> </div>
       

        <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Ajouter un Membre:</td>
        <td><a href="insertmembre.php"> <input type="button" name="ajout" value="Ajouter" /></b></p></a><br></td></tr>
        </div></div>

       <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Ajouter une Formation :</td>
        <td><a href="insertformation.php"> <input type="button" name="ajout" value="Ajouter" /></b></p></a><br></td></tr>
        </div></div>

        <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Ajouter une Galerie :</td>
        <td><a href="insergalerie.php"> <input type="button" name="ajout" value="Ajouter" /></b></p></a><br></td></tr>
        </div></div>

        <div class="row">
        <div class="col-sm-4">
        <tr><td><p><b> Ajouter admin :</td>
        <td><a href="insertionadmin.php"><input type="button" name="affiche" value="Afficher" /></a></b></p><br></td></tr>
        
        </div> </div>
       
       <div class="row">
       <div class="col-sm-4"><tr><td><p><b> E-mails aux participants :</td><td>
       <input type="button" name="ajout" value="Ajouter" /> </b> </p><br></td></tr>
       </div>                           
       </div>
       

       
       <div class="row">
       <div class="col-sm-4"><tr><td>
       <p><b> Déconnexion :</td>
       <td> <input type="submit" name="dec" value="Oui" /> </b> </p></tr></td>
       </div> </div>

<br/><br/><br/>
</table>
</form>
</div></div>
<?php include 'footer.php';?>
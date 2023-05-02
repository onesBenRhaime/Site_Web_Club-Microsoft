<?php include 'header.php';
      include 'conn.php';
      if(isset($_POST['s'])){
        $cin=$_POST['cin'];
        $nom=$_POST['nom'];
        $prenom=$_POST['pr'];
        $dep=$_POST['dep'];
        $classe=$_POST['classe'];
        $mail=$_POST['mail'];
        
        $formation=$_POST['frt'];
        
            $sql="INSERT INTO `participant`(`cin`, `nom`, `prenom`, `depart`, `classe`, `email`, `formation`) VALUES
             ('$cin','$nom','$prenom','$dep','$classe','$mail','$formation')";
            $conn->exec($sql);
        }
        $res='SELECT * from formation';
             $resq=$conn->query($res);
        $conn=null;
?>




<!-- banner -->

<!-- banner-->

<h1 class="title">Inscription au Formation</h1>
<!-- reservation-information -->
<div class="contact">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<div class="spacer">

<h3>Inscription</h3>
<form role="form" class="wowload fadeInRight" method="POST" >
    <div class="form-group">
            <input type="text" class="form-control"  placeholder="CIN" name="cin" required >
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="nom" name="nom" required >
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Prenom" name="pr" required >
        </div>
        <div class="form-group">
            <select name="dep">
                <option value="ti">TI</option>
                <option value="ge">GE</option>
                <option value="gm">GM</option>
                <option value="aa">AA</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="classe" name="classe" required >
        </div>  
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="mail" required >
        </div>
        <div class="form-group">
        <select  class="contactus" name="frt" placholder="formation">
                                    <option value="formation">choisir une formation</option>
                                <?php

                              while($ligne=$resq->fetch()){
                                echo'<option value="'.$ligne['titre'].'">'.$ligne['titre'].' </option>';
                            }
                                   
                               ?>    
                                </select>
        </div>
        <button class="btn btn-default" name="s">S'inscrit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->






<?php include 'footer.php';?>
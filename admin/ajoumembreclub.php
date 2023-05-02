<?php include 'header.php';
      include '../conn.php';
      if(isset($_POST['s'])){
        $cin=$_POST['cin'];
        $nom=$_POST['nom'];
        $prenom=$_POST['pr'];
        $date=$_POST['dn'];
        $classe=$_POST['classe'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        
        
            $sql="INSERT INTO `inscription`(`CIN`, `nom`, `prenom`, `datenaic`, `classe`, `email`, `phone`) VALUES
             ('$cin','$nom','$prenom','$date','$classe','$mail','$tel')";
            $conn->exec($sql);
        }
       
?>




<!-- banner -->

<!-- banner-->

<h1 class="title">Inscription membre</h1>
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
            <input type="date" class="form-control"  placeholder="Date Naissance" name="dn" required >
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="classe" name="classe" required >
        </div>  
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="mail" required >
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Numero de telephone" name="tel" required >
        </div>  
        <button class="btn btn-default" name="s">S'inscrit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->






<?php include 'footer.php';?>
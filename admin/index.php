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
        $conn=null;
?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner5.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown"></h1>
                <p class="animated fadeInUp"></p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><img  class="embed-responsive-item" src="images/photos/banner2.png" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</div>
<div class="col-sm-5 col-md-4">
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



<!-- services -->
>
<!-- services -->


<?php include 'footer.php';?>
<?php include 'header.php';
      include 'conn.php';
?>

<div class="container">

<h2>Formations</h2>


<!-- form -->


<?php
   echo'<div class="row">';
   
   $req='SELECT * from formation ';
   $res=$conn->query($req);
   while($ligne=$res->fetch()){
       echo'<div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="img/'.$ligne['img'].'"class="img-responsive">
       <div class="info"><h3>'.$ligne['titre'].'</h3>'.$ligne['description'].'<BR><BR><a href="inscriformation.php" class="btn btn-default">Insrit </a></div></div></div>';
   }
   echo'</div>'; 
?> 


                     


</div>
<?php include 'footer.php';?>
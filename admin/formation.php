<?php include 'header.php';
      include '../conn.php';
?>

<div class="container">

<h2>Formations</h2>
<br><br><br>


<!-- form -->


<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $del="DELETE FROM `formation` WHERE `img`='$id' ";
    $conn->exec($del);
  }
   echo'<div class="row">';
   
   $req='SELECT * from formation ';
   $res=$conn->query($req);
   while($ligne=$res->fetch()){
       echo'<div class="col-sm-6 wowload fadeInUp">
       <div class="rooms"><img src="../img/'.$ligne['img'].'"class="img-responsive"><div class="info"><h3>'.$ligne['titre'].
       '</h3><br>'.$ligne['description'].'<BR><BR><a href="?id='.
       $ligne['img'].'" class="btn btn-default">Supprimer </a></div></div></div>';
   }
   echo'</div>'; 
?> 



                    


</div>
<?php include 'footer.php';?>
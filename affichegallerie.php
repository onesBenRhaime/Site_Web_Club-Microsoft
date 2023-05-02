<?php include 'header.php';
      include 'conn.php'
?>
<center>
    <br><br>
<div class="container">

<h1>
    <?php
    $reqe='SELECT titreimg FROM `galerie`';
    $rese=$conn->query($reqe); 
    ?>
</h1>
<br><br><br>
</center>


<!-- form -->
<?php

   echo'<div class="row">';
   
   $req='SELECT * FROM `galerie`';
   $res=$conn->query($req);
   while($ligne=$res->fetch()){
       echo'<div class="col-sm-6 wowload fadeInUp"><div class="rooms"><div class="info">
       <p>'.$ligne['descimg'].'</p></div></div></div><div class="rooms"><img src="./img/'.$ligne['img'].'" class="img-responsive" width="400"></div>';
   }
   echo'</div>'; 
?> 




  




                     


</div>
<br><br><br><br><br><br>
<?php include 'footer.php';?>
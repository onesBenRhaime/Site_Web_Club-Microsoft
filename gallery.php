<?php include 'header.php';
      include 'conn.php';
?>

<div class="container">

<h2>Gallery</h2>
<br><br><br><br>

<!-- form -->


<?php

echo'<div class="row gallery">';
   
   $req='SELECT * FROM `galerie`';
   $res=$conn->query($req);
   while($ligne=$res->fetch()){
       echo'<div class="col-sm-4 wowload fadeInUp"><a href="./img/'.$ligne['img'].'"  class="gallery-image" data-gallery>
       <img src="./img/'.$ligne['img'].'" class="img-responsive"></a></div>';;
   }
   echo'</div>'; 
?> 
</div>

<?php include 'footer.php';?>
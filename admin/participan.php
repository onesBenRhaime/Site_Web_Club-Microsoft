<?php include 'header.php';
       include '../conn.php';
      
      $error="Username ou Password Incorrect !";
?>
<div class="container">

<!-- form -->

<div class="contact">
       <div class="row">
			<div class="spacer">   	
            <form  method = "GET" action="rechercheform.php">
   <input  type = "search" name = "q">
   <input class="btn btn-outline"  type = "submit" name = "s" value = "Rechercher">
  </form>	
  <?php
                
                    
                 
                        $res='SELECT * from participant';
                        $resq=$conn->query($res);

                           
                        echo"<table class='table'>
                        <thead>
               <tr><th scope='col'>cin</th><th scope='col'>nom</th>
               <th scope='col'>prenom</th>
               <th scope='col'>departement</th><th scope='col'>classe</th>
               <th scope='col'>email</th><th scope='col'>formation</th></tr>";
                while($ligne=$resq->fetch()){
                      echo"<tr><td>".$ligne['cin']."</td><td>".$ligne['nom']."</td><td>".
                   $ligne['prenom']."</td><td>".$ligne['depart']."</td><td>".$ligne['classe'].
                   "</td><td>".$ligne['email']."</td>
                    <td>".$ligne['formation']."</td>";
}

echo"</table>";
?>
<form role="form" >
		<div class="form-group">
      <a href="imprimer.php"><input type="button" name="printCMSPage" value="Imprimer cette page">	</a>	</div>
	</form>
                            	
</div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>



<?php include 'header.php';
       include '../conn.php';
      
      $error="Username ou Password Incorrect !";
?>
<div class="container">

<!-- form -->

<div class="contact">
       <div class="row">
			<div class="spacer">   		
  <?php

  if (isset($_GET['q']) and !empty($_GET['q'])) {
      
      $r = htmlspecialchars($_GET['q']);
  
      $sql = $conn->query('SELECT * FROM participant where formation LIKE "%'.$r.'%" ');
      if ($sql->rowCount() > 0) {
         
        echo"<table class='table'>
        <thead>
<tr><th scope='col'>cin</th><th scope='col'>nom</th>
<th scope='col'>prenom</th>
<th scope='col'>departement</th><th scope='col'>classe</th>
<th scope='col'>email</th><th scope='col'>formation</th></tr>";
while($ligne=$sql->fetch()){
      echo"<tr><td>".$ligne['cin']."</td><td>".$ligne['nom']."</td><td>".
   $ligne['prenom']."</td><td>".$ligne['depart']."</td><td>".$ligne['classe'].
   "</td><td>".$ligne['email']."</td>
    <td>".$ligne['formation']."</td>";}
  }
                      else{
                          echo"aucune resultat";
                      }
                  }
                  echo"</table>";
                
?>
<form role="form" >
		<div class="form-group">
        <input type="submit" name="printCMSPage" value="Imprimer cette page" class="btn btn-secondary" onclick="window.print()">	</div>
	</form>
                            	
</div>
</div>
</div>
<!-- form -->

</div>

<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>




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
  
      $sql = $conn->query('SELECT * FROM inscription where classe LIKE "%'.$r.'%" ');
      if ($sql->rowCount() > 0) {
         
          echo"<table class='table'>
          <thead>
  <tr><th scope='col'>cin</th><th scope='col'>nom</th>
  <th scope='col'>prenom</th>
  <th scope='col'>date de naissance</th><th scope='col'>classe</th>
  <th scope='col'>mail</th><th scope='col'>tel</th></tr>";
  while ($ligne = $sql->fetch()){
        echo"<tr><td>".$ligne['CIN']."</td><td>".$ligne['nom']."</td><td>".
     $ligne['prenom']."</td><td>".$ligne['datenaic']."</td><td>".$ligne['classe'].
     "</td><td>".$ligne['email']."</td>
      <td>".$ligne['phone']."</td></tr>";}
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




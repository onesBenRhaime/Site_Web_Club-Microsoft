<?php include 'header.php';
       include '../conn.php';
?>
<div class="container">

<!-- form -->
<div class="contact">
   <div class="row">
      <div class="spacer">   		
         <?php
             if(isset($_GET['id'])){
                $id=$_GET['id'];
                $del="DELETE FROM inscription WHERE `CIN`='$id' ";
                $conn->exec($del);
            }
                $res='SELECT * from inscription';
                $resq=$conn->query($res);
                echo"<table class='table' ><thead>
                     <tr><th scope='col'>CIN</th><th scope='col'>Nom</th><th scope='col'>Prenom</th>
                     <th scope='col'>Classe</th><th scope='col'>Email</th>
                     <th scope='col'>Telephone</th></tr>";
                while($ligne=$resq->fetch()){
                      echo"<tr><td>".$ligne['CIN'].
                      "</td><td>".$ligne['nom'].
                      "</td><td>". $ligne['prenom'].
                      "</td><td>".$ligne['classe'].
                      "</td><td>".$ligne['email'].
                      "</td><td>".$ligne['phone']."</td></tr>";
               }
               echo"</table>";
        ?>
	<form role="form" >
		<div class="form-group">
      <input type="submit" name="printCMSPage" value="Imprimer cette page" class="btn btn-secondary" onclick="window.print()"></div>
	</form>
                            
</div></div></div>
</div>
</div>
<!-- form -->
</div>
<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>

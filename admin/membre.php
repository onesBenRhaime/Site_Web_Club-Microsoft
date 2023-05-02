<?php include 'header.php';
       include '../conn.php';
      
      $error="Username ou Password Incorrect !";
?>
<div class="container">

<!-- form -->

<div class="contact">
       <div class="row">
			<div class="spacer">   	
            <form  method = "GET" action="recherche.php">
   <input type = "search" name = "q">
   <input type = "submit" name = "s" value = "Rechercher">
  </form>	
  <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    
                    $del="DELETE FROM inscription WHERE `CIN`='$id' ";
                    
                    $conn->exec($del);
                }
                       
                        $res='SELECT * from inscription';
                        $resq=$conn->query($res);

                           
                        echo"<table class='table'>
                        <thead>
               <tr><th scope='col'>cin</th><th scope='col'>nom</th>
               <th scope='col'>prenom</th>
               <th scope='col'>date de naissance</th><th scope='col'>classe</th>
               <th scope='col'>mail</th><th scope='col'>tel</th><th scope='col'>Delete</th></tr>";
                while($ligne=$resq->fetch()){
                    echo"<tr><td>".
                    $ligne['CIN']."</td><td>".
                    $ligne['nom']."</td><td>".
                    $ligne['prenom']."</td><td>".
                    $ligne['datenaic']."</td><td>".
                    $ligne['classe']."</td><td>".
                    $ligne['email']."</td><td>".
                    $ligne['phone']."</td><td><a href='?id=".
                    $ligne['CIN']."'>effacer</a></td></tr>";
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



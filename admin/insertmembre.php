<?php include 'header.php';
      include '../conn.php';
?>
<div class="container">

<h1 class="title">Inserer Membre</h1>


<!-- form -->
<div class="contact">
       <div class="row">	
       	<div class="col-sm-12">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Insertion</h4>
			<form role="form" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<input class="form-control"  type="text" name="cin" placeholder="CIN" required>
			</div>
			<div class="form-group">
			<input class="form-control"  type="text" name="nom" placeholder="Nom " required>
			</div>
			<div class="form-group">
			<input type="text" class="form-control" id="phone" name="pr" placeholder="Prenom" required>
			</div>
            <div class="form-group">
			<input type="text" class="form-control" id="phone" name="post" placeholder="Poste dans le club" required>
			</div>
			<button type="submit" class="btn btn-default" name="s">Send</button>
			</form>
			</div>
       	</div>
       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';


  if(isset($_POST['s'])){
    $cin=$_POST['cin'];
    $nom=$_POST['nom'];
    $prenom=$_POST['pr'];
    $poste=$_POST['post'];
    

      $sql="INSERT INTO `membre`(`Cin`, `nom`, `prenom`, `post`) VALUES ('$cin','$nom','$prenom','$poste')";
      $conn->exec($sql);
    }
    $conn = null;
?>
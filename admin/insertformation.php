<?php include 'header.php';
      include '../conn.php';
?>
<div class="container">

<h1 class="title">Inserer Formation</h1>


<!-- form -->
<div class="contact">
       <div class="row">	
       	<div class="col-sm-12">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Inserer Formation</h4>
			<form role="form" method="POST" enctype="multipart/form-data">
			
			<div class="form-group">
			<input class="form-control"  type="file" name="img" placeholder="choisir une images " required>
			</div>
			<div class="form-group">
			<input type="Nom" class="form-control" id="phone" name="nom" placeholder="Nom du formation" required>
			</div>
			<div class="form-group">
			<textarea type="text" class="form-control"  placeholder="Description" name="desc" rows="4"></textarea>
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
    if(isset($_FILES['img'])){
      $file_name = $_FILES['img']['name'];
      $file_size =$_FILES['img']['size'];
      $file_tmp =$_FILES['img']['tmp_name'];
      $file_type=$_FILES['img']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));     
      move_uploaded_file($file_tmp,"../img/".$file_name);   
    }
    $nom=$_POST['nom'];
    $desc=$_POST['desc'];
    

      $sql = "INSERT INTO `formation`( `img`, `titre`, `description`) VALUES
       ('$file_name','$nom','$desc')";
      $conn->exec($sql);
    }
    $conn = null;
?>
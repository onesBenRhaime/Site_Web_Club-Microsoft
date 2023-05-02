<?php include 'header.php';
      
      include '../conn.php';
      
?>
<div class="container">

<h1 class="title">insertion administrateur</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>insertion administrateur</h4>
			<form role="form" method="POST">
                <?php
				if(isset($_POST['s'])){
					$user=$_POST['user'];
					$mail=$_POST['mail'];
					$pass=$_POST['password'];
					
					
                     
					 $sql = "INSERT INTO `admin`(`user`, `mail`, `password`) VALUES ('$user','$mail','$pass')";
					$conn->exec($sql);
				  }
				  $conn = null;

                ?>
			<div class="form-group">	
			<input type="text" class="form-control" id="name" name="user" placeholder="nom d'utilisateur" >
			</div>
            <div class="form-group">	
			<input type="text" class="form-control" id="mail" name="mail" placeholder="email" >
			</div>
			<div class="form-group">
			<input type="password" class="form-control" id="email" name="password" placeholder="Mot de passe ">
			</div>
			
					
			<button type="submit" class="btn btn-default" name="s">insert</button>
			<button class="btn btn-default" ><a href="afficheadmin.php">afficher admin</a></button>
			</form>
			</div>
       	</div>
       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>
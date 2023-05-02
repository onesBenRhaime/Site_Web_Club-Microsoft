<?php include 'header.php';
      include 'conn.php';
      $error="Username ou Password Incorrect !";
      session_start();
?>
<div class="container">

<h1 class="title">Login</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Connexion</h4>
			<form role="form" method="POST">
                <?php
                       if(isset($_POST['login'])){
                        $us=$_POST['user'];
                        $ps=$_POST['password'];
                        
                        
                            $res="SELECT * FROM `admin` WHERE `user`='$us' AND `password` ='$ps'";
                            $resq=$conn->query($res);
                            if($ligne=$resq->fetch()){
                                $_SESSION['user']=$res['user'];
                                $_SESSION['password']=$res['password'];
                                header("Location: admin/");
                                exit;
                            }
                            else{
                                echo $error;												
                            }
                            
                        }
                
                ?>
			<div class="form-group">	
			<input type="text" class="form-control" id="name" name="user" placeholder="nom d'utilisateur" >
			</div>
			<div class="form-group">
			<input type="password" class="form-control" id="email" name="password" placeholder="Mot de passe ">
			</div>
			
					
			<button type="submit" class="btn btn-default" name="login">Login</button>
			</form>
			</div>
       	</div>
       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>
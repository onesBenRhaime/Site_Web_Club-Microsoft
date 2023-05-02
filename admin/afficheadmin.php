<?php include 'header.php';   
      include '../conn.php';
      
?>
<div class="container">

       <div class="row">
       	
			<div class="spacer"> 
<?php
				  if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    
                    $del="DELETE FROM `admin` WHERE `user`='$id' ";
                    
                    $conn->exec($del);
                }
                        $res='SELECT * FROM `admin`';
                        $res2=$conn->query($res);

                           
                        echo"<table class='table'><thead><tr><th scope='col'>user</th><th scope='col'>email</th><th scope='col'>password</th></tr>";

                while($ligne=$res2->fetch()){
                      echo"<tr><td>".$ligne['user'].
                      "</td><td>".$ligne['mail'].
                      "</td><td>".$ligne['password'].
                      "</td><td><a href='?id=".$ligne['user']."'>effacer</a></td>";
}

echo"</table>";
?>
</div>
</div>
</div>
<?php include 'footer.php';?>
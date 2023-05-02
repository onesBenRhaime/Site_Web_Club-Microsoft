<?php include 'header.php';
      include 'conn.php';
?>
<div class="container">
<div class="spacer">
       <div class="embed-responsive embed-responsive-16by9"><img  class="embed-responsive-item"  src="images/photos/banner2.png" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
       </div>
       <h1 class="title">Introduction</h1>
       <div class="row">
              <div class="col-sm-4"><p><b>Microsoft Tech Club</b> de l’Institut Supérieur des études technologiques de Kairouan a été créé en Aout 2014 par un groupe des étudiants. <b>Le club Microsoft Tech Club </b>tente d’améliorer l’intégration des étudiants dans la vie estudiantine et valorise davantage les activités scientifiques et socioculturelles au sein de <b> L'ISET KAIROUAN</b>.</p></div>
              <div class="col-sm-4"><p>Notre club se distingue par la diversité de ses activités et surtout par l’intérêt qu’il porte aux thèmes de l’informatique afin de former les étudiants de <b> l’ISET</b> à travers des outils, produits Microsoft et des informations qui leur seront nécessaires durant leurs carrières de futurs informaticiens.</p></div>
              <div class="col-sm-4"><p><b>Microsoft  Tech club</b> est une famille, avec ses féminités omniprésentes et ces gentlemen enthousiastes. Rejoignez cette famille et contribuez à son élargissement !</p></div>              
       </div>
       <hr/>
       <h1 class="title"  >LOGO</h1>
       <div class="row">
       <div class="col-sm-4 wowload fadeInUp"></div>
              <div class="col-sm-4"><p><img src="images/logo1.png"width="100%" height="200" ></p></div>
       </div>
       <hr/>
       <h1 class="title"><b>Membres :</b></h1>
       <?php
       
       echo '<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
             <script src="https://cdnjs.cloudflare.com/jquery-3.3.1.min.js" ></script>
             <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/> 
             <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>';

       echo "<script>
             $(document).ready(function() {
             var t = $('#example').DataTable( {
             'columnDefs': [ {
             'searchable': false,
             'orderable': false,
             'targets': 0
              }],'order':[[ 1, 'asc' ]]});
              t.on( 'order.dt search.dt', function () {
              t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;});}).draw();});</script>";

       $req='SELECT * from membre ';
       $res=$conn->query($req);
       echo '<div class="table-responsive">';
       echo"<table id='example' class='display' border='0' style='width:100%'><tr><td><b>Nom & Prénom :</b></td>
       <td>             </td><td> <b>Poste dans le club :</b></td></tr>";
       while($ligne=$res->fetch()){
       echo'<tr><td>'.$ligne['nom'].' '.$ligne['prenom'].
       '</td><td></td><td>'.$ligne['post'].'</td></tr>';
       }
       echo"</table>";
       echo'</div>';
       echo'<hr/>';
       ?>
       
       <h1 class="title"> <b>Plus d'information:</b></h1>
       <div class="row">
       <div class="col-sm-4"><p>  Pour plus d'information sur le <b> club Microsoft Tech </b> : <br/>      
	           Email: <a href ="">microsoftclubisetkr@gmail.com</a> </p></div>
       </div> <br/><br/><br/>

</div>
<?php include 'footer.php';?>
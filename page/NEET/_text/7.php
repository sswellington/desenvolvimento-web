<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>Erdogan anuncia estado de emergência por 3 meses na Turquia</h1></center>
  <p valign=top><center><img src="../_image/erdogan.jpg"></center></p><br>
  <p>O presidente turco Recep Tayyip Erdogan disse nesta quarta-feira (20) em pronunciamento transmitido pela TV que a Turquia estará sob estado de emergência por três meses.
"Nosso conselho de ministros decidiu instaurar o estado de emergência", anunciou o presidente. Segundo ele, a medida era "necessária para erradicar rapidamente todos os elementos da organização terrorista implicada na tentativa de golpe de Estado". </p><br>
      </aside>
      
     <?php
       //testa se a varivel existe
       $pagePropaganda = "propaganda.html";
       if ( isset( $pagePropaganda ) ) {
         if ($pagePropaganda) {
           $auxSite = $pagePropaganda;
           include $auxSite;
         }
       } else {
         echo "Error : 404";
       }
     ?>
   </div>
  <?php include'../_includes/footer.php' ?>
</body>

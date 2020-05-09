<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>Atletas refugiados: Yiech Pur Biel, o "Garoto Perdido" que encontrou seu lugar no atletismo</h1></center>
  <p valign=top><center><img src="../_image/smallnot3.jpg"></center></p><br>
  <p>Há 11 anos, Yech Pur Biel fugiu do Sudão do Sul para escapar de uma selvagem guerra civil. Após dez anos vivendo em um campo de refugiados, em 2015 ele começou a correr competitivamente. Neste mês de agosto, o jovem de 21 anos disputará os 800m do atletismo nos Jogos Olímpicos Rio 2016. “Mesmo que eu não conquiste ouro ou prata, mostrarei ao mundo que, como um refugiado, posso fazer algo”, disse Biel, um dos dez atletas que compõem a delegação dos refugiados formada pelo Comitê Olímpico Internacional (COI). A jornada de Biel desde sua cidade Natal, Nasir, até o campo de refugiados de Kakuma, no norte do Quênia, é um resquício do que fizeram entre as décadas de 1980 e 1990 os "Garotos Perdidos do Sudão", um grupo de centenas de milhares de meninos e meninas das etnias Nuer e Dinka que fugiram de suas cidades e caminharam distâncias enormes até Kakuma. </p><br>
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

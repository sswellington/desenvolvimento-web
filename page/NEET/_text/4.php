<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>Rio sedia o Grand Prix feminino de vôlei, e seleções fazem ajustes finais de olho nos Jogos Olímpicos</h1></center>
  <p valign=top><center><img src="../_image/smallnot2.jpg"></center></p><br>
  <p>O O Grand Prix de vôlei feminino, que começa nesta quinta-feira na Arena Carioca 1, no Rio de Janeiro, é uma boa oportunidade para as seleções de Brasil, Itália, Japão e Sérvia fazerem ajustes finais de olho nos Jogos Olímpicos Rio 2016. Nestas primeiras rodadas, por exemplo, algumas jogadoras que fizeram campanhas intensas por clubes e são mais exigidas em suas seleções podem ser poupadas. “Vamos começar a rodar as jogadoras e ganhar ritmo de jogo", diz o técnico brasileiro José Roberto Guimarães. "Também vamos avaliar a situação das nossas adversárias", prossegue. </p><br>
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

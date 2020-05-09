<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>Conheça os jogos com realidade aumentada similares a Pokémon Go</h1></center>
  <p valign=top><center><img src="../_image/pokemon.jpg"></center></p><br>
  <p>
Pokémon Go é um game que utiliza realidade aumentada, misturando real com virtual, no iPhone (iOS) e Android. Enquanto o download e data de lançamento do jogo não estão disponíveis, você pode conhecer outros títulos que foram lançados com a mesma tecnologia e até mecânicas similares na jogabilidade. Confira os jogos que vieram antes:
Pokémon Go diverte com mecânica simples e bons gráficos; veja teste
Ingress (iPhone, Android)
Este é o exemplo mais famoso da lista. Um jogo de realidade aumentada que simula a disputa de território entre duas facções de “hackers”, que precisam capturar portais pelo mapa, enviar dados, realizar missões. Ele está disponível também para celulares e foi criado pela Niantic Labs, a mesma produtora de Pokémon Go.</p><br>
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

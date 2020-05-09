<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>Rio 2016 tem novos ingressos para cerimônias de abertura e encerramento e finais do atletismo</h1></center>
  <p valign=top><center><img src="../_image/smallnot4.jpg"></center></p><br>
  <p>Alguns dos ingressos mais concorridos dos Jogos Olímpicos Rio 2016 voltam a ser comercializados nesta quinta-feira (9). A partir do meio-dia (12h) será disponibilizado um novo lote de ingressos para as cerimônias de abertura e encerramento e para as finais do atletismo. A cerimônia de abertura dos Jogos acontece no dia 5 de agosto, entre 19h15 e 23h, no estádio do Maracanã. A cerimônia de encerramento está marcada para o dia 21 de agosto, nos mesmos horário e local. Nos dois casos, os ingressos disponíveis são das categorias A, B, C e D, cujos preços variam entre R$ 600 e R$ 4.600. Esse novo lote inclui ainda as finais dos 100m, 200m e revezamento 4 x 100m rasos do atletismo masculino, provas que podem contar com a presença do jamaicano Usain Bolt, dono de seis medalhas de ouro Olímpicas. Todas as categoiras de preços estão disponíveis, com valores que vão de R$ 350 a R$ 1.200. </p><br>
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

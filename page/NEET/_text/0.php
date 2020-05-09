<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>Em seu 1º Copom, nova diretoria do BC mantém juros em 14,25% ao ano</h1></center>
  <p valign=top><center><img src="../_image/sa.jpg"></center></p><br>
  <p>O Comitê de Política Monetária (Copom) do Banco Central se reuniu nesta quarta-feira (20) e decidiu manter, pela oitava vez seguida, os juros básicos da economia em 14,25% ao ano - o maior patamar em dez anos. A decisão (leia a íntegra ao final desta reportagem) confirmou a expectativa dos analistas do mercado financeiro.
A reunião foi a primeira comandada pelo novo presidente do BC, Ilan Goldfajn, que informou, no fim de junho, que buscará atingir a meta central de inflação de 4,5% em 2017 – o que pressupõe um atraso maior no processo de queda dos juros.
A inflação corrente do país ainda está elevada. Em 12 meses até junho, o índice somou 8,84%, distante do objetivo central de 4,5% para o próximo ano. Economistas das instituições financeiras estimam que o processo de redução dos juros básicos da economia começará mais para o fim deste ano.
No mês passado, Goldfajn explicou que o BC e o governo estão adotando medidas para permitir a queda na taxa de juros no Brasil, mas acrescentou que esse processo tem de ser levado adiante somente quando as condições permitirem que ela ocorra de "forma responsável", ou seja, de modo que a inflação atinja as metas fixadas pelo Conselho Monetário Nacional (CMN).
Para 2016 e 2017, o CMN definiu uma meta central de inflação de 4,5% no ano e o Banco Central tem que calibrar a taxa de juros visando cumprí-la. Mas há um limite de tolerância que permite que a meta não seja descumprida mesmo que o Índice Nacional de Preços ao Consumidor Amplo (IPCA), a inflação oficial do país, não atinja essa meta central.
Para 2016, a tolerância é de dois pontos percentuais acima do centro da meta. Portanto, se o IPCA ficar em até 6,5% ao final deste ano, a meta não terá sido descumprida. Para 2017, esse teto é de 6%. </p><br>
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

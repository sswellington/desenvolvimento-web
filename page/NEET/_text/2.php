<?php include'../_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
    <aside>
      <?php include'../_includes/menuText.php' ?>
    </aside>
    <div>
      <aside>
       <center><h1>‘Bahianation’ conta história da França através de monumentos</h1></center>
  <p valign=top><center><img src="../_image/bahia.jpg"></center></p><br>
  <p>Ainda na Europa, a série Bahianation chegou à França no Aprovado sábado, 16. O professor Ricardo Carvalho apresentou alguns marcos históricos, como La Conciergerie, o Arco do Triunfo, a Praça da Concórdia e a Igreja de Notre Dame. A matéria mostra, ainda, o cantor lírico Maurício Virgens, um baiano radicado na Europa.
O imponente prédio La Conciergerie representou a glória da dinastia Capentíngia e o início da formação do estado nacional francês, entre os séculos 12 e 13. Ricardo Carvalho lembra que o mesmo espaço se transformou em prisão durante a Revolução Francesa e foi de onde a Rainha Antonieta viu a agitação de Paris que levaria à sua decapitação.
Na Revolução Francesa, a Praça da Concórdia foi palco da decapitação dos monarcas Luis XVI e Maria Antonieta por parte dos jacobinos, organização política que liderava o processo revolucionário na França e se radicalizou sob o comando de Robespierre. “Milhares de pessoas se reuniram para assistir ao espetáculo de morte que deu fim à Dinastia Bourbon”, diz Ricardo.
O professor atribui a Napoleão Bonaparte boa parte da Paris moderna: “Ele reformou museus e construiu o Arco do Carrossel e o Arco do Triunfo, para comemorar suas grandes vitórias militares”. E mostrou a beleza da Catedral de Notre Dame. O episódio termina com a participação de Maurício Virgens, cantor lírico baiano que vive há 20 anos na Europa, cantando a ária da ópera “Sansão e Dalila”. Reveja. </p><br>
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

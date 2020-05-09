
  <?php include'_includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="_css/style.css">

  <body>
   <?php include'_includes/menu.php' ?>
      <aside>
          <table border=0>
            <tr>
              <td class="noticia">
                <?php
                  //testa se a varivel existe
                  $page0 = "page/0.html";
                  if ( isset( $page0 ) ) {
                    if ($page0) {
                      $auxSite = $page0;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>

              <td class="esporte">
                <?php
                  //testa se a varivel existe
                  $page1 = "page/1.html";
                  if ( isset( $page1 ) ) {
                    if ($page1) {
                      $auxSite = $page1;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>

              <td class="entretenimento">
                <?php
                  //testa se a varivel existe
                  $page2 = "page/2.html";
                  if ( isset( $page2 ) ) {
                    if ($page2) {
                      $auxSite = $page2;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>

              <td class="tecnologia">
                <?php
                  //testa se a varivel existe
                  $page3 = "page/temperatura.html";
                  if ( isset( $page3 ) ) {
                    if ($page3) {
                      $auxSite = $page3;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>
            </tr>

            <tr>
              <td class="video">
                <?php
                  //testa se a varivel existe
                  $pageVideo = "page/video.html";
                  if ( isset( $pageVideo ) ) {
                    if ($pageVideo) {
                      $auxSite = $pageVideo;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>

              <td class="esporte">
                <?php
                  //testa se a varivel existe
                  $page4 = "page/4.html";
                  if ( isset( $page4 ) ) {
                    if ($page4) {
                      $auxSite = $page4;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td >

              <td class="esporte">
                <?php
                  //testa se a varivel existe
                  $page5 = "page/5.html";
                  if ( isset( $page5 ) ) {
                    if ($page5) {
                      $auxSite = $page5;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>

              <td class="esporte">
                <?php
                  //testa se a varivel existe
                  $page6 = "page/6.html";
                  if ( isset( $page6 ) ) {
                    if ($page6) {
                      $auxSite = $page6;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>
            </tr>

            <tr>
              <td class="noticia" colspan="2">
                <?php
                  //testa se a varivel existe
                  $page7 = "page/7.html";
                  if ( isset( $page7 ) ) {
                    if ($page7) {
                      $auxSite = $page7;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>

              <td class="entretenimento" colspan="2">
                <?php
                  //testa se a varivel existe
                  $page8 = "page/8.html";
                  if ( isset( $page8 ) ) {
                    if ($page8) {
                      $auxSite = $page8;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>
            </tr>

            <tr>
              <td colspan="4">
                <?php
                  //testa se a varivel existe
                  $pagePropaganda = "page/propaganda.html";
                  if ( isset( $pagePropaganda ) ) {
                    if ($pagePropaganda) {
                      $auxSite = $pagePropaganda;
                      include $auxSite;
                    }
                  } else {
                    echo "Error : 404";
                  }
                ?>
              </td>
            </tr>
          </table>
        </aside>
    </div>
  </body>
</html>

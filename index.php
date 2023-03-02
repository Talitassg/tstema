<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@200;400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>

  <title>Talita Soares - Tema</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./email.php">
</head>

<body>
  <section class="topo">
    <div class="center">
      <header>
        <div class="logo">
          <img src="./image/LOGO-ICONE.png" alt="logo">
        </div> <!-- LOGOTIPO -->

        <div>
          <ul class="menu-desktop">
            <li> <a href="./index.php">Home</a></li>
            <li> <a href="./sobre.php">Sobre</a></li>
            <li> <a href="./contacto.php">Contacto</a></li>
          </ul>
        </div> <!-- MENU DESKTOP -->

        <div class="menu-mobile">
          <i class="bi bi-list"></i>
          <ul>
            <li> <a href="./index.php">Home</a></li>
            <li> <a href="./sobre.php">Sobre</a></li>
            <li> <a href="./contacto.php">Contacto</a></li>
          </ul>
        </div> <!-- MENU MOBILE -->

      </header> <!-- MENU DESKTOP -->

      <div class="clear">
      </div>
      <br>
      <br>

      <div class="w50 foto-principal">
        <h2>A melhor loja de moda infântil</h2>
        <p>Vista-se bem, vista Maria's Kids</p>
        <a target="_blank" href="">Ver modelos</a>
      </div> <!-- TEXTO MENU PRINCIPAL -->

      <div class="w50">
        <img src="./image/LOGOTIPO.png" alt="foto-principal" width="450px" height="450px">
      </div> <!-- IMAGEM MENU PRINCIPAL -->

      <div class="clear">
      </div>

    </div> <!-- DIV CLASS CENTER -->
  </section> <!-- SECTION TOPO -->

  <section>
    <div class="circle">
      <i class="bi bi-arrow-down-circle"></i>
    </div> <!-- DIV CIRCLE -->

    <div style="max-width: 190px; margin: 0 auto; overflow: hidden; margin-top: 25px;" class="conatinerCarosel">
      <div class="conatinerCarosel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./image/logo-loja1.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="./image/logo-loja2.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="./image/logo-loja3.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="./image/logo-loja4.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="./image/logo-loja5.png" class="d-block w-100">
            </div>
          </div> <!-- DIV CAROUSEL-INNER -->
        </div> <!-- DIV CAROUSEL SLIDE -->
      </div> <!-- DIV CONATINER CAROSEL -->
    </div> <!-- DIV CONATINER CAROSEL -->
  </section> <!-- SLIDE MARCAS -->

  <section class="icons">
    <div class="center">
      <h2>Confira nossa coleção</h2>

      <div class="icons-cards">
        <div class="box-single-icons">
          <a href="./menino.php"><img src="./image/icon1.png" alt=""></a>
          <h3>Menino</h3>
          <p>Confira nossa coleção para os meninos</p>
        </div> <!-- DIV BOX-SINGLE-ICONS 1 -->

        <div class="box-single-icons">
          <a href="./menina.php"><img src="./image/icon2.png" alt=""></a>
          <h3>Menina</h3>
          <p>Confira nossa coleção para os meninas</p>
        </div> <!-- DIV BOX-SINGLE-ICONS 2 -->

      </div> <!-- DIV ICONS CARDS -->
    </div> <!-- DIV CENTER - ICONS -->
  </section> <!-- ICONS -->

  <section class="contato">
    <div class="center">
      <div class="w50">
        <h1>Deixe aqui sua mensagem.</h1>
        <p>Como foi sua experiência com nosso produto e atendimento?</p>
        <img src="./image/LOGOTIPO.png" width="300px" heigth="300px">
      </div>
      <div class="w50">
        <form class="formulario" method="get" action="envio_dados.php">
          <div class="field">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
          </div>
          <div class="field">
            <label for="nome">E-mail:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu E-mail*" required>
          </div>
          <div class="field">
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required></textarea>
          </div>
          <input type="submit" name="acao" value="Enviar" onclick="msg()">
        </form>
      </div>
    </div>
    </div>
  </section>
  <section class="depoimentos">
    <div class="center">
      <h2>Depoimentos</h2>
      <div style="max-width: 100%; margin: 0 auto; overflow: hidden; margin-top: 25px;" class="conatinerCarosel">
        <div class="conatinerCarosel">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="depoimentos-box">
                <div class="carousel-item active">
                  <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis."</p>
                  <p>Mary Lotts</p>
                  <img src="./image/M21.jpg">
                </div>
                <div class="carousel-item">
                  <p>"Inventore veritatis, quo harum magn, repellendus dolores perferendis at voluptatibus.
                    Voluptatum voluptatem sunt beatae aliquam quaerat veritatis."</p>
                  <p>Henrry Kisrey</p>
                  <img src="./image/M23.jpg">
                </div>
                <div class="carousel-item">
                  <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis, quo harum magni. Voluptatum aliquam verit."</p>
                  <p>Revista Famas</p>
                  <img src="./image/M5.jpg">
                </div>
                <div class="carousel-item">
                "Inventore veritatis, quo harum magni excepturi neque tenetur exercitationem cum, quaerat veritatis."</p>
                  <p>Natacha Lis</p>
                  <img src="./image/M22.jpg">
                </div>
              </div> <!-- DIV CAROUSEL-INNER -->
            </div> <!-- DIV CAROUSEL SLIDE -->
          </div> <!-- DIV CONATINER CAROSEL -->
        </div> <!-- DIV CONATINER CAROSEL -->
  </section> <!-- SLIDE MARCAS -->
  </div> <!-- DIV CENTER DEPOIMENTOS -->
  </section> <!-- SECTION DEPOIMENTOS -->
<section class="receber-promo">
<div class="center">
<h2>Receba nossas novidades.</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
<div class="field-promo">
            <input type="text" id="Email" name="Email" placeholder="Digite seu E-mail*" required>
          </div>
          <input type="submit" name="acao" value="Enviar" onclick="msg()">
</div>
</section> <!-- SECTION RECEBER-PROMO -->

  <div class="footer">
    <footer>
      <div class="icone-footer">
        <a href=""><img src="./image/LOGO-ICONE.png" width="140px" heigth="140px"></a>
      </div>
      <div class="social">
        <a href="#"><i class="bi bi-pinterest"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
      </div>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><a href="#">Sobre</a></li>
        <li class="list-inline-item"><a href="#">Contacto</a></li>
        <li class="list-inline-item"><a href="#">Termos</a></li>
        <li class="list-inline-item"><a href="#">Política de Privacidade</a></li>
      </ul>
      <p class="copyright">Talita Soares © 2023 Todos os Direitos Reservados.</p>
    </footer>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script>
  function msg() {
    alert("Sua mensagem foi enviada com sucesso!");
  }
  $('.menu-mobile i').click(function () {
    $('.menu-mobile').find('ul').slideToggle();
  })
</script>
</body>

</html>
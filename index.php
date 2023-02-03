<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@200;400;500;700&display=swap" rel="stylesheet">
    <title>Talita Soares - Tema</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <img src="./image/LOGO-ICONE.png" alt="logo">
                </div>
                <div>
                    <ul class="menu-desktop">
                        <li> <a href="">Home</a></li>
                        <li> <a href="">Sobre</a></li>
                        <li> <a href="">Contacto</a></li>
                    </ul>
                </div>

            </header>

            <div class="clear">
            </div>
            <br>
            <br>

            <div class="w50 foto-principal">
                <h2>A melhor loja de moda infântil</h2>
                <p>Vista-se bem, vista Maria's Kids</p>
                <a target="_blank" href="">Ver modelos</a>
            </div>
            <div class="w50">
                <img src="./image/LOGOTIPO.png" alt="foto-principal">
            </div>
            <div class="clear">
            </div>
        </div>
    </section>
    <section>
        <div class="slider">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                </svg>
            </div>
            <div class="center">
            </div>
    </section>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/slick.min.js"></script>
    <script type="text/javascript">
        $('.autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
</body>

</html>
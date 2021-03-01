<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UndergroundGarage</title>
    <link rel="icon" type="favicon/x-icon" href="img/logo_undergrondgarage/logo_UG_BLANCO.png" style="width: 150px;">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

</head>

<body>
    <!-- INICIO DE CABECERA ----->
    <header id="header">
        <!-- <div class="grid-main">



            <div id="twiter">
                <a href="https://www.instagram.com/undergroundgaragegaby/" class='icono'>
                    <img id="insta"
                        src="img/kisspng-computer-icons-logo-instagram-blog-akita-5b2ffdee6d0502.8875915015298718544466.png"
                        alt="">
                </a>
            </div>




            <div id='facebook'>
                <a href="https://www.facebook.com/gabriel.ruedamartinez" class="icons blue icono">f</a>

            </div>



            <div id='youtube' class="icono">
                <a href="https://www.youtube.com/channel/UCf2e80fYsMbtwfEe6sQNXwQ" class="icons red icono">y</a>

            </div>



            <div class="site-description">
                <a href=" https://api.whatsapp.com/send?phone=34644640264" class='icono'>
                    <img src="img/whatsapp.png" alt="">


                </a>
            </div>

        </div> -->

        <div id="logo">
            <span class="gear">S</span>
            <img id='imagen-logo' src="img/logo_undergrondgarage/logo_blanco_2.png" alt="">
        </div>
        <!-- <div class="clearfix"></div> -->
        <nav id="menu">



            <ul>

                <li><a href="pag.php">INICIO</a></li>
                <li><a href="#sobre-nosotros">NOSOTROS</a></li>
                <!-- <li><a href="">BLOG</a></li>
                <li><a href="">FORMACION</a></li> -->
                <li><a href="#formulario">CONTACTO</a></li>
            </ul>
        </nav>


    </header>
    <!-- FIN DE LA CABECERA -------->
    <div class="wasap">
        <div class='iconos' id="twiter" >
            <a href="https://www.instagram.com/undergroundgaragegaby/" class='icono'>
                <img id="insta"
                    src="img/kisspng-computer-icons-logo-instagram-blog-akita-5b2ffdee6d0502.8875915015298718544466.png"
                    alt="">
            </a>
        </div>




        <div class='iconos' id='facebook' >
            <a href="https://www.facebook.com/gabriel.ruedamartinez" class="icons blue icono"><img src="img/584ac2d03ac3a570f94a666d.png" alt=""></img></a>

        </div>



        <div class='iconos' id='youtube' >
            <a href="https://www.youtube.com/channel/UCf2e80fYsMbtwfEe6sQNXwQ" class="icons red icono"><img src="img/youtube.png" alt=""></img></a>

        </div>



        <div class='iconos' id="wasapp" >
            <a href=" https://api.whatsapp.com/send?phone=34644640264" class='icono'>
                <img src="img/whatsapp.png" alt="">


            </a>
        </div>

       




    </div>





    <section class="wrap">
        <section id="info">
            <!-- INICIO BANER -->
            <div id="baner">
                <h1>UNDERGROUNd GARAGE</h1>
            </div>


            <!-- INICIO TARGETAS -->
            <div id="cards">
                <div id="card">
                    <p class='icon'><img src="img/iconos card/pintura-horno.png" alt=""></p>
                    <h2 class="category">Trabajo de chapa y pintura</h2>
                    <p class='description'>Underground Garage cumple con los requisitos más exigentes homologados por
                        nuestra marca para poder ofrecer la máxima garantía de calidad.
                    </p>
                </div>
                <div id="card">
                    <p class='icon'><img src="img/iconos card/ensamblaje.png" alt=""></p>
                    <h2 class="category">Mecánica en general</h2>
                    <p class='description'>Diagnóstico y reparación de averías generadas en cualquiera de las diferentes
                        partes del automóvil: motor, sistema de suspensión , dirección , frenado, transmisión, etc.</p>
                </div>
                <div id="card">
                    <p class='icon'><img src="img/iconos card/montajes.png" alt=""></p>
                    <h2 class="category">Pre ITV, neumáticos y mucho más</h2>
                    <p class='description'>En Underground Garage realizamos el servicio de Pre-ITV para que pases tu
                        inspección tecnica sin problemas.</p>
                </div>
            </div>

            <!-- FIN DE TARGETAS -->
            <!-- FIN BANER -->
            <!-- imagen piuntura -->
        </section>
        <div class="clearfix"></div>


    </section>

    <!-- SOBRE NOSOTROS -->
    <div class="sobre-nosotros" id="sobre-nosotros">
        <div class="contenido">
            <h1>TU TALLER DE CHAPA Y PINTURA EN GRANADA</h1>
            <p><strong>Underground Garage</strong> cumple con los requisitos más exigentes homologados por nuestra marca
                para poder ofrecer
                la máxima garantía de calidad. Llevamos trabajando en este sector desde el año 2013, y con más de 10
                años de
                experiencia trabajamos para ofrecerles el mejor servicio a nuestros clientes.</p>
        </div>
        <div id="imagen-pintura">
            <img src="img/imagenes de talleres/chapa-y-pintura.jpg" alt="">
        </div>
    </div>
    <section id="formulario">
        <form action="pag.php" method='POST' >
            <div class="contenido">
                <h1>Contacta con nosotros</h1>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Numero de telefono</label>
                <input type="number" class="form-control" name='telefono' id="telefono" placeholder="Telefono">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="nombre@ejemplo.com">
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <textarea class="form-control" name='asunto' id="asunto" rows="3"></textarea>
            </div>
            <input class="btn btn-primary" type="submit"></input>
        </form>
    </section>
    <!-- INICIO DEL FOOTER -->
    <div class="clearfix"></div>
    <footer id="footer">

        <div class='wrap'>
            <div id="menu_footer">
                <h5>MENU</h5>
                <ul>
                    <li><a href="">INICIO</a></li>
                    <li><a href="#sobre-nosotros">SOBRE NOSOTROS</a></li>
                    <!-- <li><a href="">FORMACION</a></li> -->
                    <li><a href="">CONTACTO</a></li>

                </ul>
            </div>
            <div id="location">
                <h5>¿Donde estamos?</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3176.863297086594!2d-3.642246!3d37.22722!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1614549505921!5m2!1ses!2ses"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>

            </div>

            <div id="info">

                <!-- <p><img id="img" src="./img/logo_undergrondgarage/logo_circulo_blanco.png"
                        alt="Creado por html5 y css"></p> -->
                <p>
                <ul>
                    <li>
                        Calle baza 12 h

                    </li>
                    <li>

                        Albolote 18220 polígono juncaril

                    <li>

                        Granada

                    </li>
                    <li>

                        Tlf 644640264

                    </li>
                    <li>

                        Horario de mañanas 9:00 a 14:00

                    </li>
                    <li>

                        Horario de tarde 15:00 a 18:00
                    </li>
                </ul>
                </p>
            </div>
            <div id="optimizado">
                <h5>Optimizado para</h5>
                <p>
                    <a href=""><img src="./img/firefox-icon.png" alt="Firefox"></img></a>
                    <a href=""><img src="./img/chrome.png" alt="Chrome"></img></a>
                    <a href=""><img src="./img/Opera_256x256.png" alt="Opera"></img></a>
                    <a href=""><img src="./img/ios.png" alt="ios"></img></a>
                    <a href=""><img src="./img/android.png" alt="android"></img></a>
                </p>
            </div>
            <div id="autor">
                <h5>Autor</h5>
                <p>Copyright &copy; Jose Manuel Rueda</p>
            </div>


        </div>

    </footer>
    <!-- FIN DEL FOOTER -->
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/css/bootstrap.min.css"></script>
</body>

</html>
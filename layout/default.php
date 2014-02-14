<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es">
    <head> 

        <title><?php echo $title ?></title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="author" content="juan2ramos" />       
        <meta name="description" content="Lemur" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />

        <link rel="shortcut icon" href="./favicon.ico" />
        <script src="js/prefixfree.min.js"></script>
        <!-- Estilos -->

        <link rel="stylesheet" href="css/normalize.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css" />        
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />


        
    </head>
    <body>
        <div class="wrapper">
            <header>
                <figure id="logo">
                    <a href="categorias"><img src="images/logo.png" /></a>
                </figure>
                <div id="contend-form">
                    <a href="#" id="img-registrar"></a>
                    <a href="#" id="img-ingresar"></a>
        
                    <form>
                        <input type="text" placeholder="Buscar">
                        <input type="submit" value="">
                    </form>
                    <div id="header-info">
                        <div id="hours">
                        </div>
                        <div id="user-info">
                            <p>Usuario</p>
                            <a href="#">
                                <span id="engranaje"></span>
                            </a>
                            <figure id="user">
                                <img src="images/user.png" />
                            </figure>
                        </div>    
                    </div>
                     
                </div>
            </header>
            <nav>                
                <ul>
                    <li>
                        <a href="sube-tu-idea" id="sube">                           
                            <p>Sube tu idea</p>
                        </a>
                    </li>
                    <li>
                        <a href="categorias" id="vota">                           
                            <p>Vota por una idea</p>
                        </a>
                    </li>
                    <li>
                        <a href="preguntas" id="preguntas">
                            <p>Tienes Preguntas?</p>                           
                        </a>
                    </li>
                    <li>
                        <a href="http://store.lemurstudio.com/" id="productos">    
                            <p>Productos para ti</p>                           
                        </a>
                    </li>
                    <li>
                        <a href="contacto" id="contacto">                           
                           <p>Contáctanos</p>
                        </a>
                    </li>
                    <li>
                        <a href="servicios" id="servicios">                           
                            <p>Servicios</p>
                        </a>
                    </li>
                    <li>
                        <a href="trabaja-en-lemur" id="trabaja">
                            <p>Trabaja en Lemur</p>                           
                        </a>                        
                    </li>
                </ul>                
            </nav> 
            <section id="contend" >               
                <?php require_once $fileName; ?>
           </section>
            <ul id="network">
                    <li>
                        <a href="#"><img src="images/signo.png"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/facebook.png"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/twitter.png"></a>
                    </li>
            </ul> 
        </div>
        <footer>
                <p>
                    ®2013 Todos los Derechos Reservados Lemur Studio 
                    <a href="mailto:info@lemurstudio.com.co" >info@lemurstudio.com.co</a> 
                    - Desarrollado por:                     
                </p> 
                <a href="http://mi-martinez.com/" target="_blank" title="Diseño Web">
                    <img src="images/logomim.png" alt="mi-martinez.com" >
                </a>
        </footer>
    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>

      $("#contend").mCustomScrollbar({
              scrollButtons:{
                enable:true
              }
            });
    </script>
    </body>


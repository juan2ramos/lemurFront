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
            <!-- Header -->
            <header>
                <figure id="logo">
                    <a href="categorias"><img src="images/logo.png" /></a>
                </figure>
                <div id="contend-form">
                    <a href="#" id="img-registrar" class="popup-link"></a>
                    <a href="#" id="img-ingresar" class="popup-link"></a>
        
                    <form>
                        <input type="text" placeholder="Buscar">
                        <input type="submit" value="">
                    </form>
                    <div id="header-info">
                        <?php if ($url == "vota-por-una-idea" || $url == "detalle-idea"): 
                            $modify = "";
                        ?>    
                            <img src="images/cronometro.png" class="img-cronos">
                        <?php endif;?>
                        <div id="hours">
                            <?php if ($url == "vota-por-una-idea" || $url == "detalle-idea") :?>
                            <dl>
                                <div class="dt">
                                    <dt>días</dt>
                                    <dd> 12<span>:</span></dd> 
                                </div>
                                <div class="dt">
                                    <dt>horas</dt>
                                    <dd>08<span>:</span></dd> 
                                </div>    
                                <div class="dt">    
                                    <dt>min.</dt>
                                    <dd>35<span>:</span></dd> 
                                </div>    
                                <div class="dt">    
                                <dt>seg.</dt>
                                <dd>55</dd> 
                            </dl>
                            <?php endif;?>
                        </div>
                        <div id="user-info" class="<?php echo $modify;?>">
                            <p>Usuario</p>
                            <a href="perfil">
                                <span id="engranaje"></span>
                            </a>
                            <figure id="user">
                                <img src="images/user.png" />
                            </figure>
                        </div>    
                    </div>
                     
                </div>
            </header>
            <!-- nav -->
            <nav class="<?php echo $active;?>">                
                <ul>
                    <li class="sube-class">
                        <a href="sube-tu-idea" id="sube">                           
                            <p>Sube tu idea</p>
                        </a>
                    </li>
                    <li class="categorias-class">
                        <a href="categorias" id="vota">                           
                            <p>Vota por una idea</p>
                        </a>
                    </li>
                    <li class="preguntas-class">
                        <a href="preguntas" id="preguntas">
                            <p>Tienes Preguntas?</p>                           
                        </a>
                    </li>
                    <li>
                        <a href="http://store.lemurstudio.com/" id="productos">    
                            <p>Productos para ti</p>                           
                        </a>
                    </li>
                    <li class="contacto-class">
                        <a href="contacto" id="contacto">                           
                           <p>Contáctanos</p>
                        </a>
                    </li>
                    <li class="servicios-class">
                        <a href="servicios" id="servicios">                           
                            <p>Servicios</p>
                        </a>
                    </li>
                    <li class="trabaja-class">
                        <a href="trabaja-en-lemur" id="trabaja">
                            <p>Trabaja en Lemur</p>                           
                        </a>                        
                    </li>
                </ul>                
            </nav> 
            <!-- contend -->
            <section id="contend" >               
                <?php require_once $fileName; ?>
           </section>
            <ul id="network">
                    <li>
                        <a href="#" id="about"><img src="images/signo.png"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/facebook.png"></a>
                    </li>
                    <li>
                        <a href="#" ><img src="images/twitter.png"></a>
                    </li>
            </ul> 
        </div>
        <!-- footer -->
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
        <!-- popUp -->
        <div class="popUp-container">
            <section id="popUp-contend">
                <div class="close">
                    <img src="images/close2.png">
                </div>
                <div id="ingresa-cuenta" class="hidden">
                    <h2>Ingresa a tu Cuenta</h2>
                    <form>
                        <div class="form">
                            <label>Correo electrónico:<span>*</span></label>
                            <input type="text" >
                            <label>Contraseña:<span>*</span></label>
                            <input type="text" >  
                            <a href="#">¿Olvidaste tu contraseña?</a>                  
                        </div>
                        <div class="form form-net"> 
                            <p>Ingresa con</p>
                            <ul>
                                <li>
                                    <a href="#"><img src="images/facebook.png"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/twitter.png"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/google_plus.png"></a>
                                </li>
                            </ul>
                            <input type="submit" value="Ingresa">
                        </div>
                    </form>
                </div>
                <div id="registra-cuenta" class="hidden">
                    <h2>Regístrate</h2>
                    <form>
                        <div class="form">
                            <label>Nombre:<span>*</span></label>
                            <input type="text" >
                            <label>Apellidos:<span>*</span></label>
                            <input type="text" >
                            <label>Correo electrónico:<span>*</span></label>
                            <input type="text" >
                            <label>contraseña:<span>*</span></label>
                            <input type="text" >   
                            <p class="term">
                                Al crear tu cuenta aceptas los 
                                <a href="terminos-y-condiciones"> terminos y condiciones.</a>  
                            </p>                
                        </div>
                        <div class="form form-net"> 
                            <p>Registrate con</p>
                            <ul>
                                <li>
                                    <a href="#"><img src="images/facebook.png"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/twitter.png"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/google_plus.png"></a>
                                </li>
                            </ul>
                            <input type="submit" value="Registrate">
                        </div>
                    </form>
                </div>
                <div id="contend-about" class="hidden">
                    <h1>Lemur Studio</h1>
                    <h3>Sobre nosotros</h3>
                    <p>En Lemur Studio estamos continuamente en la tarea de dar a conocer cada vez más el Diseño en Colombia, mostrar su importancia en una sociedad y cómo éste puede ayudarla en gran manera. Es así como grandes países desarrollados como Alemanía, Suiza y otros, se basan en el Diseño, el desarrollo y la innovación como motor de desarrollo y progreso de su país.</p>
                    <p>En Lemur Studio, y con éste proyecto queremos ayudar a la sociedad a diseñar, producir y comercializar las ideas de producto que tienen pero que por alguna  razón no las han podido hacer realidad, retribuyéndoles económicamente por ello, dándoles a conocer el diseño y haciéndolos parte de él.</p>
                    <div id="images">
                        <img src="images/pajaro.png">
                        <img src="images/pajaro2.png">
                        <img src="images/gato.png">
                    </div>    
                    <p>Al igual que muchas de las empresas más innovadoras, Lemur Studio tiene la visión de diseñar desde la perspectiva del usuario y de manera participativa, esto ha inspirado y convencido a diversos clientes y les da la confianza para llegar a Lemur Studio, en donde constantemente les proporcionamos experiencias extraordinarias, que se traducen en el retorno de su inversión, ya que sin importar su tamaño, todos nuestros clientes son igual de importantes y nuestro objetivo es darles soluciones que lleguen más allá de sus expectativas.</p>
                    <p>Nuestro trabajo, no es un trabajo cualquiera, es un trabajo en donde nos mueve la pasión, nos divertimos y disfrutamos haciéndolo, razón por la cual podemos prometer resultados excelentes.</p>
                    <p>“La única manera de hacer un gran trabajo es amar lo que se hace”<br>
                        Steve Jobs.</p>
                </div>
                <div id="popUp-detail" class="hidden">
                    <figure>
                        
                        <img src="images/detalle_idea.jpg">
                        <div id="prev"><</div>
                        <div id="next">></div>
                    </figure>
                </div>
            </section>
        </div>
        

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


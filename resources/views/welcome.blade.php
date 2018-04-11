<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Corporativo de empresas de servicios especializados en el sector Trasportes del Perú.">
        <meta name="keywords" content="brevete, tramite, aprender a manejar, licencia de conducir">

        <link rel="stylesheet" type="text/css" href="{{asset('css/landing/jquery.bxslider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/landing/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/landing/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/landing/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/landing/style.css')}}">

        <title>Grupo Car</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    </head>
    <body>
        <div class="loader"></div>
        <div id="myDiv">
            <!--HEADER-->
            <div class="header">
                <div class="bg-color">
                    <header id="main-header">
                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!--<a class="navbar-brand" href="#">Ba<span class="logo-dec">ker</span></a>-->
                                    <img src="{{asset('images/landing/logo.png')}}" alt="" height="65px">
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#main-header">Inicio</a></li>
                                        <li class=""><a href="#service">¿Quiénes Somos?</a></li>
                                        <li class=""><a href="#portfolio">Servicios</a></li>
                                        <!--<li class=""><a href="#testimonial">Clientes</a></li>-->
                                        <li class=""><a href="#contact">Contáctanos</a></li>
                                        <li class="btn-platform-container"><a  class="" href="{{url('/plataforma#/login')}}"><span class="btn-platform">Plataforma</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>
                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="banner-info text-center wow fadeIn delay-05s">
                                    <h1 class="bnr-title">Transporte, Tránsito y Seguridad Vial</h1>
                                    <h2 class="bnr-sub-title">Bienvenido a Grupo Car</h2>
                                    <p class="bnr-para">Somos un corporativo de empresas de servicios especializados en el sector transporte, contamos con profesionales altamanete capacitados y con amplia experiencia en materia de Transporte, Transito y Seguridad Vial</p>
                                    <div class="brn-btn">
                                        <a href="#feature" class="btn btn-download">Conócenos más!</a>
                                        <a href="#contact" class="btn btn-more">Hablemos</a>
                                    </div>
                                    <div class="overlay-detail">
                                        <a href="#feature"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ HEADER-->
            <!---->
            <section id="feature" class="section-padding wow fadeIn delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <img src="{{asset('images/landing/global.png')}}" height="100px">
                                </div>
                                <h3 class="pad-bt15">Global Car</h3>
                                <p>Escuela de conductores integral, dedicada principalmente a la enseñanza de manejo. Opera en las ciudades de Trujillo y Chiclayo.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <img src="{{asset('images/landing/sol.png')}}" height="100px">
                                </div>
                                <h3 class="pad-bt15">Sol Car</h3>
                                <p>Escuela de conductores integral, dedicada principalmente al trámite total de licencias de conducir. Opera en las ciudades de Trujillo, Chimbote, Piura y Tumbes.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <img src="{{asset('images/landing/selva.png')}}" height="100px">
                                </div>
                                <h3 class="pad-bt15">Selva Car</h3>
                                <p>Escuela de conductores integral que ofrece el trámite total de tu licencia de conducir en Pucallpa y Tarapoto.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <img src="{{asset('images/landing/medic.png')}}" height="100px">
                                </div>
                                <h3 class="pad-bt15">Global Medic</h3>
                                <p>Centro médico comprometido con devolver a la sociedad conductores capaces de enfrentar los desafios del tránsito peruano.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---->
            <!---->
            <section id="service" class="section-padding wow fadeInUp delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="service-title pad-bt15">Quiénes somos?</h2>
                            <p class="sub-title pad-bt15">Somos un corporativo de empresas de servicios especializados en el sector transporte, contamos con profesionales altamanete capacitados y con amplia experiencia en materia de Transporte, Transito y Seguridad Vial.</p>
                            <hr class="bottom-line">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>L</span>egales</h3>
                                <p>Autorizados por el Ministerio de Transportes y Comunicaciones que nos permite brindar servicios fiables.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>M</span>isión</h3>
                                <p>Formar y capacitar personas (conductores y peatones) comprometidos con la seguridad vial en el país, protegiendo como fin supremo: La vida.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>V</span>isión</h3>
                                <p>En el 2020 posicionado en la mente de nuestros clientes, como primera opción en materia de transporte, tránsito y seguridad vial.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>V</span>alores</h3>
                                <p>Calidez, compromiso y confianza.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---->
            <!---->
            <!---->
            <!---->
            <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="service-title pad-bt15">Nuestros servicios</h2>
                            <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
                            <hr class="bottom-line">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                            <figure>
                                <img src="{{asset('images/landing/manejo.jpg')}}" class="img-responsive">
                                <figcaption>
                                    <h2>Clases de Manejo</h2>
                                    <p>Nuestra misión original es la enseñanza de manejo, con mas de 10 años de experiencia en esa labor y satisfechos de los logros obtenidos por nuestros alumnos.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                            <figure>
                                <img src="{{asset('images/landing/motos.jpg')}}" class="img-responsive">
                                <figcaption>
                                    <h2>Capacitacion y Evaluacion para vehículos menores.</h2>
                                    <p>Estamos autorizados por el MTC para capacitar, evaluar y certificar en la obtención de la Licencia de Conducir, para vehículos menores.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                            <figure>
                                <img src="{{asset('images/landing/port03.jpg')}}" class="img-responsive">
                                <figcaption>
                                    <h2>Asesoramiento Empresarial</h2>
                                    <p>Despues de más de 10 años en el rubro del asesoramiento legal empresarial, mantenemos intacto nuestro compomiso con la necesidades de nuestros clientes. Aseguramos la calidad.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                            <figure>
                                <img src="{{asset('images/landing/tramite.jpg')}}" class="img-responsive">
                                <figcaption>
                                    <h2>Gestión total en el trámite de Licencia de Conducir.</h2>
                                    <p>Autorizados por el MTC para capacitar, evaluar y certificar en la obtencion de la Licencia de Conducir en todas las categorias: AI, AIIa, AIIb, AIIIa, AIIIb, AIIIC.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                            <figure>
                                <img src="{{asset('images/landing/port05.jpg')}}" class="img-responsive">
                                <figcaption>
                                    <h2>Capacitacion y entrenamiento</h2>
                                    <p>Brindamos servicios corporativos en materia de: Reglamento Nacional de Transito, Seguridad Vial, Transporte de Mercancías, etc.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                            <figure>
                                <img src="{{asset('images/landing/port06.jpg')}}" class="img-responsive">
                                <figcaption>
                                    <h2>Manejo de 4x4 y Vehículos Pesados</h2>
                                    <p>Enseñanza específica del dominio de manejo de estos vehículos, enfrentando los desafíos que implican el tamaño y los liímites que estos vehículos tienen.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!---->
            <!---->
            <!--<section id="testimonial" class="wow fadeInUp delay-05s">
              <div class="bg-testicolor">
                <div class="container section-padding">
                  <div class="row">
                    <div class="testimonial-item">
                      <ul class="bxslider">
                        <li>
                          <blockquote>
                            <img src="img/thumb.png" class="img-responsive">
                            <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another. </p>
                          </blockquote>
                          <small>Shaun Paul, Client</small>
                        </li>
                        <li>
                          <blockquote>
                            <img src="img/thumb.png" class="img-responsive">
                            <p>So here is us, on the raggedy edge. Don't push me, and I won't push you. </p>
                          </blockquote>
                          <small>Marry Smith, Client</small>
                        </li>
                        <li>
                          <blockquote>
                            <img src="img/thumb.png" class="img-responsive">
                            <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another.</p>
                          </blockquote>
                          <small>Vivek Singh, Client</small>
                        </li>
                        <li>
                          <blockquote>
                            <img src="img/thumb.png" class="img-responsive">
                            <p>So here is us, on the raggedy edge. Don't push me, and I won't push you.</p>
                          </blockquote>
                          <small>John Doe, Client</small>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>-->
            <!---->
            <section id="contact" class="section-padding wow fadeInUp delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center white">
                            <h2 class="service-title pad-bt15">Cantáctanos</h2>
                            <p class="sub-title pad-bt15">Trabajemos juntos, envíanos un mensaje a traves de nuestro formulario<br>o a través de nuestros médios de contacto.</p>
                            <hr class="bottom-line white-bg">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="loction-info white">
                                <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Av. América Oeste 580, Los Cedros<br>Trujillo, Trux 13006</p>
                                <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>atencion@grupocar.pe</p>
                                <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>999 444 009</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                <form action="" method="post" role="form" class="contactForm">
                                    <div class="col-md-6 padding-right-zero">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Please enter a valid email" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">ENVIAR</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---->
            <!---->
            <footer id="footer">
                <div class="container">
                    <div class="row text-center">
                        <p>&copy; Baker Theme. Todos los derechos reservados.</p>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
                            -->
                            Desarrollado por el Equipo de TI, Grupocar.</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!---->
        </div>
        <script src="{{asset('js/landing/jquery.min.js')}}"></script>
        <script src="{{asset('js/landing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('js/landing/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/landing/wow.js')}}"></script>
        <script src="{{asset('js/landing/jquery.bxslider.min.js')}}"></script>
        <script src="{{asset('js/landing/custom.js')}}"></script>
        <script src="{{asset('contactform/contactform.js')}}"></script>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="blueberry.mx" />
    <meta name="robots" content="index,follow" />
    <script src="https://kit.fontawesome.com/4514d9060c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css' />
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>AMTI</title>
</head>

<body>
     <a href="https://api.whatsapp.com/send?phone=525540324042" class="btn-flotante-whats" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-whatsapp icono-btn"></i>
    </a>
    <a href="tel:+525540324042" class="btn-flotante-phone" target="_blank" rel="noopener noreferrer">
        <i class="fa-solid fa-phone icono-btn"></i>
    </a>
    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "109863591904790");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
     <header id="header" class="background-orange py-3">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('front/img/logo-white.png') }}" alt="AMTI" class="img-fluid" width="70%"/>
                </a>
                <div class="">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="d-none d-sm-none d-md-block">
                                <div class=" py-3">
                                    <div class="mx-4">
                                        <a href=" tel:+525540324042" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                            <h3 class="oRegular h6"><b class="oExtraBold">¡Contáctanos hoy mismo!:</b>
                                                55 4032 4042</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item  pt-2">
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-block d-sm-block d-md-none">
            <div class=" py-3">
                <div class="mx-4">
                    <a href=" tel:+525540324042" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                        <h3 class="oRegular h6"><b class="oExtraBold">¡Contáctanos hoy mismo!:</b> 55 4032 4042</h3>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- MENU -->
    <div class="container-fluid p-0 background-orange" id="menu">
        <div class="bg-continent">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone margin-top-img">
                    <div class="d-flex justify-content-center my-4">
                        <img width="300" src="{{ asset('front/img/menu_1.png') }}" alt="AMTI"
                            class="img-fluid p-2" />
                        <img width="300" src="{{ asset('front/img/menu_2.png') }}" alt="AMTI"
                            class="img-fluid p-2" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                    <div class="container">
                        <div class="row">
                            <div class="text-end my-3 me-5">
                                <i class="fa-solid fa-xmark" id="close" onclick="cerrar()"></i>
                            </div>
                            <div class=" mx-4">
                                <div class="text-start">
                                    <img src="{{ asset('front/img/logo-white.png') }}" alt="AMTI"
                                        class="img-fluid logo-menu mt-3 mb-5" />
                                    <a href="#" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Inicio</h1>
                                    </a>
                                    <a href="#" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">¿Qué es?</h1>
                                    </a>
                                    <a href="#" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Cobertura</h1>
                                    </a>
                                    <a href="#" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">¿Por qué la necesito?</h1>
                                    </a>
                                    <a href="#" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Ventajas</h1>
                                    </a>
                                    <a href="#" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Contacto</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2 pt-5 ">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                <h4 class="oRegular h6 text-white">© 2022 AMTI, All rights reserved</h4>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <img src="{{ asset('front/img/materialized-negro.gif') }}"
                                    alt="Materialized by Blueberry" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
            <div class="text-center">
                <h1 class="bold">AVISO DE PRIVACIDAD</h1>
            </div>
            <div class="">
                <p class="regular h5">
                    El presente documento constituye el Aviso de Privacidad para efectos de lo dispuesto en la Ley Federal 
                    de Protección de Datos Personales en Posesión de los Particulares (la “LFPDP”) y las disposiciones que 
                    emanan de ella o se relacionan con la misma. Este Aviso de Privacidad (en lo sucesivo referido como “Aviso”) 
                    aplica a la información personal recopilada sobre el Titular por AMTI AUTO CLUB SA DE CV en su carácter de 
                    Responsable. El presente Aviso tiene por objeto la protección de tus datos personales, mediante su tratamiento 
                    legítimo, controlado e informado, a efecto de garantizar su privacidad, así como tu derecho a la autodeterminación
                    informativa.
                </p>
                <p class="regular h5">
                    Conforme al artículo 3, fracción V, de la Ley, se entiende por Datos Personales: cualquier 
                    información concerniente a una persona física identificada o identificable de conformidad a lo dispuesto por 
                    la fracción I del artículo 16 de la Ley, será el Responsable de tu información personal (Datos Personales).
                </p>
                <p class="bold h5">¿Qué información recopilamos?</p>
                <p class="regular h5">
                    El Responsable recolecta información que puede identificarle de manera razonable, por ejemplo, 
                    a título enunciativo mas no limitativo: su nombre y apellidos; fecha de nacimiento; dirección de 
                    correo electrónico, información general de su perfil.
                </p>
                <p class="bold h5">¿Cómo usamos o compartimos la información que recopilamos?</p>
                <p class="regular h5">
                    Al enviar vía correo electrónico tus datos personales a los diferentes representantes de AMTI AUTO CLUB SA DE CV y/o 
                    completar la solicitud en línea que aparece en la página, aceptas y autorizas a AMTI AUTO CLUB SA DE CV utilizar y 
                    tratar de forma automatizada tus datos personales e información suministrados, los cuales formarán parte de nuestra 
                    base de datos con la finalidad de usarlos en forma enunciativa, más no limitativa para: <br/>
                    identificarte, comunicarte, contactarte, enviarte información, actualizar nuestra base de datos, y promocionar 
                    todo el contenido artístico generado por AMTI AUTO CLUB SA DE CV.
                </p>
                <p class="regular h5">
                    AMTI como responsable del tratamiento de tus datos personales, está obligado a cumplir con los principios 
                    de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad 
                    tutelados en la Ley; por tal motivo con fundamento en los artículos 13 y 14 de la Ley, AMTI AUTO CLUB SA DE CV se 
                    compromete a guardar estricta confidencialidad de tus datos personales, así como a mantener las medidas de 
                    seguridad administrativas, técnicas y físicas que permitan protegerlos contra cualquier daño, pérdida, alteración, 
                    acceso o tratamiento no autorizado.
                </p>
                <p class="bold h5">¿Cómo contactar a nuestro Departamento de Datos Personales?</p>
                <p class="regular h5">
                    Para cualquier comunicación acerca de nuestro Aviso de Privacidad, por favor contacte a nuestro Departamento de Datos Personales: <a href="mailto:amtialejandra@gmail.com?Subject=Aviso%20De%20Privacidad" class="a_none_style">amtialejandra@gmail.com</a> 
                </p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
    </div>

    <footer class="background-orange text-black">
        <div class="container pt-5 pb-3 bg-continent">
            <div class="row">
                <div class="text-center mb-4">
                    <img src="{{ asset('front/img/logo-white.png') }}" alt="AMTI" class="img-fluid" />
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
                    <div class="contactUs">
                        <h5 class="rExtraBold h5">Contáctanos</h5>
                        <hr class="hr-footer">
                        <a href="tel:+52554032 9042" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-white">
                                <img src="{{ asset('front/img/icon-phone.png') }}" alt="Contact us +52 55 4032 9042"
                                    class="img-fluid icon-phone" />
                                +52 55 4032 9042
                            </h6>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=523318908942" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-white">
                                <img src="{{ asset('front/img/icon-whats.png') }}" alt="Contact us +52 55 4032 9042"
                                    class="img-fluid icon-whats" />
                                331 890 8942
                            </h6>
                        </a>
                        <a href="mailto:hello@amti-usa.mx" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-white">
                                <img src="{{ asset('front/img/icon-mail.png') }}" alt="Contact us hello@amti-usa.mx"
                                    class="img-fluid icon-mail" />
                                amti.internacional@gmail.com
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
                    <div class="">
                        <h6 class="rExtraBold h5">Menú</h6>
                        <hr class="hr-footer">
                        <a href="{{url('/')}}#header" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Inicio</h6>
                        </a>
                        <a href="{{url('/')}}#¿Que-es-un-carnet-para-conducir?" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">¿Qué es?</h6>
                        </a>
                        <a href="{{url('/')}}#Cobertura" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Cobertura </h6>
                        </a>
                        <a href="{{url('/')}}#¿Por-que-necesito-un-carnet?" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">¿Por qué la necesito?</h6>
                        </a>
                        <a href="{{url('/')}}#Ventajas" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Ventajas</h6>
                        </a>
                        <a href="{{url('/')}}#Contacto" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Contacto</h6>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 mb-4">
                    <div class="">
                        <h6 class="rExtraBold h5">Legal</h6>
                        <hr class="hr-footer">
                        <a href="{{ route('terms.index') }}" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Términos y Condiciones</h6>
                        </a>
                        <a href="{{ route('privacy.index') }}" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Políticas de privacidad</h6>
                        </a>
                        <a href="{{ route('cookies.index') }}" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Políticas de Cookies</h6>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 mb-4">
                    <div class="">
                        <h6 class="rExtraBold h5">Redes Sociales</h6>
                        <hr class="hr-footer">
                        <a href="https://www.facebook.com/profile.php?id=100086838573241" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('front/img/icon-fb.png') }}" alt="AMTI"
                                class="img-fluid icon-fb me-3" />
                        </a>
                        <a href="#" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('front/img/icon-ig.png') }}" alt="AMTI"
                                class="img-fluid icon-ig" />
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-2">
                            <h6 class="oRegular text-white">© 2022 AMTI, All rights reserved</h6>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-2">
                            <a href="https://blueberry.mx/" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('front/img/materialized-negro.gif') }}"
                                    alt="Materialized by Blueberry" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

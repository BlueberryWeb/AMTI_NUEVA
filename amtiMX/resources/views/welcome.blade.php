<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="despcription" content="Tramita tu licencia de conducir internacional  y conduce en el extranjero en más de 130 países."/>
    <meta name="keywords" content="Requisitos para el licencia de conducir internacional, Documento de identificación, Renta de carros, Permiso internacional, Países extranjeros, licencia de conducir internacional "/>
    <meta name="author" content="blueberry.mx" />
    <meta name="robots" content="index,follow" />
    <script src="https://kit.fontawesome.com/4514d9060c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css' />
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>AMTI | Asociación Mexicana de Turismo Internacional</title>
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
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('front/img/logo-azul-amti.png') }}" alt="AMTI" class="img-fluid" />
                </a>
                <div class="">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="d-none d-sm-none d-md-block">
                                <div class=" py-3">
                                    <div class="mx-4">
                                        <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style text-dark" target="_blank" rel="noopener noreferrer">
                                            <h3 class="oRegular h6"><b class="oExtraBold">¡Contáctanos hoy mismo!:</b>
                                                55 4032 4042</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item  pt-2">
                            <div class="text-center ms-3">
                                <i class="fa-solid fa-bars" onclick="menu()"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-block d-sm-block d-md-none">
            <div class=" py-3">
                <div class="mx-4">
                    <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style text-dark" target="_blank" rel="noopener noreferrer">
                        <h3 class="oRegular h6"><b class="oExtraBold">¡Contáctanos hoy mismo!:</b> 55 4032 4042</h3>
                    </a>
                </div>
            </div>
        </div>
        <!-- TRAVEL THE WORLD WITHOUT LIMITS -->
        <div class="bg-index py-1 mb-5">
            <div data-aos="fade-down" data-aos-delay="500" data-aos-duration="1400" class="container">
                <div class="row">
                    <div class="text-center txt-index">
                        <h1 class="regular display-3 line-height-header">Recorre el mundo en carro <br>
                            <span class="rExtraBold text-orange-header">sin límites</span>
                        </h1>
                        <h3 class="regular mt-5">Licencia de conducir internacional</h3>
                    </div>
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
                                    <a href="#header" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Inicio</h1>
                                    </a>
                                    <a href="#¿Que-es-un-licencia-para-conducir?" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">¿Qué es?</h1>
                                    </a>
                                    <a href="#Cobertura" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Cobertura</h1>
                                    </a>
                                    <a href="#¿Por-que-necesito-un-licencia?" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">¿Por qué la necesito?</h1>
                                    </a>
                                    <a href="#Ventajas" class="a_none_style text-black">
                                        <h1 class="rExtraBold mb-4">Ventajas</h1>
                                    </a>
                                    <a href="#Contacto" class="a_none_style text-black">
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

    {{-- QUIERES CONDUCIR EN EL EXTRANJERO --}}
    <div class="">
        <div class="bg-continent-first py-5">
            <div class="container py-1">
                <div class="row py-1">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                        <div class="mx-2 txt-idp">
                            <h1 class="rExtraBold display-4">¿Quieres conducir</h1>
                            <h1 class="text-orange rExtraBold display-4">en el extranjero?</h1>
                            <div class="d-md-block">
                                <p class="pt-2"> Nosotros nos encargamos de hacerlo posible.</p>
                                <p >En AMTI nos encargamos del trámite y expedición de
                                </p>
                                <p> permisos internacionales, para que puedas recorrer el </p>
                                <p>mundo sin preocupaciones.</p>
                            </div>

                            <div class="mt-5">
                                <button class="btn btn-primary btn-orange btn-know">
                                    <a href="#¿Que-es-un-licencia-para-conducir?" class="a_none_style text-white">
                                        <h6 class="pt-1">VER MÁS</h6>
                                    </a>
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- QUE ES UN licencia INTERNACIONAL -->
    <div class="background-orange" id="¿Que-es-un-licencia-para-conducir?">
        <div class="bg-continent py-5">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone">
                        <div class="mx-3">
                            <img src="{{ asset('front/img/international-driving.png') }}"
                                alt="INTERNATIONAL DRIVING PERMIT" class="img-fluid" />
                        </div>
                        <div class = "text-center my-3">
                            <h6 class ="oRegular">Este es un documento que funciona para identificarse en el extranjero pero no sustituye un documento oficial.</h6>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3 order-1-phone">
                        <div class="mx-5 txt-idp">
                            <h1 class="rExtraBold display-4">¿Qué es una</h1>
                            <h1 class="text-white rExtraBold display-5">licencia de conducir
                                internacional?</h1>
                            <div class="d-none d-sm-none d-md-block text-white">
                                <p class="pt-4 rExtraBold ">La licencia internacional de conducir es un documento oficial</p>
                                <p class="rExtraBold "> que funciona como una extensión de tu licencia nacional en </p>
                                <p>países extranjeros.</p>
                                <p>El International Driver's Document traduce tu licencia al idioma hablado y  </p>
                                <p>escrito en el país de destino para que pueda ser entendido allí. Cuenta</p>
                                <p>n más de 9 idiomas (portugués, chino, alemán, español, francés, inglés, </p>
                                <p>árabe, italiano y ruso). La licencia identificará al titular como la</p>
                                <p>persona física que cumple con los requisitos de la Convención de las Naciones</p>
                                <p>Unidas de 1949 sobre el tráfico por carretera ante las autoridades de</p>
                                <p>tránsito extranjeras y las agencias de alquiler de coches.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none text-white">
                                <p class="pt-4">La licencia internacional de conducir es un documento oficial que 
                                    funciona como una extensión de tu licencia nacional en países extranjeros.
                                    El International Driver's Document traduce tu licencia al idioma hablado y 
                                    escrito en el país de destino para que pueda ser entendido allí. Cuenta con un 
                                    folleto y una tarjeta de identificación no gubernamental traducida en más de 9 
                                    idiomas (portugués, chino, alemán, español, francés, inglés, árabe, italiano y ruso). 
                                    La licencia identificará al titular como la persona física que cumple con los requisitos 
                                    de la Convención de las Naciones Unidas de 1949 sobre el tráfico por carretera ante 
                                    las autoridades de tránsito extranjeras y las agencias de alquiler de coches.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RECORRE EL MUNDO -->
    <div class="container py-5" id="Cobertura">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="txt-coverage">
                    <h1 class="rExtraBold display-5">Recorre el mundo</h1>
                    <h1 class="rExtraBold display-5 txt-yellow">en más de</h1>
                    <h1 class="rExtraBold txt-blue display-1 text-orange">130 países</h1>
                </div>
                <div class="mt-5">
                    <button style="width: 230px" class="btn btn-primary btn-orange btn-know" data-bs-toggle="modal" data-bs-target="#Countrys">
                        <h6 class="pt-1 text-white oRegular">COBERTURA DE PAÍSES</h6>
                    </button>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
                <div class="d-flex justify-content-center container">
                    <video autoplay loop muted playsinline width="450"
                        src="{{ asset('front/img/mundo-02.mp4') }}"></video>
                </div>
            </div>
        </div>
    </div>

    <!-- INFO CARDS -->
    <div class="bg-card" id="¿Por-que-necesito-un-licencia?">
        <div class="bg-continent">
            <div class="row">
                <div class="col py-5">
                    <div class="d-flex justify-content-center">
                        <img width="90" src="{{ asset('front/img/icon-01.gif') }}" alt="" />
                    </div>
                    <div class="text-center">
                        <h2 class="rExtraBold ">¿Por qué necesito mi</h2>
                        <h2 class="text-white rExtraBold ">licencia internacional <br>
                            de conducir?</h2>
                    </div>
                    <div class="d-flex justify-content-center mt-5 container">
                        <div style="width: 70%" class="card-text text-white">
                            <p style="font-size: 20px"><strong>Una licencia de conducir internacional ayuda a 
                                asegurar tu viaje en el extranjero.</strong></p>

                            <p class="mt-4">Si planeas conducir en el extranjero, tu IDP te garantiza el alquiler de un 
                                auto y el poder manejar sin preocupaciones, ya que varios países te exigen cumplir con 
                                este requisito y las autoridades pueden solicitarte que se los muestres, de la misma 
                                manera que este documento está diseñado para romper la barrera del idioma y evitar 
                                cualquier tipo de dificultad que podría presentarse.</p>

                            <p class="mt-4">¿Y si no quiero rentar un carro? Aunque no quieras conducir ni rentar un 
                                carro durante tu próximo viaje en el extranjero, poseer tu licencia internacional de 
                                conducir como identificación te ofrece seguridad y tranquilidad ya que puede ser 
                                utilizado en circunstancias inesperadas.</p>
                        </div>
                    </div>
                </div>
                <div class="col py-5">
                    <div class="d-flex justify-content-center">
                        <img width="90" src="{{ asset('front/img/icon-02.gif') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="rExtraBold ">¿Cómo obtengo mi</h2>
                        <h2 class="text-white rExtraBold ">licencia internacional <br>
                            de conducir?</h2>
                    </div>
                    <div class="d-flex justify-content-center mt-5 container">
                        <img width="380" src="{{ asset('front/img/text_card.png') }}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RECORRE EL MUNDO SIN LIMITES -->
    <div class="container-fluid p-0">
        <div class="row p-0 mb-4">
            <div class="bg-travel">
                <img src="{{ asset('front/img/bg-travel-the-world.png') }}" alt="AMTI" class="img-fluid" />
                <div class="txt-bg-travel">
                    <h1 class="regular display-3 line-height-header">Recorre el mundo en carro <br>
                        <span class="rExtraBold text-orange-header">sin límites</span>
                    </h1>
                </div>
            </div>
        </div>
        <!-- PAISES -->
        <div class="container mt-5 mb-5">
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-3">
                    <div class="d-flex justify-content-end container">
                        <img width="230" src="{{ asset('front/img/call-to-action.gif') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-3">
                    <h1 class="rExtraBold display-5">¿Tienes alguna duda?</h1>
                    <h1 class="rExtraBold display-5 txt-yellow">Contáctanos</h1>
                    <a  href= "tel:+525540324042"class ="a_none_style" target="_blank" rel="noopener noreferrer">
                        <h1 class="display-5 txt-yellow">+52 55 4032 4042</h1>
                    </a>
                    
                </div>
            </div>
        </div>
        <br>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone">
                    <div class="mx-3">
                        <img src="{{ asset('front/img/licencia.png') }}"
                            alt="INTERNATIONAL DRIVING PERMIT" class="img-fluid" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3 order-1-phone">
                    <div class="mx-5 txt-idp">
                        <p style="font-size: 35px; font-weight: 1000" class="rExtraBold">Tu <span class="txt-yellow">licencia internacional</span></p>
                        <p style="font-size: 35px; font-weight: 1000" class="txt-yellow rExtraBold">de conducir <span class="text-black">incluye un folleto</span></p>
                        <p  style="font-size: 35px; font-weight: 1000"class="rExtraBold"><span class="text-orange">Traducido en 9 idiomas</span></p>
                        <div class=" text-black">
                            <ul>
                                <li> <p class="pt-4">Periodo de vigencia</p></li>
                                <li> <p class="">Vehículos que puedes conducir con tu licencia</p></li>
                                <li> <p class="">Tu fotografía</p></li>
                                <li> <p class="">Tu firma</p></li>
                                <li> <p class="">Tu nombre y apellidos</p></li>
                                <li> <p class="">Tu país de nacimiento</p></li>
                                <li> <p class="">Tu fecha de nacimiento</p></li>
                                <li> <p class="">Tu país de residencia</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- AMTI's PERIODOS -->
        <div class="container bg-continent mt-5 py-5">
            <div class="text-center">
                <h1 class="rExtraBold display-5">Nuestras vigencias <span class="txt-yellow">disponibles</span></h1>
            </div>
            <div class="row pt-2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="mx-4">
                        <div class="card-period p-4">
                            <div class="row">
                                <div class="col align-middle text-center">
                                    <img width="150" src="{{ asset('front/img/lic_icon.png') }}"
                                        alt="INTERNATIONAL DRIVING PERIOD"
                                        class="img-fluid icon-licence align-middle" />
                                </div>
                                <div class="col text-white text-center">
                                    <h1 class="oExtraBold display-1">5</h1>
                                    <h1 class="oRegular h2 mb-3">años</h1>
                                    <h6 class="oRegular">(Altamente recomendado)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="mx-4">
                        <div class="card-period p-4">
                            <div class="row">
                                <div class="col align-middle text-center">
                                    <img src="{{ asset('front/img/lic_icon.png') }}"
                                        alt="INTERNATIONAL DRIVING PERIOD"
                                        class="img-fluid icon-licence align-middle" />
                                </div>
                                <div class="col text-white text-center">
                                    <h1 class="oExtraBold display-1">3</h1>
                                    <h1 class="oRegular h2 mb-3">años</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="mx-4">
                        <div class="card-period p-4">
                            <div class="row">
                                <div class="col align-middle text-center">
                                    <img src="{{ asset('front/img/lic_icon.png') }}"
                                        alt="INTERNATIONAL DRIVING PERIOD"
                                        class="img-fluid icon-licence align-middle" />
                                </div>
                                <div class="col text-white text-center">
                                    <h1 class="oExtraBold display-1">1</h1>
                                    <h1 class="oRegular h2 mb-3">años</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- INFO COBERTURA --}}
    <div class="row" id="Ventajas">
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 bg-card container">
            <div class="bg-continent">
                <br>
                <div class="d-none d-sm-none d-md-block p-0 m-0 ">
                    <div class="container text-white">
                        <div class="d-flex justify-content-start mt-5">
                            <img style="margin-right: 45px; margin-top: 15px" width="80" height="80"
                                src="{{ asset('front/img/cobertura.gif') }}" alt="">
                            <p style="margin-left: 10px"><span class="rExtraBold h1">Cobertura</span>
                                <br class="d-none d-md-flex">
                                <span>Cobertura en más de 130 países</span>
                            </p>
                        </div>
                    </div>
                    <div class="container text-white">
                        <div class="d-flex justify-content-start mt-5">
                            <img style="margin-right: 45px; margin-top: 15px" width="80" height="80"
                                src="{{ asset('front/img/security.gif') }}" alt="">
                            <p style="margin-left: 9px"><span class="rExtraBold h1">Seguridad</span>
                                <br class="d-none d-md-flex">
                                <span>Tu licencia bajo todas las regulaciones gubernamentales. </span>
                            </p>
                        </div>
                    </div>
                    <div  class="container text-white">
                        <div class="d-flex justify-content-start mt-5 mb-5">
                            <img style="margin-right: 45px; margin-top: 15px" width="80" height="80"
                                src="{{ asset('front/img/soporte.gif') }}" alt="">
                            <p style="margin-left: 9px"><span class="rExtraBold h1">Soporte</span>
                                <br class="d-none d-md-flex">
                                <span>Ayuda y atención personalizada 24/7. </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-block d-sm-block d-md-none p-0 m-0 ">
                    <div style=";" class="container text-white">
                        <div class="d-flex justify-content-start mt-5">
                            <img style="margin-right: 45px; margin-top: 15px" width="80" height="80"
                                src="{{ asset('front/img/cobertura.gif') }}" alt="">
                            <p style="margin-left: 10px"><span class="rExtraBold h1">Cobertura</span>
                                <br class="d-none d-md-flex">
                                <span>Cobertura en más de 130 países</span>
                            </p>
                        </div>
                    </div>
                    <div style="" class="container text-white">
                        <div class="d-flex justify-content-start mt-5">
                            <img style="margin-right: 45px; margin-top: 15px" width="80" height="80"
                                src="{{ asset('front/img/security.gif') }}" alt="">
                            <p style="margin-left: 9px"><span class="rExtraBold h1">Seguridad</span>
                                <br class="d-none d-md-flex">
                                <span>Tu licencia bajo todas las regulaciones gubernamentales. </span>
                            </p>
                        </div>
                    </div>
                    <div style="" class="container text-white">
                        <div class="d-flex justify-content-start mt-5 mb-5">
                            <img style="margin-right: 45px; margin-top: 15px" width="80" height="80"
                                src="{{ asset('front/img/soporte.gif') }}" alt="">
                            <p style="margin-left: 9px"><span class="rExtraBold h1">Soporte</span>
                                <br class="d-none d-md-flex">
                                <span>Ayuda y atención personalizada 24/7.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
            <img src="{{ asset('front/img/fondo_amigos.png') }}" alt="" class="img-fluid">
        </div>
    </div>

    {{-- IMAGEN AMTI --}}
    <div class="bg-card-amti">
    </div>

    <!-- FORM -->
    <div class="container-fluid pt-5" id="Contacto">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 order-2-phone">
                <video autoplay loop muted playsinline width="530"
                    src="{{ asset('front/img/mundo-03.mp4') }}"></video>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone mb-3">
                <div class="mx-4 pt-2 txt-form mb-1">
                    <div class="mx-5 txt-form">
                        <h1 class="rExtraBold">¿Tienes alguna duda?</h1>
                        <h1 class="rExtraBold text-orange">Contáctanos</h1>
                        <a href="tel:+525540324042" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h1 class="oSemiBold txt-yellow">+52 55 4032 4042</h1>
                        </a>
                    </div>
                </div>
                <div class="mx-2">
                    <form method="POST" action="{{ route('contact.index') }}" class="form-help mx-5" onsubmit="miFuncion()">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Número de teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" required />
                        </div>
                        <div class=" mb-4">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="g-recaptcha" data-sitekey="6Ld6KPwiAAAAAMoRsqUTyy8scDbaIjwY6L1I7bPB"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-send">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                        
                          <script>
                            function miFuncion() {
                                var response = grecaptcha.getResponse();
            
                                if (response.length == 0) {
            
                                    // window.alert("Favor de llenar el captcha");
                                    Swal.fire({
                                        title: 'Error',
                                        text: 'El campo "No soy un robot" no esta seleccionado',
                                        icon: 'error',
                                        confirmButtonText: 'Ok',
                                        confirmButtonColor: '#000000',
                                    })
                                    event.preventDefault();
                                    // window.history.back();       
                                } else {
            
                                   
                                }
                            }
                        </script>
                    </form>
                </div>
            </div>
            {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div> --}}
        </div>
    </div>
     <!--MAPAS-->
     <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 col-sm-12 col-md-12 p-0 wp-animate"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.602300424461!2d-103.38726988477453!3d20.68575288618515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae6a7eaac583%3A0xd74281561fac35da!2sAv.%20Rub%C3%A9n%20Dar%C3%ADo%20586-int%208%2C%20Prados%20Providencia%2C%2044670%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1672783413926!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="GDL"></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.499280387915!2d-100.29534038469357!3d25.654738983685572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bfc7ddbd682b%3A0xa31c79106056c3a!2sPaseo%20Tec!5e0!3m2!1ses-419!2smx!4v1655838739756!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="MTY"></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5532611750164!2d-99.18586318479235!3d19.43169898688475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8acbaca9ea3%3A0x2f928866a33b0016!2sAv.%20Pdte.%20Masaryk%2061-piso%209-b%2C%20Polanco%2C%20Polanco%20V%20Secc%2C%20Miguel%20Hidalgo%2C%2011560%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1655838785537!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="CDMX"></iframe>
            </div>
            <div class="col-12 col-lg-5 col-sm-12 col-md-12 background-orange pt-5">
                <div class="bg-continent">
                    <div class="mx-5">
                        <div class="GDL mb-5 wp-animated" >
                            <h3 class="oBold" onclick="GDL()">
                                <img src="{{ asset('front/img/pointer.png') }}" alt="AMTI" class="img-fluid"/>
                                <i>SUCURSAL GUADALAJARA</i> 
                            </h3>
                            <div class="informes ms-5">
                                <p class="oRegular">Av. Rubén Darío #586 int.8, Lomas de Guevara, CP 44657 Guadalajara, Jal.</p>
                                <a href="https://api.whatsapp.com/send?phone=523327903393" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h6 class="oBold">33 2790 3393</h6>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h6 class="oBold">55 4032 4042</h6>
                                </a>
                            </div>
                        </div>
                        <div class="MTY mb-5 wp-animated">
                            <h3 class="oBold" onclick="MTY()">
                                <img src="{{ asset('front/img/pointer.png') }}" alt="AMTI" class="img-fluid"/>
                                <i>SUCURSAL MONTERREY</i> 
                            </h3>
                            <div class="informes ms-5">
                                <p class="oRegular">Av. Eugenio Garza Sada #2411 Local
                                    L69 (Plaza Paseo Tec) Col. Roma Sur
                                    CP 64700, Monterrey, Nuevo León</p>
                                <a href="https://api.whatsapp.com/send?phone=528132532915" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h6 class="oBold">81 3253 2915</h6>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h6 class="oBold">55 4032 4042</h6>
                                </a> 
                            </div>
                        </div>
                        <div class="CDMX mb-5 wp-animated" >
                            <h3 class="oBold" onclick="CDMX()">
                                <img src="{{ asset('front/img/pointer.png') }}" alt="AMTI" class="img-fluid"/>
                                <i>SUCURSAL CDMX</i>
                            </h3>
                            <div class="informes ms-5">
                                <p class="oRegular">Av. Presidente Masaryk #61, Piso 9
                                    Col. Polanco V secc, CP 11560, 
                                    Miguel Hidalgo, Ciudad de México</p>
                                <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h6 class="oBold">55 4032 4042</h6>
                                </a>
                                <a href="tel:5536891390" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h6 class="oBold">55 3689 1390</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <footer class="background-orange">
        <div class="container pt-5 pb-3 bg-continent">
            <div class="row">
                 <div class = "text-center my-3">
                    <h6 class ="oRegular">Este es un documento que funciona para identificarse en el extranjero pero no sustituye un documento oficial.</h6>
                </div>
                <div class="text-center mb-4">
                    <img src="{{ asset('front/img/logo-white.png') }}" alt="AMTI" class="img-fluid" />
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
                    <div class="contactUs">
                        <h5 class="rExtraBold h5">Contáctanos</h5>
                        <hr class="hr-footer">
                        <a href="https://api.whatsapp.com/send?phone=523327903393" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-white">
                                <img src="{{ asset('front/img/icon-phone.png') }}" alt="Contact us +52 55 4032 9042"
                                    class="img-fluid icon-phone" />
                                +52 33 2790 3393
                            </h6>
                        </a>
                        <a href="tel:+52554032 9042" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-white">
                                <img src="{{ asset('front/img/icon-whats.png') }}" alt="Contact us +52 55 4032 9042"
                                    class="img-fluid icon-whats" />
                                55 4032 4042
                            </h6>
                        </a>
                        <a href="mailto:amti.internacional@gmail.com" class="a_none_style" target="_blank" rel="noopener noreferrer" target="_blank" rel="noopener noreferrer">
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
                        <a href="#header" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Inicio</h6>
                        </a>
                        <a href="#¿Que-es-un-licencia-para-conducir?" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">¿Qué es?</h6>
                        </a>
                        <a href="#Cobertura" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Cobertura</h6>
                        </a>
                        <a href="#¿Por-que-necesito-un-licencia?" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">¿Por qué la necesito?</h6>
                        </a>
                        <a href="#Ventajas" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Ventajas</h6>
                        </a>
                        <a href="#Contacto" class="a_none_style">
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
                            <h6 class="oRegular text-white mb-3">Términos y concidiones</h6>
                        </a>
                        <a href="{{ route('privacy.index') }}" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Políticas de privacidad</h6>
                        </a>
                        <a href="{{ route('cookies.index') }}" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Políticas de cookies</h6>
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
                                <img src="{{ asset('front/img/materialized-blueberry.gif') }}"
                                    alt="Materialized by Blueberry" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
    </footer>
    <!-- MODAL COUNTRYS -->
    <div class="modal fade" id="Countrys" tabindex="-1" aria-labelledby="CountrysLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content bg-modal">
            <div class="modal-header">
                <div class="container-fluid p-0">
                    <div class="row p-0 header-modal">
                        <div class="col-6 col-sm-6-col-md-6 col-lg-6">
                            <img src="{{ asset('front/img/logo-white.png') }}" alt="AMTI" class="img-fluid logo-modal mb-4"/>
                            
                        </div>
                        <div class="col-6 col-sm-6-col-md-6 col-lg-6 p-0 complement">
                            <div class="text-end me-5">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <h1 class="rExtraBold">AMTI’s IDP <b class="txt-yellow">cobertura</b> </h1>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                            <div class="row">
                                <!-- A - I -->
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="A">
                                        <img src="{{ asset('front/img/icon-A.png') }}" alt="A" class="img-fluid icon-letter"/>
                                        <p>
                                            Arabia Saudita, Afganistán, Albania, Alemania, Algeria, Andorra, Angola, Antigua, Argentina, Armenia, Aruba, Australia, Austria.
                                        </p>
                                    </div>
                                    <div class="B">
                                        <img src="{{ asset('front/img/icon-B.png') }}" alt="B" class="img-fluid icon-letter"/>
                                        <p>
                                            Bahamas, Bangladesh, Barbados, Bielorrusia, Bélgica, Benin, Bolivia, Botswana, Brasil, Bulgaroa, Bután.
                                        </p>
                                    </div>
                                    <div class="C">
                                        <img src="{{ asset('front/img/icon-C.png') }}" alt="C" class="img-fluid icon-letter"/>
                                        <p>
                                            Camerún, Canadá, Chad, Chile, China, Chipre, Ciudad del Vaticano, Colombia, Comorros, Congo, Costa de Marfil, Costa Rica, Croacia, Cuba, Curacao.
                                        </p>
                                    </div>
                                    <div class="E">
                                        <img src="{{ asset('front/img/icon-E.png') }}" alt="E" class="img-fluid icon-letter"/>
                                        <p>
                                            Ecuador, Egipto, El Salvador, Emiratos Arabes, Eslovaquia, Eslovenia, España, Estados Unidos, Estonia.
                                        </p>
                                    </div>
                                <div class="F">
                                        <img src="{{ asset('front/img/icon-F.png') }}" alt="F" class="img-fluid icon-letter"/>
                                        <p>
                                            Fiji, Filipinas, Finlandia, Francia.
                                        </p>
                                    </div>
                                    <div class="G">
                                        <img src="{{ asset('front/img/icon-G.png') }}" alt="G" class="img-fluid icon-letter"/>
                                        <p>
                                            Gabon, Gambia, Georgia, Ghana, Gibraltar, Granada, Grecia Guernsey, Guinea, Guinea Ecuatorial, Guinea- Bissau, Guayana.
                                        </p>
                                    </div>
                                    <div class="H">
                                        <img src="{{ asset('front/img/icon-H.png') }}" alt="H" class="img-fluid icon-letter"/>
                                        <p>
                                            Haití, Holanda, Hong Kong, Hungría.
                                        </p>
                                    </div>
                                    <div class="I">
                                        <img src="{{ asset('front/img/icon-I.png') }}" alt="I" class="img-fluid icon-letter"/>
                                        <p>
                                            India, Indonecia, Irán, Irlanda, Isla de Cabo Verde, Islandia, Islas Caimán, Israel, Italia.
                                        </p>
                                    </div>
                                    <div class="J">
                                        <img src="{{ asset('front/img/icon-J.png') }}" alt="J" class="img-fluid icon-letter"/>
                                        <p> 
                                            Jamaica, Jersey, Jordania, Japón.
                                        </p>
                                    </div>
                                    <div class="K">
                                        <img src="{{ asset('front/img/icon-K.png') }}" alt="K" class="img-fluid icon-letter"/>
                                        <p>
                                            Kenia, Kuwait.
                                        </p>
                                    </div>
                                    <div class="L">
                                        <img src="{{ asset('front/img/icon-L.png') }}" alt="L" class="img-fluid icon-letter"/>
                                        <p>
                                            Laos, Liberia, Libia, Liechtenstein, Lituania, Luxemburgo.
                                        </p>
                                    </div>
                                      
                                </div>
                                <!-- J - Q -->
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="M">
                                        <img src="{{ asset('front/img/icon-M.png') }}" alt="M" class="img-fluid icon-letter"/>
                                        <p>
                                            Macao, Madagascar, Malasia, Malawi, Mali, Malta, Marruecos, Mauritania, México, Moldavia, Mónaco, Montserrat, Mozambique.
                                        </p>
                                    </div>
                                    <div class="N">
                                        <img src="{{ asset('front/img/icon-N.png') }}" alt="N" class="img-fluid icon-letter"/>
                                        <p>
                                            Nepal, Nicaragua, Nigeria, Noruega, Nueva Caledonia, Nueva Guinea, Nueva Zelanda.
                                        </p>
                                    </div>
                                    <div class="O">
                                        <img src="{{ asset('front/img/icon-O.png') }}" alt="O" class="img-fluid icon-letter"/>
                                        <p>
                                            Omán.
                                        </p>
                                    </div>
                                    <div class="P">
                                        <img src="{{ asset('front/img/icon-P.png') }}" alt="P" class="img-fluid icon-letter"/>
                                        <p>
                                            Panamá, Paquistan, Paraguay, Perú, Polinesia, Polinesia Francesa Polonia, Portugal.
                                        </p>
                                    </div>
                                    <div class="Q">
                                        <img src="{{ asset('front/img/icon-Q.png') }}" alt="Q" class="img-fluid icon-letter"/>
                                        <p>
                                            Qatar.
                                        </p>
                                    </div>
                                    <div class="R">
                                        <img src="{{ asset('front/img/icon-R.png') }}" alt="R" class="img-fluid icon-letter"/>
                                        <p>
                                            Reino Unido, Rep. Dominicana, República Checa, Rumania, Rusia, Ruanda.
                                        </p>
                                    </div>
                                    <div class="S">
                                        <img src="{{ asset('front/img/icon-S.png') }}" alt="S" class="img-fluid icon-letter"/>
                                        <p>
                                            San Marino, Santo Tomé, Senegal, Seychelles, Sierra Leona, Singapur, Siria, Sri Lanka, Sudáfrica, Sudán, Suecia, Suiza, Surinam, Swaziland.
                                        </p>
                                    </div>
                                    <div class="T">
                                        <img src="{{ asset('front/img/icon-T.png') }}" alt="T" class="img-fluid icon-letter"/>
                                        <p>
                                            Tailandia, Taiwan, Tajikistan, Tanzania, Togo, Trinidad y Tobago, Túnez, Turkmenistán, Turquía.
                                        </p>
                                    </div>
                                    <div class="U">
                                        <img src="{{ asset('front/img/icon-U.png') }}" alt="U" class="img-fluid icon-letter"/>
                                        <p>
                                            Ucrania, Uganda, Uruguay, Uzbekistán.
                                        </p>
                                    </div>
                                    <div class="V">
                                        <img src="{{ asset('front/img/icon-V.png') }}" alt="V" class="img-fluid icon-letter"/>
                                        <p>
                                            Venezuela, Vietnam.
                                        </p>
                                    </div>
                                    <div class="Y">
                                        <img src="{{ asset('front/img/icon-Y.png') }}" alt="Y" class="img-fluid icon-letter"/>
                                        <p>
                                            Yemen.
                                        </p>
                                    </div>
                                    <div class="Z">
                                        <img src="{{ asset('front/img/icon-Z.png') }}" alt="Z" class="img-fluid icon-letter"/>
                                        <p>
                                            Zambia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

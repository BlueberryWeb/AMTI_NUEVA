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
                <h1 class="bold">TÉRMINOS Y CONDICIONES</h1>
                <h6 class="regular">Términos y condiciones del servicio AMTI AUTO CLUB SA DE CV.</h6>
            </div>
            <div class="">
                <p class="bold h5">1. Introducción.</p>
                <p class="regular h5">
                    Esta página establece los "términos y condiciones" bajo los cuales usted puede utilizar AMTI AUTO CLUB SA DE CV por 
                    favor lea esta página cuidadosamente. Si no acepta los términos y condiciones establecidos aquí, 
                    no utilice este sitio de Internet ni este servicio.
                </p>
                <p class="bold h5">2. Aceptación de términos.</p>
                <p class="regular h5">
                    Al utilizar este sitio de Internet, usted acepta obligarse a éstos términos y condiciones. 
                    Los términos y condiciones pueden ser actualizados por AMTI AUTO CLUB SA DE CV en cualquier 
                    momento y sin previo aviso por lo que debe visitar ésta página periódicamente para consultar 
                    la versión más reciente de los términos y condiciones. Los términos "usted" y "usuario" según 
                    se utilizan aquí hacen referencia a todas las personas y/o entidades que acceden a este sitio de 
                    Internet por cualquier razón.
                </p>
                <p class="bold h5">3. Acuerdo Obligatorio.</p>
                <p class="regular h5">
                    Estos términos pueden ser cambiados periódicamente por AMTI AUTO CLUB SA DE CV los cuales 
                    forman un acuerdo obligatorio entre usted y AMTI AUTO CLUB SA DE CV. <br/>
                    El solo ingreso al portal le otorga al público en general o a quien lo navegue o use, la condición 
                    de usuario e implica la aceptación, plena e incondicional, de todas y cada una de las condiciones 
                    generales y particulares incluidas en estos términos de uso en la versión publicada por AMTI AUTO 
                    CLUB SA DE CV en el momento mismo en que el usuario acceda al portal. Cualquier modificación a los 
                    presentes términos de uso será realizada cuando AMTI AUTO CLUB SA DE CV lo considere apropiado, 
                    siendo exclusiva responsabilidad de el “usuario” asegurarse de tomar conocimiento de tales modificaciones.
                </p>
                <p class="bold h5">4. Descripción del Servicio.</p>
                <p class="regular h5">
                    Queda establecido que usted entiende y acepta que el servicio puede incluir ciertas comunicaciones de 
                    AMTI AUTO CLUB SA DE CV como mensajes administrativos y anuncios de servicio, éstas comunicaciones son 
                    consideradas como parte del servicio de AMTI AUTO CLUB SA DE CV y usted no puede excluir la recepción de 
                    dichas comunicaciones. El uso de la herramienta online denominada “https:// amti.mx//" de la compañía 
                    AMTI AUTO CLUB SA DE CV forma parte del servicio otorgado por AMTI AUTO CLUB SA DE CV y su uso se regirá 
                    bajo los términos del presente. La liberación de nuevos productos y propiedades, queda sujeta a éstos 
                    términos. Usted entiende y acuerda que los servicios mencionados anteriormente son proporcionados 
                    “como - es" y AMTI AUTO CLUB SA DE CV de cualquier comunicación o características de personalización. 
                    Si un usuario de AMTI AUTO CLUB SA DE CV desea dejar de recibir estás comunicaciones, el usuario puede 
                    hacer clic en la solicitud de remoción de envío, que se agrega al final de cada pieza de correo electrónico 
                    enviada.
                </p>
                <p class="bold h5">5. Otras Reglas Particulares de Uso del Sitio Web:</p>

                <p class="regular h5">
                    Usted representa, garantiza y acepta que usted no usará (o planeará, motivará o ayudará a otros a usar) el Sitio Web 
                    para cualquier otro propósito o que en cualquier manera esté prohibido por los términos aquí mencionados o los que 
                    sean aplicables por ley. Es su responsabilidad asegurar que usted use el Sitio Web de acuerdo a los términos aquí 
                    especificados.
                </p>
                <p class="bold h5">6. Reglas de Publicación. Conducta y Seguridad:</p>
                <p class="regular h5">
                    Usted acepta cumplir con las reglas de AMTI AUTO CLUB SA DE CV de Conducta y de Seguridad en este sitio Web. 
                    Usuarios que violen dichas reglas tendrán el uso y el acceso del sitio suspendido o cancelado a discreción 
                    exclusiva de AMTI AUTO CLUB SA DE CV.
                </p>
                <p class="h5 regular">
                    AMTI AUTO CLUB SA DE CV se reserva el derecho de cambiar estas reglas. <br/>
                    Las reglas de Conducta, Publicación y Seguridad son como se describe a continuación:
                </p>
                <p class="bold h5">6.1 General:</p>
                <p class="h5 regular">
                    La información de contacto de AMTI AUTO CLUB SA DE CV está listada en el Sitio Web. AMTI AUTO CLUB SA DE CV y 
                    sus agentes asociados no asumen responsabilidad de que el contenido sea apropiado o sea bajado fuera de la República Mexicana. 
                    El acceso al contenido del sitio de Internet puede no ser legal para ciertas personas o en ciertos países. Si usted tiene acceso 
                    al contenido del sitio de Internet desde fuera de la República Mexicana, lo hace a su propio riesgo y es responsable por 
                    el cumplimiento de las leyes dentro de su jurisdicción. El Usuario se compromete a utilizar el Sitio Web y los Servicios 
                    de conformidad con la ley, estas Condiciones Generales, las Condiciones Particulares aplicables, así como con la moral y 
                    buenas costumbres generalmente aceptadas y el orden público. <br/>
                    AMTI AUTO CLUB SA DE CV excluye cualquier responsabilidad por los daños y perjuicios de toda naturaleza que puedan deberse a 
                    los servicios prestados por terceros a través del Sitio Web, y en particular, aunque no de modo exclusivo por los daños y 
                    perjuicios que puedan deberse a el incumplimiento de la ley, la moral y las buenas costumbres generalmente aceptadas o de 
                    orden público como consecuencia de la prestación de servicios por terceros a través del Sitio Web; la infracción de los 
                    derechos de propiedad intelectual e industrial, de los secretos empresariales, de compromisos contractuales de cualquier clase, 
                    de los derechos al honor, a la intimidad personal y familiar y a la imagen de las personas, de los derechos de propiedad y 
                    de toda otra naturaleza pertenecientes a un tercero como consecuencia de la prestación de servicios por terceros a través del 
                    portal; la realización de actos de competencia desleal y publicidad ilícita como consecuencia de la prestación de servicios 
                    por terceros a través del portal, la falta de veracidad, exactitud, exhaustividad, pertinencia y/o actualidad de los contenidos 
                    transmitidos, difundidos, almacenados, recibidos, obtenidos, puestos a disposición o accesibles mediante los servicios prestados 
                    por terceros a través del portal; el incumplimiento, retraso en el cumplimiento, cumplimiento defectuosos o terminación por 
                    cualquier causa de las obligaciones contraídas por terceros y contratos realizados con terceros en relación o con motivo 
                    de la prestación de servicios a través del portal; los vicios y defectos de toda clase de los servicios prestados a través 
                    del portal. Usted no debe asignar o transferir sus obligaciones bajo estos términos, estas condiciones constituyen todo el 
                    contrato entre usted y la empresa con respecto al uso del sitio de Internet. AMTI AUTO CLUB SA DE CV se reserva el derecho a 
                    denegar o retirar el acceso al Portal y/o a los Servicios, en cualquier momento y sin necesidad de previo aviso, a aquellos 
                    usuarios que incumplan estas Condiciones Generales o las Condiciones Particulares que resulten de.
                </p>
                <p class="bold h5">6.2 Reglas de Conducta:</p>
                <p>
                <ul class="regular">
                    <li>
                        Usted no puede responder a publicaciones a nombre de otros usuarios de ninguna manera y para ningún otro propósito que 
                        el esperado (ejemplo, para aplicar al trabajo o para iniciar una discusión con referencia al trabajo). Comunicaciones 
                        solicitando el negocio del empleador están prohibidas.
                    </li>
                    <li>
                        Usted no puede enviar correos electrónicos comerciales a los usuarios.
                    </li>
                    <li>
                        Reporte publicaciones o conducta inapropiada a: <a
                            href="mailto:amtialejandra@gmail.com?Subject=Terminos%20Y%20Condiciones"
                            class="a_none_style">amtialejandra@gmail.com</a>
                    </li>
                    <li>
                        Usted no puede enviar correos electrónicos comerciales a los usuarios.
                    </li>
                    <li>
                        Reporte publicaciones o conducta inapropiada a: amtialejandra@gmail.com
                    </li>
                    <li>
                        Usted no puede borrar o revisar ningún material publicado por ninguna otra persona o entidad.
                    </li>
                    <li>
                        Si en cualquier momento durante el término del presente contrato AMTI AUTO CLUB SA DE CV se entera que usted lo 
                        ha engañado en cuanto a su práctica de negocios y/o servicios, y/o ha comprado servicios que no representan 
                        precisamente su negocio, AMTI AUTO CLUB SA DE CV se reserva el derecho de terminar el presente contrato y 
                        su uso de privilegios inmediatamente sin previa notificación.
                    </li>
                    <li>
                        AMTI AUTO CLUB SA DE CV no tiene obligación de monitorear la conducta de sus usuarios, pero se compromete a 
                        investigar y responder cuando se reporten violaciones a los términos aquí mencionados.
                    </li>
                </ul>
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
                        <a href="mailto:amti.internacional@gmail.com" class="a_none_style" target="_blank" rel="noopener noreferrer">
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
                            <h6 class="oRegular text-white mb-3">¿Qué es ?</h6>
                        </a>
                        <a href="{{url('/')}}#Cobertura" class="a_none_style">
                            <h6 class="oRegular text-white mb-3">Cobertura</h6>
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
                            <h6 class="oRegular text-white mb-3">Términos y condiciones</h6>
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

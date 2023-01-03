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
                                        <a href=" tel:+525540324042" class="a_none_style text-white"target="_blank" rel="noopener noreferrer" >
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
                <h1 class="bold">POLÍTICA DE COOKIES</h1>
                <h6 class="regular">Términos y condiciones del servicio AMTI AUTO CLUB SA DE CV.</h6>
            </div>
            <div class="">
                <p class="regular h5">
                   En AMTI AUTO CLUB SA DE CV creemos que hay que ser claros sobre el modo en que recabamos y utilizamos tus datos. 
                   Para ofrecer un mayor nivel de transparencia, esta Política proporciona información detallada sobre cómo y cuándo 
                   utilizamos cookies.
                </p>
                <p class="regular h5">
                    Esta Política de cookies se aplica a cualquier producto o servicio de AMTI AUTO CLUB SA DE CV asociado a esta política o que la incorpore por referencia.
                </p>
                <p class="bold h5">¿Utiliza AMTI AUTO CLUB SA DE CV. cookies?</p>
                <p class="regular h5">
                    Sí. Utilizamos cookies y otras tecnologías para garantizar que todos los usuarios de AMTI AUTO CLUB SA DE CV 
                    tengan la mejor experiencia posible. Las cookies nos ayudan a mantener tu cuenta segura. Si sigues utilizando 
                    nuestros servicios, estarás dando tu consentimiento para el uso de las cookies y de otras tecnologías similares 
                    para los fines que se describen en esta Política.
                </p>
                <p class="bold h5">¿Qué es una cookie?</p>
                <p class="regular h5">
                    Una cookie es un pequeño archivo colocado en tu dispositivo electrónico que habilita las funcionalidades de 
                    AMTI AUTO CLUB SA DE CV por ejemplo, las cookies nos permiten identificar tu dispositivo, ofrecerte acceso 
                    seguro a AMTI AUTO CLUB SA DE CV y a nuestros sitios en general, e incluso nos ayudan a saber si alguien intenta 
                    acceder a tu cuenta desde otro dispositivo. <br/>
                    Las cookies también te permiten compartir contenidos con facilidad en AMTI AUTO CLUB SA DE CV y nos ayudan a mostrarte anuncios relevantes para ti.
                </p>
                <p class="bold h5">¿Cuándo utiliza AMTI AUTO CLUB SA DE CV. cookies?</p>
                <p class="regular h5">
                    Utilizamos cookies en nuestros sitios web (“https:// amti.mx//“) y en las aplicaciones móviles. 
                    Cualquier navegador que visite estos sitios web recibirá cookies nuestras. También colocamos cookies 
                    en tu navegador cuando visitas sitios que no son de AMTI AUTO CLUB SA DE CV pero que albergan nuestros 
                    complementos (por ejemplo, el botón «Compartir» AMTI AUTO CLUB SA DE CV o etiquetas.)
                </p>
                <p class="bold h5">¿Qué tipo de cookies utiliza AMTI AUTO CLUB SA DE CV.?</p>
                <p class="regular h5">
                    Utilizamos dos tipos de cookies: persistentes y de sesión. <br/>
                    Una cookie persistente nos ayuda a reconocerte como usuario existente para que te resulte más sencillo volver a AMTI AUTO CLUB SA DE CV o 
                    interactuar con nuestros servicios sin necesidad de iniciar sesión de nuevo. Una vez que hayas iniciado sesión, 
                    la cookie persistente permanecerá en tu navegador y AMTI AUTO CLUB SA DE CV la leerá cuando regreses a alguno de nuestros 
                    sitios web o a sitios de socios que utilizan nuestros servicios (como, por ejemplo, los botones de compartir o de solicitar de empleo). <br/>
                    Las cookies de sesión solo duran lo que se mantenga la sesión (normalmente, lo que dure la visita que estés realizando en ese momento a un 
                    sitio web o la sesión con el navegador).
                </p>
                <p class="bold h5">¿Para qué se usan las cookies?</p>
                <p class="regular h5">
                    AMTI AUTO CLUB SA DE CV; recordar tus preferencias y ofrecerte una experiencia personalizada basada en tu configuración. Las cookies también
                    permiten que tus interacciones en AMTI AUTO CLUB SA DE CV sean más rápidas y seguras. Además, las cookies no AMTI AUTO CLUB SA DE CV; y 
                    te ofrecen funcionalidades personalizadas a través de los complementos de AMTI AUTO CLUB SA DE CV como nuestro botón «Compartir».
                </p>
                <p class="bold h5">Categorías de uso Descripción</p>
                <p class="regular h5">
                    <b>Autenticación:</b>
                     Si has iniciado sesión en AMTI AUTO CLUB SA DE CV las cookies nos ayudan a mostrarte la información adecuada y a 
                    personalizar tu experiencia. Seguridad Utilizamos cookies para activar y respaldar nuestras funcionalidades de seguridad, y para 
                    ayudarnos a detectar actividades fraudulentas e infracciones de nuestras Condiciones de uso. Preferencias, funcionalidades y servicios. Las 
                    cookies pueden decirnos qué idiomas prefieres y cuáles son tus preferencias de comunicación. Pueden ayudarte a rellenar formularios en 
                    AMTI AUTO CLUB SA DE CV con mayor facilidad. También te proporcionan funcionalidades, información y contenidos personalizados conjuntamente 
                    con nuestros complementos. Puedes obtener más información sobre los complementos en nuestra Política de privacidad.
                </p>
                <p class="regular h5">
                    <b>Publicidad:</b>
                     Podemos usar las cookies para mostrarte publicidad relevante tanto dentro como fuera de los sitios web de AMTI AUTO CLUB SA DE CV. 
                     También podemos usar una cookie para saber si alguien que vio un anuncio, lo visitó en otro momento y realizó una acción (como descargar un 
                     documento o hacer una compra) en el sitio web del anunciante. Asimismo, nuestros socios pueden usar una cookie para determinar si hemos 
                     mostrado un anuncio y qué resultados obtuvo, o para obtener información sobre cómo interaccionas con ellos. También podemos colaborar con un 
                     socio para mostrarte un anuncio dentro o fuera del sitio web de AMTI AUTO CLUB SA DE CV, como después de haber visitado el sitio web de un socio 
                     o aplicación.
                </p>
                <p class="regular h5">
                    <b>Rendimiento:</b>
                     Análisis e investigación Las cookies nos ayudan a averiguar el rendimiento de nuestros sitios web y de los complementos en lugares diferentes. 
                     También usamos cookies para comprender, mejorar e investigar productos, funcionalidades y servicios, incluso cuando accedes a AMTI AUTO CLUB SA 
                     DE CV desde otros sitios web, aplicaciones o dispositivos como tu ordenador del trabajo o tu teléfono móvil.
                </p>
                <p class="bold h5">¿Qué es la tecnología DNT?</p>
                <p class="regular h5">
                    «Do Not Track» (DNT) es un concepto promovido por autoridades reguladoras estadounidenses, como la Comisión Federal de Comercio de EE. UU., para el sector de 
                    Internet con el objetivo de desarrollar e implementar un mecanismo que permita a los internautas controlar el seguimiento o rastreo que se realiza de sus 
                    actividades en línea en los distintos sitios web a través de la configuración de sus navegadores. El World Wide Web Consortium (W3C) lleva tiempo 
                    trabajando con agentes del sector, navegadores de Internet, empresas tecnológicas, entidades normativas para desarrollar un estándar de tecnología DNT. 
                    Aunque se han realizado algunos avances, han sido escasos. Hasta la fecha no se ha adoptado ninguna norma al respecto. Como tal AMTI AUTO CLUB SA DE CV no 
                    responde a señales de «no rastreo».
                </p>
                <p class="bold h5">¿Cómo se usan las cookies para fines publicitarios?</p>
                <p class="regular h5">
                    Las cookies y otras tecnologías publicitarias como las balizas web, los píxeles y las etiquetas nos ayudan a presentarte anuncios 
                    relevantes de manera más efectiva. También nos ayudan a ofrecerte datos agregados de auditoría, estudios e informes para anunciantes, a 
                    entender y mejorar nuestro servicio y a saber qué contenidos se te han mostrado. Nota: Debido a que tu navegador puede solicitar estos 
                    anuncios y balizas directamente a los servidores de redes publicitarias, estas redes pueden ver, editar o establecer sus propias cookies 
                    como si hubieras solicitado ver una página web de su sitio. Los anuncios en AMTI AUTO CLUB SA DE CV también pueden incluir cookies de terceros.
                </p>
                <p class="regular h5">
                    Si has iniciado sesión en AMTI AUTO CLUB SA DE CV o en otro Servicio al que se hace referencia en esta Política de cookies, o 
                    si visitas el sitio web de un tercero con la condición de socio de AMTI AUTO CLUB SA DE CV y te identifica una de nuestras cookies en 
                    tu dispositivo, el uso (como tu conducta de navegación) y los datos de los registros (como tu dirección de IP) se asociarán a tu cuenta, 
                    tal y como se describe en la Sección 1.3 de nuestra Política de privacidad. También usamos los datos agregados de terceros, los datos de 
                    tu perfil y tu actividad AMTI AUTO CLUB SA DE CV.
                </p>
                <p class="regular h5">
                    Si eres miembro AMTI AUTO CLUB SA DE CV pero no has iniciado sesión en tu cuenta en un navegador, AMTI AUTO CLUB SA DE CV puede continuar 
                    registrando tus interacciones con nuestros servicios en ese navegador durante 30 días para generar análisis de uso asociados a nuestros 
                    servicios, que podremos compartir de manera agregada con nuestros clientes de publicidad. A menos que borres esas cookies de tu navegador, 
                    es posible que utilicemos esa información para: Mostrar publicidad más relevante y basada en tus intereses.
                </p>
                <p class="regular h5">
                    Facilitar informes agregados de actividad publicitaria a los anunciantes y a los sitios web que alojan esos anuncios. Ayudar a 
                    los titulares de las aplicaciones y los sitios web a conocer mejor la forma en que los visitantes interactúan con sus sitios o 
                    aplicaciones. Detectar posibles fraudes y otros riesgos y proteger de ellos a nuestros usuarios y socios. Mejorar nuestros productos.
                </p>
                <p class="regular h5">
                    Para obtener más información sobre el uso que realizamos de las cookies y tecnologías similares con fines publicitarios, así como sobre 
                    los controles disponibles para Miembros y Visitantes, consulta la nuestra Política de privacidad.
                </p>
                <p class="bold h5">¿Qué cookies de terceros utiliza AMTI AUTO CLUB SA DE CV.?</p>
                <p class="regular h5">
                    En nuestra tabla de cookies encontrarás información sobre las cookies de terceros que alojamos en nuestros sitios. 
                    Ten en cuenta que los nombres de las cookies, los píxeles y otras tecnologías pueden cambiar con el tiempo. 
                    Ten en cuenta también que las empresas y otro tipo de organizaciones que patrocinan AMTI AUTO CLUB SA DE CV, 
                    para analizar tu interés en ellos.
                </p>
                <p class="bold h5">Control sobre las cookies</p>
                <p class="regular h5">
                    La mayoría de los navegadores te permite controlar las cookies mediante las preferencias de configuración. 
                    Ahora bien, si limitas la capacidad de los sitios web para guardar cookies, es posible que se resienta tu experiencia 
                    general de uso, ya que no será una experiencia personalizada. También puede que no te sea posible guardar valores de 
                    configuración personalizados como la información de inicio de sesión.
                </p>
                <p class="bold h5">¿Qué hago si no quiero que se guarden cookies en mi equipo o si quiero eliminar las que ya hay guardadas?</p>
                <p class="regular h5">
                    Si eres Visitante, puedes autoexcluirte de nuestras cookies de publicidad aquí. En el caso de los Miembros, 
                    la configuración de anuncios se encuentra aquí. Si no quieres recibir cookies, también puedes cambiar la configuración 
                    de tu navegador en tu ordenador u otro dispositivo electrónico que estés usando para acceder a nuestros servicios. 
                    Si usas AMTI AUTO CLUB SA DE CV sin cambiar la configuración de tu navegador, deduciremos que deseas recibir
                    cookies del sitio web de AMTI AUTO CLUB SA DE CV la mayoría de los navegadores también te ofrecen la opción de 
                    revisar y de eliminar las cookies, incluidas las de AMTI AUTO CLUB SA DE CV en cuenta que el sitio web de AMTI 
                    AUTO CLUB SA DE CV funcionará correctamente sin las cookies.
                </p>
                <p class="regular h5">
                    Ten en cuenta que el sitio web de AMTI funcionará correctamente sin las cookies.
                </p>
                <p class="regular h5">
                    Para averiguar más sobre las cookies, incluidas las cookies que han sido establecidas y cómo gestionarlas y borrarlas, visita www.allaboutcookies.org, o www.aboutcookies.org. <br/>
                    Otros recursos útiles
                </p>
                <p class="regular h5">
                    Si deseas más información sobre el uso que hacen de las cookies los anunciantes, puede que te resulten útiles los siguientes enlaces:
                    <ul>
                        <li>Alianza Europea de Publicidad Digital Interactiva (UE)</li>
                        <li>Internet Advertising Bureau (EE. UU.)</li>
                        <li>Internet Advertising Bureau (UE)</li>
                    </ul>
                </p>
                <p class="regular h5">
                    Las empresas que desarrollan los navegadores proporcionan páginas de ayuda para la gestión de cookies en sus productos. 
                    Si lo deseas, puedes encontrar información adicional más abajo.
                    <ul>
                        <li>Google Chrome</li>
                        <li>Internet Explorer Mozilla Firefox</li>
                        <li>Safari (versión escritorio)</li>
                        <li>Safari (versión móvil)</li>
                        <li>Navegador Android</li>
                        <li>Opera</li>
                        <li>Opera (versión móvil)</li>
                    </ul>
                </p>
                <p class="regular h5">
                    Si necesitas información sobre otro navegador, consulta la documentación que te facilite su fabricante.
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
                            <h6 class="oRegular text-white mb-3">¿Qué es?</h6>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | Carrito de compra</title>
</head>
<body>

    <div class="bg-azul-3 py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <a class="a_none_style" href="{{ url('/') }}">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674070253/AMTI%20Ecommerce/logo-amti-gde_tasxta.png" alt="AMTI" class="img-fluid logo-menu"/>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <div class="">
                        <a href="https://api.whatsapp.com/send?phone=525540324042" class="btn btn-primary btn-bordes-azul regular" target="_blank">
                            <i class="fa-brands fa-whatsapp me-3"></i> 55 4032 4042
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="signup-step-container">
        <div class="container-fluid p-0">
            <!--- TUTORIALES -->
            <div class="row">
                <div class="videoTutorial">
                    <div class="etiquetaVerde py-2">
                        <h3 class="regular parrafos pt-1" data-bs-toggle="modal" data-bs-target="#Tutoriales">Video tutoriales <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674234032/AMTI%20Ecommerce/icono-video_dcfyd4.png" alt="Icono video" class="img-fluid"/></h3>
                    </div>
                    @include('Flujo.components.modalTutoriales')
                </div>
            </div>
            <!-- PROCESO COMPRA -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="d-none d-sm-none d-md-block">
                                <div class="wizard">
                                    <div class="wizard-inner">
                                        <div class="connecting-line"></div>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab"><h6 class="pt-2">1</h6> </span> <i> Datos iniciales</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab"><h6 class="pt-2">2</h6></span> <i> Vigencia</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab"><h6 class="pt-2">3</h6></span> <i>Documentos</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab"><h6 class="pt-2">4</h6></span> <i>Firma </i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab"><h6 class="pt-2">5</h6></span> <i> Información</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab"><h6 class="pt-2">6</h6> </span> <i>Confirmar </i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab"><h6 class="pt-2">7</h6></span> <i>Envío </i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="wizard">
                            <form role="form" action="index.html" class="login-box">
                                <div class="tab-content" id="main_form">
                                    <!-- NOMBRE Y TELÉFONO -->
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">1</h6>
                                                </div>
                                                <h6 class="regular parrafos">1/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-5 bold h5">Bienvenido al trámite de tu licencia internacional</h4>
                                        <h4 class="text-center mb-5 regular h6">Te guiaremos paso a paso para tramitar correctamente tu licencia internacional</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida py-5">
                                                        <div class="mx-5">
                                                            <div class="text-center pb-4">
                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674082739/AMTI%20Ecommerce/logo-azul-gde_uhagup.png" alt="AMTI" class="img-fluid logo-menu"/>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="semiBold parrafos txt-color-parrafo mb-3">Introduce a continuación los datos requeridos:</h5>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre completo del solicitante*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                </div>
                                                                <div class="">
                                                                    <label for="exampleInputEmail1" class="form-label">Teléfono*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            
                                            
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- SELECCIONA LA VIGENCIA --> 
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">2</h6>
                                                </div>
                                                <h6 class="regular parrafos">2/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-5 bold h5 mb-5">Elige la vigencia de tu licencia AMTI</h4>
                                        <div class="bg-azul-3">
                                            <div class="bg-continente py-5">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra pb-2">
                                                                            <div class="header-cuadro py-2">
                                                                                <h3 class="semiBold h5">3 años</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674237481/AMTI%20Ecommerce/licenciaAMTI_heavk9.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                            </div>
                                                                            <div class="mx-4">
                                                                                <hr/>
                                                                                <div class="row ">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 3 años</p>
                                                                                            <p class="semibold txt-color-tit titulos">$2,700 MXN.</p>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                              Seleccionar
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                    <div class="">
                                                                        <div class="cuadro-compra pb-3">
                                                                            <div class="header-cuadro-2 py-2">
                                                                                <h3 class="semiBold h5">5 años</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674237481/AMTI%20Ecommerce/licenciaAMTI_heavk9.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                               <div class="etiqueta-recom py-1">
                                                                                    <h6 class="regular top-menu pt-1">
                                                                                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674166879/AMTI%20Ecommerce/icono-recomendada_mvl3og.png" alt="" class="img-fluid"/>
                                                                                        Recomendada
                                                                                    </h6>
                                                                               </div>
                                                                            </div>
                                                                            <div class="mx-4">
                                                                                <hr/>
                                                                                <div class="row my-4">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 5 años</p>
                                                                                            <div class="row">
                                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                    <p class="regular parrafos tachado">$4,900 MXN</p>
                                                                                                </div>
                                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                                                                                    <p class="semibold txt-color-tit titulos">$3,700 MXN.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                              Seleccionar
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra pb-2">
                                                                            <div class="header-cuadro py-2">
                                                                                <h3 class="semiBold h5">1 años</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674237481/AMTI%20Ecommerce/licenciaAMTI_heavk9.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                            </div>
                                                                            <div class="mx-4">
                                                                                <hr/>
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 1 año</p>
                                                                                            <p class="semibold txt-color-tit titulos">$1,450 MXN..</p>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                              Seleccionar
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- SUBE TUS DOCUMENTOS -->
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">3</h6>
                                                </div>
                                                <h6 class="regular parrafos">3/7</h6>
                                            </div>
                                        </div>
                                        <div class="container py-5">
                                            <div class="row">
                                                <div class="mb-4 text-center">
                                                    <h1 class="bold txt-color-tit titulos">Sube tus documentos</h1>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/identificacion-of_gx8kkt.png" alt="Ilustración de identificacion oficial" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Identificación oficial</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Carga fotografías de tu identificación</p>
                                                                        <p class="regular top-menu txt-color-parrafo">oficial, INE, pasaporte o Cédula</p>
                                                                        <p class="regular top-menu txt-color-parrafo">  profesional</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Carga fotografías de tu identificación 
                                                                            oficial, INE, pasaporte o Cédula
                                                                              profesional</p>
                                                                    </div>
                                                                    
                                                                    <div class="my-3 text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Identificacion">Ver ejemplo</button>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        @include('Flujo.components.modalIdentificacion')
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/licencia-cond_f6ib3d.png" alt="Ilustración de licencia de conducir" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Licencia de conducir</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deberá estar</p>
                                                                        <p class="regular top-menu txt-color-parrafo">vigente, y muy bien iluminada</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deberá estar 
                                                                            vigente, y muy bien iluminada</p>
                                                                    </div>
                                                                    
                                                                    <div class="mt-3 mb-4 pb-3 text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Licencia">Ver ejemplo</button>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                
                                                            </div>
                                                            @include('Flujo.components.modalLicencia')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/foto-per_eys0mr.png" alt="Ilustración de fotografía personal" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Fotografía personal</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Tómate una fotografía en fondo </p>
                                                                        <p class="regular top-menu txt-color-parrafo">blanco y con muy buena iluminación</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Tómate una fotografía en fondo 
                                                                            blanco y con muy buena iluminación</p>
                                                                    </div>
                                                                    
                                                                    <div class="mt-3 mb-4 pb-3  text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Fotografia">Ver ejemplo</button>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        @include('Flujo.components.modalFotografia')
                                                    </div>
                                                </div>
                                                
                                    
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SUBE TU FIRMA -->
                                    <div class="tab-pane" role="tabpanel" id="step4">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">4</h6>
                                                </div>
                                                <h6 class="regular parrafos">4/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Sube tu firma</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida py-3">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674252270/AMTI%20Ecommerce/icono-firma_nib6gz.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Tu firma</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Adjunta una fotografía de tu firma, ya sea de tu </p>
                                                                        <p class="regular top-menu txt-color-parrafo mb-4">identificación oficial o en una hoja en blanco. </p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizará en tu licencia </i></p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>internacional. </i></p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Adjunta una fotografía de tu firma, ya sea de tu 
                                                                            identificación oficial o en una hoja en blanco. </p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizará en tu licencia </i>
                                                                             <i>internacional. </i></p>
                                                                    </div>
                                                                    
                                                                    <div class="my-3 text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Firma">Ver ejemplo</button>
                                                                    </div>
                                                                    @include('Flujo.components.modalFirma')
                                                                    <hr/>
                                                                    <div class="mb-3">
                                                                        <label for="formFileSm" class="form-label">Tu firma*</label>
                                                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                               
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                        </div>
                                    </div>
                                    <!-- INFORMACIÓN COMPLEMENTARIA -->
                                    <div class="tab-pane" role="tabpanel" id="step5">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">5</h6>
                                                </div>
                                                <h6 class="regular parrafos">5/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Completa la siguiente información</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="form-info-compl py-5">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <h4 class="bold txt-color-tit mb-3 h5 ">Rasgos físicos:</h4>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">País de nacimiento*</label>
                                                                        <select class="form-select " aria-label=".form-select-lg example">
                                                                            <option value="AF">Afganistán</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DE">Alemania</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antártida</option>
                                                                            <option value="AG">Antigua y Barbuda</option>
                                                                            <option value="AN">Antillas Holandesas</option>
                                                                            <option value="SA">Arabia Saudí</option>
                                                                            <option value="DZ">Argelia</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaiyán</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrein</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BE">Bélgica</option>
                                                                            <option value="BZ">Belice</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermudas</option>
                                                                            <option value="BY">Bielorrusia</option>
                                                                            <option value="MM">Birmania</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BA">Bosnia y Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BR">Brasil</option>
                                                                            <option value="BN">Brunei</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="BT">Bután</option>
                                                                            <option value="CV">Cabo Verde</option>
                                                                            <option value="KH">Camboya</option>
                                                                            <option value="CM">Camerún</option>
                                                                            <option value="CA">Canadá</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CY">Chipre</option>
                                                                            <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comores</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, República Democrática del</option>
                                                                            <option value="KR">Corea</option>
                                                                            <option value="KP">Corea del Norte</option>
                                                                            <option value="CI">Costa de Marfíl</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="HR">Croacia (Hrvatska)</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="DK">Dinamarca</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egipto</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="AE">Emiratos Árabes Unidos</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="SI">Eslovenia</option>
                                                                            <option value="ES" selected>España</option>
                                                                            <option value="US">Estados Unidos</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Etiopía</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="PH">Filipinas</option>
                                                                            <option value="FI">Finlandia</option>
                                                                            <option value="FR">Francia</option>
                                                                            <option value="GA">Gabón</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GD">Granada</option>
                                                                            <option value="GR">Grecia</option>
                                                                            <option value="GL">Groenlandia</option>
                                                                            <option value="GP">Guadalupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GY">Guayana</option>
                                                                            <option value="GF">Guayana Francesa</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GQ">Guinea Ecuatorial</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="HT">Haití</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HU">Hungría</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IQ">Irak</option>
                                                                            <option value="IR">Irán</option>
                                                                            <option value="IE">Irlanda</option>
                                                                            <option value="BV">Isla Bouvet</option>
                                                                            <option value="CX">Isla de Christmas</option>
                                                                            <option value="IS">Islandia</option>
                                                                            <option value="KY">Islas Caimán</option>
                                                                            <option value="CK">Islas Cook</option>
                                                                            <option value="CC">Islas de Cocos o Keeling</option>
                                                                            <option value="FO">Islas Faroe</option>
                                                                            <option value="HM">Islas Heard y McDonald</option>
                                                                            <option value="FK">Islas Malvinas</option>
                                                                            <option value="MP">Islas Marianas del Norte</option>
                                                                            <option value="MH">Islas Marshall</option>
                                                                            <option value="UM">Islas menores de Estados Unidos</option>
                                                                            <option value="PW">Islas Palau</option>
                                                                            <option value="SB">Islas Salomón</option>
                                                                            <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                                                            <option value="TK">Islas Tokelau</option>
                                                                            <option value="TC">Islas Turks y Caicos</option>
                                                                            <option value="VI">Islas Vírgenes (EEUU)</option>
                                                                            <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                                                            <option value="WF">Islas Wallis y Futuna</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italia</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japón</option>
                                                                            <option value="JO">Jordania</option>
                                                                            <option value="KZ">Kazajistán</option>
                                                                            <option value="KE">Kenia</option>
                                                                            <option value="KG">Kirguizistán</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="LA">Laos</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LV">Letonia</option>
                                                                            <option value="LB">Líbano</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libia</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lituania</option>
                                                                            <option value="LU">Luxemburgo</option>
                                                                            <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MY">Malasia</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MV">Maldivas</option>
                                                                            <option value="ML">Malí</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MA">Marruecos</option>
                                                                            <option value="MQ">Martinica</option>
                                                                            <option value="MU">Mauricio</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">México</option>
                                                                            <option value="FM">Micronesia</option>
                                                                            <option value="MD">Moldavia</option>
                                                                            <option value="MC">Mónaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Níger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk</option>
                                                                            <option value="NO">Noruega</option>
                                                                            <option value="NC">Nueva Caledonia</option>
                                                                            <option value="NZ">Nueva Zelanda</option>
                                                                            <option value="OM">Omán</option>
                                                                            <option value="NL">Países Bajos</option>
                                                                            <option value="PA">Panamá</option>
                                                                            <option value="PG">Papúa Nueva Guinea</option>
                                                                            <option value="PK">Paquistán</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Perú</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PF">Polinesia Francesa</option>
                                                                            <option value="PL">Polonia</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="UK">Reino Unido</option>
                                                                            <option value="CF">República Centroafricana</option>
                                                                            <option value="CZ">República Checa</option>
                                                                            <option value="ZA">República de Sudáfrica</option>
                                                                            <option value="DO">República Dominicana</option>
                                                                            <option value="SK">República Eslovaca</option>
                                                                            <option value="RE">Reunión</option>
                                                                            <option value="RW">Ruanda</option>
                                                                            <option value="RO">Rumania</option>
                                                                            <option value="RU">Rusia</option>
                                                                            <option value="EH">Sahara Occidental</option>
                                                                            <option value="KN">Saint Kitts y Nevis</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="AS">Samoa Americana</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="VC">San Vicente y Granadinas</option>
                                                                            <option value="SH">Santa Helena</option>
                                                                            <option value="LC">Santa Lucía</option>
                                                                            <option value="ST">Santo Tomé y Príncipe</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leona</option>
                                                                            <option value="SG">Singapur</option>
                                                                            <option value="SY">Siria</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="PM">St Pierre y Miquelon</option>
                                                                            <option value="SZ">Suazilandia</option>
                                                                            <option value="SD">Sudán</option>
                                                                            <option value="SE">Suecia</option>
                                                                            <option value="CH">Suiza</option>
                                                                            <option value="SR">Surinam</option>
                                                                            <option value="TH">Tailandia</option>
                                                                            <option value="TW">Taiwán</option>
                                                                            <option value="TZ">Tanzania</option>
                                                                            <option value="TJ">Tayikistán</option>
                                                                            <option value="TF">Territorios franceses del Sur</option>
                                                                            <option value="TP">Timor Oriental</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad y Tobago</option>
                                                                            <option value="TN">Túnez</option>
                                                                            <option value="TM">Turkmenistán</option>
                                                                            <option value="TR">Turquía</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UA">Ucrania</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistán</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="Vietnam">Vietnam</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabue">Zimbabue</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label for="exampleInputEmail1" class="form-label">Estatura*</label>
                                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="estatura">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4">
                                                                                <div class="pt-2">
                                                                                    <select class="form-select" aria-label="Default select example">
                                                                                        <option selected>Selecciona</option>
                                                                                        <option value="centimetros">Centímetros</option>
                                                                                        <option value="pulgadas">Pulgadas</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Sexo*</label>
                                                                        <select class="form-select " aria-label=".form-select-lg example">
                                                                            <option selected>Femenino</option>
                                                                            <option value="1">Masculino</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Color de cabello natural*</label>
                                                                        <select class="form-select" aria-label=".form-select-lg example">
                                                                            <option selected>México</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="row">
                                                                        
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Color de ojos*</label>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                            <div class="drop-image mb-4">
                                                                                <div class="option-image active placeholder" data-value="placeholder">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-cafe_vkklmb.png" alt="Ilustración de color de ojos" class="me-3"/>Selecciona un color de ojos
                                                                                </div>
                                                                                <div class="option-image" data-value="wow">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-ambar_d1yi7v.png" alt="Ilustración de color de ojos" class="me-3"/> Ambar
                                                                                </div>
                                                                                <div class="option-image" data-value="wow">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-castano_g8zhwc.png" alt="Ilustración de color de ojos" class="me-3"/> Castaño
                                                                                </div>
                                                                                <div class="option-image" data-value="drop-image">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-gris_ks0w5a.png" alt="Ilustración de color de ojos" class="me-3"/> Gris
                                                                                </div>
                                                                                <div class="option-image" data-value="select">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-avellana_b4mz4x.png" alt="Ilustración de color de ojos" class="me-3"/> Avellana
                                                                                </div>
                                                                                <div class="option-image" data-value="custom">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-verde_h0vwr7.png" alt="Ilustración de color de ojos" class="me-3"/> Verde
                                                                                </div>
                                                                                <div class="option-image" data-value="animation"> 
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-azul_g1yxz6.png" alt="Ilustración de color de ojos" class="me-3"/> Azul
                                                                                </div>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                    </div>
                                                                    <hr/>
                                                                    <h4 class="bold txt-color-tit mb-3 h5 ">Dirección completa:</h4>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="colonia">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="NumExterior">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Número interior</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="numInterior">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="ciudad">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="estado">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONFIRMACIÓN DE DATOS -->
                                    <div class="tab-pane" role="tabpanel" id="step6">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">6</h6>
                                                </div>
                                                <h6 class="regular parrafos">6/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Por favor, confirma que tus datos sean correctos</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-confirmacion">
                                                        <div class="header-lic py-1">
                                                            <h6 class="bold  pt-1">INTERNATIONAL DRIVING PERMIT</h6>
                                                            <h6 class="regular tags">TRANSLATION OF FOREIG DRIVER'S LICENCE</h6>
                                                        </div>
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <div class="mb-3">
                                                                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674245868/AMTI%20Ecommerce/foto-ejemp_pfcn3n.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                    </div>
                                                                    <div class="">
                                                                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674253285/AMTI%20Ecommerce/ejemplo-firma_fnmd48.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="txt-color-parrafo h6 regular mb-4"><b class="txt-azul-oscuro">FULL NAME:</b> "PRUEBAS"</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">FULL NAME:</b></p>
                                                                        <p class="regular h6 txt-color-parrafo mb-4">"ALDO MARTINEZ"</p>
                                                                    </div>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular h6  txt-color-parrafo mb-4"><b class="txt-azul-oscuro">ADDRESS:</b> "AV. RÚBEN DARÍO #586"</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">ADDRESS:</b></p>
                                                                        <p class="regular h6 txt-color-parrafo mb-4">"AV. RÚBEN DARÍO #586"</p>
                                                                    </div>
                                                                    <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">PLACE OF BIRTH:</b></p>
                                                                    <p class="regular h6 txt-color-parrafo mb-4">"MÉXICO"</p>
                                                                    <div class="row">
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">SEX:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"M"</p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">EYES:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"EFF"</p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">HT:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"150"</p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">HAIR:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"VFVF"</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                               
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                        </div>
                                        
                                    </div>
                                    <!-- DATOS DE ENVÍO -->
                                    <div class="tab-pane" role="tabpanel" id="step7">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">7</h6>
                                                </div>
                                                <h6 class="regular parrafos">7/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Datos de envío</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="form-info-envio">
                                                        <div class="mx-5">
                                                            <div class="row py-5 txt-firma">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre Completo*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Teléfono*</label>
                                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Correo electrónico*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Número interior</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Instrucciones adicionales para acceder al domicilio*</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                                <div class="row mb-5">
                                                                    <label for="exampleInputEmail1" class="form-label">Selecciona tu tipo de envío*</label>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input check-envio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label txt-color-tit bold" for="flexRadioDefault1">
                                                                                Envío<b class="txt-azul-oscuro"> estándar</b> <br/>
                                                                                <i class="fa-solid fa-check txt-verde"></i> <b class="txt-verde">Gratuito</b> <br/>
                                                                                <b class="top-menu regular">5 - 7 días hábiles</b>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="form-check ">
                                                                            <input class="form-check-input check-envio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Envío<b class="txt-azul-oscuro"> express</b> <br/>
                                                                                <b class="regular">$199</b> <br/>
                                                                                <b class="top-menu regular">1 a 3 días hábiles</b>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input check-envio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Recoger en<b class="txt-azul-oscuro"> sucursal</b> <br/>
                                                                                <i class="fa-solid fa-check txt-verde"></i> <b class="txt-verde">Gratuito</b> <br/>
                                                                                <b class="top-menu regular">2 a 3 días hábiles.</b>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-3">
                                                                    <h6 class="top-menu txt-color-parrafo"><i>*Los días de entrega pueden variar según sea la zona de entrega por políticas de paqueterías.</i></h6>
                                                                </div>

                                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                                    <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                                          <div class="form-check mt-1">
                                                                            <input class="form-check-input chkAll" type="checkbox" value="" id="chkAccordion2All">
                                                                          </div>
                                                                          Requiero factura
                                                                        </button>
                                                                      </h2>
                                                                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                                        <div class="accordion-body ms-3">
                                                                            <div class="row">
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Nombre o Razón Social</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">RFC*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Numero interior</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Código Postal*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">País*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Correo electrónico*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Teléfono*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Uso del CFDI*</label>
                                                                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                                                            <option selected>Femenino</option>
                                                                                            <option value="1">Masculino</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                            <ul class="list-inline pull-right">
                                                                <li><a type="button" class="default-btn next-step a_none_style text-white" href="{{route('checkout') }}">Siguiente <i class="fa-solid fa-arrow-right"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                       
                                </div>
                            </form>     
                        </div>
                                
                            
                    </div><!-- row -->
                </div><!-- col-md-12 -->
                
            </div> <!-- row -->
            
        </div><!--container-->
    </section>

    <!-- FOOTER -->
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <h6 class="parrafos txt-color-parrafo bold">Pagos del checkout seguros</h6>
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275337/Jeanswest/pagos/icono-secure_r1fnlg.png" alt="Certificado SecureTrust" class="img-fluid secure-trust"/>
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275337/Jeanswest/pagos/icono-ssl_dnzh3m.png" alt="Certificado SSL" class="img-fluid ssl"/>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <h6 class="parrafos txt-color-parrafo bold">Medios y soluciones de pago</h6>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275337/Jeanswest/pagos/icono-visa_emqhjy.png" alt="Visa" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-master_nemers.png" alt="Mastercard" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-maestro_wbtgcr.png" alt="Maestro" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-american_na2mcs.png" alt="American Express" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275235/Jeanswest/footer/icono-oxxo_ofuq4d.png" alt="Oxxo" class="img-fluid icono-pagos"/>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos">© 2023 AMTI, Todos los derechos reservados</h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos"><a href="{{ route('terminos') }}" class="a_none_style txt-color-parrafo regular parrafos">Términos y condiciones </a> • <a href="{{ route('aviso') }}" class="a_none_style txt-color-parrafo regular parrafos">Aviso de privacidad</a> </h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <a href="https://blueberry.mx/" class="a_none_style" target="_blank">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674595263/Cosas%20generales/blueberry-tech_se5b3f.gif" alt="Materialized by Blueberry" class="img-fluid bb-logo"/>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    @include('components.scripts')
</body>
</html>
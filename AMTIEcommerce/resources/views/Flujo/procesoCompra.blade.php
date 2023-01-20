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
                        <a href="{{ route('procesoCompra')  }}" class="btn btn-primary btn-bordes-azul regular">
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
                                        <li role="presentation" class="disabled">
                                            <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span class="round-tab"><h6 class="pt-2">7</h6></span> <i>Checkout </i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab"><span class="round-tab"><h6 class="pt-2">9</h6></span> <i>Final </i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wizard">
                            <form role="form" action="index.html" class="login-box">
                                <div class="tab-content" id="main_form">
                                    <!-- NOMBRE Y TELÉFONO -->
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <h4 class="text-center mt-5 bold h5">Bienvenido al trámite de tu licencia internacional</h4>
                                        <h4 class="text-center mb-5 regular h6">Te guiaremos paso a paso para tramitar correctamente tu licencia internacional</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida">
                                                        <div class="mx-5">
                                                            <div class="text-center py-4">
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
                                        <h4 class="text-center mt-5 bold h5 mb-5">Elige la vigencia de tu licencia AMTI</h4>
                                        <div class="bg-azul-3">
                                            <div class="bg-continente py-5">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra">
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
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <div class="">
                                                                        <div class="cuadro-compra">
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
                                                                                <div class="row mt-4">
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
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra">
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
                                        <div class="container py-5">
                                            <div class="row">
                                                <div class="mb-4 text-center">
                                                    <h1 class="bold txt-color-tit titulos">Sube tus documentos</h1>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/identificacion-of_gx8kkt.png" alt="Ilustración de identificacion oficial" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Identificación oficial</h1>
                                                                    <p class="regular top-menu txt-color-parrafo">Carga fotografías de tu identificación</p>
                                                                    <p class="regular top-menu txt-color-parrafo">oficial, INE, pasaporte o Cédula</p>
                                                                    <p class="regular top-menu txt-color-parrafo">  profesional</p>
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
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/licencia-cond_f6ib3d.png" alt="Ilustración de licencia de conducir" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Licencia de conducir</h1>
                                                                    <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deberá estar</p>
                                                                    <p class="regular top-menu txt-color-parrafo">vigente, y muy bien iluminada</p>
                                                                    <div class="my-3 text-end">
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
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/foto-per_eys0mr.png" alt="Ilustración de fotografía personal" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Fotografía personal</h1>
                                                                    <p class="regular top-menu txt-color-parrafo">Tómate una fotografía en fondo </p>
                                                                    <p class="regular top-menu txt-color-parrafo">blanco y con muy buena iluminación</p>
                                                                    <div class="my-3 text-end">
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
                                        <h4 class="text-center my-5 bold h5">Sube tu firma</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674252270/AMTI%20Ecommerce/icono-firma_nib6gz.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Tu firma</h1>
                                                                    <p class="regular top-menu txt-color-parrafo">Adjunta una fotografía de tu firma, ya sea de tu </p>
                                                                    <p class="regular top-menu txt-color-parrafo mb-4">identificación oficial o en una hoja en blanco. </p>
                                                                    <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizará en tu licencia </i></p>
                                                                    <p class="regular top-menu txt-color-parrafo"> <i>internacional. </i></p>
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
                                        <h4 class="text-center my-5 bold h5">Completa la siguiente información</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="form-info-compl">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <div class="">
                                                                    <div class="row">
                                                                        <h4 class="bold txt-color-tit mb-3 h5 ">Rasgos físicos:</h4>
                                                                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">País de nacimiento*</label>
                                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                                                <option selected>México</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="exampleInputEmail1" class="form-label">Estatura*</label>
                                                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="centimentros py-1">
                                                                                        <h5 class="regular parrafos ms-3 pt-1">centímetros</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Sexo*</label>
                                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                                                <option selected>Femenino</option>
                                                                                <option value="1">Masculino</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Color de cabello natural*</label>
                                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                                <select class="form-select" aria-label="Default select example">
                                                                                    <option selected>Open this select menu</option>
                                                                                    <option value="1">One</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <h4 class="bold txt-color-tit mb-3 h5 ">Dirección completa:</h4>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Número interior*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div><!-- -->
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
                                    <!-- CONFIRMACIÓN DE DATOS -->
                                    <div class="tab-pane" role="tabpanel" id="step6">
                                        <h4 class="text-center">Step 3</h4>
                                         <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Account Name *</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Demo</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Inout</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Information</label> 
                                                <div class="custom-file">
                                                  <input type="file" class="custom-file-input" id="customFile">
                                                  <label class="custom-file-label" for="customFile">Select file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Number *</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Input Number</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                           </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                                            <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                            <li><button type="button" class="default-btn next-step">Continue</button></li>
                                        </ul>
                                    </div>
                                    <!-- DATOS DE ENVÍO -->
                                    <div class="tab-pane" role="tabpanel" id="step7">
                                        <h4 class="text-center">Step 3</h4>
                                         <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Account Name *</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Demo</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Inout</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Information</label> 
                                                <div class="custom-file">
                                                  <input type="file" class="custom-file-input" id="customFile">
                                                  <label class="custom-file-label" for="customFile">Select file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Number *</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Input Number</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                           </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                                            <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                            <li><button type="button" class="default-btn next-step">Continue</button></li>
                                        </ul>
                                    </div>
                                    <!-- CHECKOUT -->
                                    <div class="tab-pane" role="tabpanel" id="step8">
                                        <h4 class="text-center">Step 4</h4>
                                        <div class="all-info-container">
                                            <div class="list-content">
                                                <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Collapse 1 <i class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listone">
                                                    <div class="list-box">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>First and Last Name *</label> 
                                                                    <input class="form-control" type="text"  name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Phone Number *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Collapse 2 <i class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listtwo">
                                                    <div class="list-box">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Address 1 *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City / Town *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country *</label> 
                                                                    <select name="country2" class="form-control" id="country2" disabled="disabled">
                                                                        <option value="NG" selected="selected">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="KP">North Korea</option>
                                                                        <option value="MP">Northern Mariana Islands</option>
                                                                        <option value="NO">Norway</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Legal Form</label> 
                                                                    <select name="legalform2" class="form-control" id="legalform2" disabled="disabled">
                                                                        <option value="" selected="selected">-Select an Answer-</option>
                                                                        <option value="AG">Limited liability company</option>
                                                                        <option value="GmbH">Public Company</option>
                                                                        <option value="GbR">No minimum capital, unlimited liability of partners, non-busines</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Business Registration No.</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Registered</label> 
                                                                    <select name="vat2" class="form-control" id="vat2" disabled="disabled">
                                                                        <option value="" selected="selected">-Select an Answer-</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Seller</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Company Name *</label> 
                                                                    <input class="form-control" type="password" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Collapse 3 <i class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listthree">
                                                    <div class="list-box">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder=""> 
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Number *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder=""> 
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                                            <li><button type="button" class="default-btn next-step">Finish</button></li>
                                        </ul>
                                    </div>
                                    <!-- FINAL -->
                                    <div class="tab-pane" role="tabpanel" id="step8">
                                        <h4 class="text-center">Step 4</h4>
                                        <div class="all-info-container">
                                            <div class="list-content">
                                                <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Collapse 1 <i class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listone">
                                                    <div class="list-box">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>First and Last Name *</label> 
                                                                    <input class="form-control" type="text"  name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Phone Number *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Collapse 2 <i class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listtwo">
                                                    <div class="list-box">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Address 1 *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City / Town *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country *</label> 
                                                                    <select name="country2" class="form-control" id="country2" disabled="disabled">
                                                                        <option value="NG" selected="selected">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="KP">North Korea</option>
                                                                        <option value="MP">Northern Mariana Islands</option>
                                                                        <option value="NO">Norway</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Legal Form</label> 
                                                                    <select name="legalform2" class="form-control" id="legalform2" disabled="disabled">
                                                                        <option value="" selected="selected">-Select an Answer-</option>
                                                                        <option value="AG">Limited liability company</option>
                                                                        <option value="GmbH">Public Company</option>
                                                                        <option value="GbR">No minimum capital, unlimited liability of partners, non-busines</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Business Registration No.</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Registered</label> 
                                                                    <select name="vat2" class="form-control" id="vat2" disabled="disabled">
                                                                        <option value="" selected="selected">-Select an Answer-</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Seller</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Company Name *</label> 
                                                                    <input class="form-control" type="password" name="name" placeholder="" disabled="disabled"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Collapse 3 <i class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listthree">
                                                    <div class="list-box">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder=""> 
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Number *</label> 
                                                                    <input class="form-control" type="text" name="name" placeholder=""> 
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                                            <li><button type="button" class="default-btn next-step">Finish</button></li>
                                        </ul>
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
                <h6 class="txt-color-parrafo regular parrafos"><a href="" class="a_none_style txt-color-parrafo regular parrafos">Términos y condiciones </a> • <a href="" class="a_none_style txt-color-parrafo regular parrafos">Aviso de privacidad</a> </h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <a href="https://blueberry.mx/" class="a_none_style" target="_blank">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673041263/BlueberryMX/we-are-Bb_black_sucfyi.gif" alt="Materialized by Blueberry" class="img-fluid bb-logo"/>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    @include('components.scripts')
</body>
</html>
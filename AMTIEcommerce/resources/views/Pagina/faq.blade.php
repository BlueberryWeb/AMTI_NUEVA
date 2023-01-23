<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | CONTACTO</title>
</head>
<body>
    @include('components.menu')
    <div class=" py-5">
        <div class="container">
            <div class="row">
                <div class="text-center mb-5">
                    <h1 class="bold txt-color-tit big">FAQ’s</h1>
                </div>
                <div class="accordionFaqs">
                    <button class="accordionFaqs-btn py-3"> <span class="">¿Cuánto tiempo se tarda en recibir el IDP?</span></button>
                    <div class="panel">
                        <div class="regular parrafos py-4">
                            <ul>
                                <li>Su IDP se enviará dentro de 24-48 horas hábiles.</li>
                                <li>El envío nacional gratuito demora de 5 a 7 días hábiles.</li>
                                <li>El envío express demora de 1 a 3 días hábiles, con costo de $199 MXN <br/>
                                    (dependiendo de la zona puede variar por temas de la paquetería).
                                </li>
                                <li>Recoger en sucursal 2 a 3 días hábiles (CDMX, GDL y MTY)</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- panel -->
                </div>
                
                <div class="accordionFaqs">
                    <button class="accordionFaqs-btn py-3"><span>APR Offers</span></button>
                    <div class="panel">
                        <div class="content"><input type="checkbox">Subscription</div>
                        <button class="accordionFaqs-btn inner-accord"><span>Auto Publish</span></button>
                        <div class="panel">
                            <div class="content1"><input type="checkbox">APR Offers</div>
                            <div class="content1"><input type="checkbox">Conditional APR Offers</div>
                            <div class="content1"><input type="checkbox">APR Rebates</div>
                            <div class="content1"><input type="checkbox">Conditional APR Rebates</div>
                                    <div class="content1"><input type="checkbox">Formula Pricing APR Rebates</div>
                        </div>
                    </div>
                    <!-- panel -->
                </div>
                <div class="accordionFaqs">
                    <button class="accordionFaqs-btn py-3"><span>LEASE Offers</span></button>
                    <div class="panel">
                        <div class="content"><input type="checkbox">Subscription</div>
                        <button class="accordionFaqs-btn inner-accord"><span>Auto Publish</span></button>
                        <div class="panel">
                            <div class="content1"><input type="checkbox">Lease Offers</div>
                            <div class="content1"><input type="checkbox">Lease Rebates</div>
                        </div>
                    </div>
                    <!-- panel -->
                </div>
            </div>
        </div>

    </div>


    <!-- FOOTER -->
    @include('components.footer')
    @include('components.scripts')
</body>
</html>
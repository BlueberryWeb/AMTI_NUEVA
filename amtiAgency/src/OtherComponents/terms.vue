<template>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                <img :src="logoAmtiAzul" alt="AMTI" class="img-fluid"/>
              </a>
              <div class="">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <div class="d-none d-sm-none d-md-block">
                        <div class="bg-blue-green py-3">
                            <div class="mx-4">
                                <a href=" tel:+525540324042" class="a_none_style text-white">
                                    <h3 class="oRegular h6"><b class="oExtraBold">Call us today:</b> 55 4032 4042</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item  pt-2">
                    <div class="text-center ms-3">
                        <font-awesome-icon icon="fa-solid fa-bars" class="fa-solid fa-bars" onclick="menu()"/>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
          <div class="d-block d-sm-block d-md-none">
                <div class="bg-blue-green py-3">
                    <div class="mx-4">
                        <a href=" tel:+525540324042" class="a_none_style text-white">
                            <h3 class="oRegular h6"><b class="oExtraBold">Call us today:</b> 55 4032 4042</h3>
                        </a>
                    </div>
                </div>
            </div>
    </header>
    <!-- MENU -->
    <div class="container-fluid p-0 bg-yellow-blue" id="menu">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone">
                <img :src="bgMenu" alt="AMTI" class="img-fluid"/>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                <div class="container bg-continent" :style="bgContinente">
                    <div class="row">
                        <div class="text-end my-3 me-5">
                            <i class="fa-solid fa-xmark" id="close" onclick="cerrar()"></i>
                        </div>
                        <div class=" mx-4">
                            <div class="text-start">
                                <img :src="logoAmtiBco" alt="AMTI" class="img-fluid logo-menu mt-3 mb-5"/>
                                <a href="#header" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Index</h1>
                                </a>
                                <a href="#What-is-an-IDP?" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">What is an IDP?</h1>
                                </a>
                                <a href="#IDP-Booklet" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">IDP Booklet</h1>
                                </a>
                                <a href="#Advantages" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Advantages</h1>
                                </a>
                                <a href="#Process-your-IDP" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Process your IDP</h1>
                                </a>
                                <a href="#Contact" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Contact</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2 pt-5 ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <h4 class="oRegular h6">© 2022 AMTI, All rights reserved</h4>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <img :src="logoBB" alt="Materialized by Blueberry" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="text-center">
                    <h1 class="rExtraBold txt-blue">TERMS AND CONDITIONS</h1>
                </div>
                <div class="text-end">
                    <h5 class="regular">Terms and conditions of service <b class="txt-yellow" ><b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>.</b></h5>
                </div>
                <div class="regular">
                    <h6 class="oBold">1. Introduction.</h6>
                    <p>
                        This page establishes the "terms and conditions" under which you
                        can use <b class="txt-yellow" ><b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>.</b> Please read this
                        page carefully. If you do not agree to the terms and conditions set
                        forth herein, please do not use this website or this service.
                    </p>
                    <h6 class="oBold">2. Acceptance of Terms.</h6>
                    <p>
                        By using this website, you agree to be bound by these terms and
                        conditions. The terms and conditions can be updated by MIGUEL
                        ÁNGEL SUBDIAZ VALDES at any time and without prior notice,
                        so you should visit this page periodically to consult the most
                        recent version of the terms and conditions. The terms "you" and
                        "user" as used herein refer to all persons and/or entities that
                        access this Internet site for any reason.
                    </p>
                    <h6 class="oBold">3. Binding Agreement.</h6>
                    <p>
                        These terms (may be changed periodically by MIGUEL ÁNGEL
                        SUBDIAZ VALDES which form a binding agreement between you
                        and <b class="txt-yellow" ><b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>.</b> The access and use of
                        <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> indicates your acceptance of
                        these terms. Likewise, you agree MIGUEL ÁNGEL SUBDIAZ
                        VALDES, at his own risk In the case of electronic contracting of
                        services, it will be perfected as soon as the acceptance of the
                        proposal or the conditions with which it was modified is received.
                    </p>
                    <h6 class="oBold">4. Description of the Service.</h6>
                    <p>
                        It is established that you understand and accept that the service
                        may include certain communications from MIGUEL ÁNGEL
                        SUBDIAZ VALDES such as administrative messages and service
                        announcements, these communications are considered as part of
                        the <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> service. and you may
                        not opt out of receiving such communications. The use of the
                        online tool called “https:// amti.mx/ / " of the company MIGUEL
                        ÁNGEL SUBDIAZ VALDES is part of the service provided by
                        <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> and its use will be governed
                        by the terms hereof. Release of new products and properties, is
                        subject to these terms. You understand and agree that the
                        services mentioned above are provided "as - is" and MIGUEL
                        ÁNGEL SUBDIAZ VALDES of any communication or
                        personalization features. If a user of MIGUEL ÁNGEL SUBDIAZ
                        VALDES. If you wish to stop receiving these communications, the
                        user can click on the removal request, which is added to the end
                        of each piece of email sent.
                    </p>
                    <h6 class="oBold">5. Other Specific Rules for the Use of the Website:</h6>
                    <p>
                        You represent, warrant and agree that you will not use (or plan,
                        encourage or assist others to use) the Website for any other
                        purpose or in any way prohibited by the terms herein or applicable
                        law. It is your responsibility to ensure that you use the Website in
                        accordance with the terms specified herein.
                    </p>
                    <h6 class="oBold">6. Posting Rules. Conduct and Security:</h6>
                    <p>
                        You agree to comply with the rules of MIGUEL ÁNGEL SUBDIAZ
                        VALDES of Conduct and Security on this website. Users who
                        violate these rules will have the use and access to the site
                        suspended or canceled at the sole discretion of MIGUEL ÁNGEL
                        SUBDIAZ VALDES.
                    </p>
                    <h6 class="oBold">6.1 General:</h6>
                    <p>
                        The contact information of <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> is
                        listed on the Website. MIGUEL ANGEL SUBDIAZ VALDES and its
                        associated agents assume no responsibility that the content is
                        appropriate or downloaded outside of the Mexican Republic.
                        Access to the content of the Internet site may not be legal by
                        certain persons or in certain countries. If you access the content
                        of the Internet site from outside the Mexican Republic, you do so
                        at your own risk and are responsible for compliance with the laws
                        within your jurisdiction. The User undertakes to use the Website
                        and the Services in accordance with the law, these General
                        Conditions, the applicable Particular Conditions, as well as with
                        morality and generally accepted good customs and public order.
                        MIGUEL ANGEL SUBDIAZ VALDES excludes any liability for
                        damages of any nature that may be due to the services provided
                        by third parties through the Website, and in particular, although
                        not exclusively for damages that may be due to breach of the law,
                        morality and generally accepted good customs or public order as
                        a result of the provision of services by third parties through the
                        Website; the infringement of intellectual and industrial property
                        rights, business secrets, contractual commitments of any kind,
                        rights to honor, personal and family privacy and the image of
                        people, property rights and any another nature
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    <footer class="bg-yellow-blue">
        <div class="container pt-5 pb-3 bg-continent" :style="bgContinente">
            <div class="row">
                 <div class = "text-center mb-4">
                <h6 class ="oRegular">That your international driving permit serves as a valid form of identification doesn’t make it an official document.</h6>
            </div>
                <div class="text-center mb-4">
                    <img :src="logoAmti" alt="AMTI" class="img-fluid"/>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 mb-4">
                    <div class="contactUs">
                        <h5 class="rExtraBold h5">Contact Us</h5>
                        <hr class="hr-footer">
                        <a href="tel:+17477778619" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-black">
                                <img :src="iconPhone" alt="Contact us +52 55 4032 9042" class="img-fluid icon-phone"/>
                                +1 747 7778 619
                            </h6>
                        </a>
                        <a href="tel:+523337883222" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-black">
                                <img :src="iconWhats" alt="Contact us +52 55 4032 9042" class="img-fluid icon-whats"/>
                                33 3788 3222
                            </h6>
                        </a>
                        <a href="mailto:hello@amti-usa.mx" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h6 class="oRegular text-black">
                                <img :src="iconMail" alt="Contact us hello@amti-usa.mx" class="img-fluid icon-mail"/>
                                sales@amti.mx
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 mb-4">
                    <div class="">
                        <h6 class="rExtraBold h5">Menu</h6>
                        <hr class="hr-footer">
                        <a href="#header" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Index</h6>
                        </a>
                        <a href="#What-is-an-IDP?" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">What is an IDP?</h6>
                        </a>
                        <a href="#IDP-Booklet" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">IDP Booklet</h6>
                        </a>
                        <a href="#Advantages" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Advantages</h6>
                        </a>
                        <a href="#Process-your-IDP" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Process your IDP</h6>
                        </a>
                        <a href="#Contact" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Contact</h6>
                        </a>
                    </div>
                </div>



                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 mb-4">
                    <div class="">
                        <h6 class="rExtraBold h5">Legal</h6>
                        <hr class="hr-footer">
                        <a href="{{ route('terms.index') }}" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Terms & Conditions</h6>
                        </a>
                        <a href="{{ route('privacy.index') }}" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Privacy policy</h6>
                        </a>
                        <a href="{{ route('cookies.index') }}" class="a_none_style">
                            <h6 class="oRegular text-black mb-3">Cookies Policy</h6>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 mb-4">
                    <div class="">
                        <h6 class="rExtraBold h5">Social Media</h6>
                        <hr class="hr-footer">
                        <a href="#" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <img :src="iconFB" alt="AMTI" class="img-fluid icon-fb me-3"/>
                        </a>
                        <a href="#" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <img :src="iconIG" alt="AMTI" class="img-fluid icon-ig"/>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-2">
                            <h6 class="oRegular">© 2022 AMTI, All rights reserved</h6>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-2">
                            <a href="https://blueberry.mx/" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                <img :src="logoBB" alt="Materialized by Blueberry" class="img-fluid"/>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
    </footer>
</template>
<script>

//IMAGES    
    import logoAmtiAzul from 'ASSETS/images/logo-azul-amti'
    import bgMenu from 'ASSETS/images/bg-menu'
    import logoAmtiBco from 'ASSETS/images/logo-white'
    import logoBB from 'ASSETS/images/materialized-negro'
    import bgContinente from 'ASSETS/images/bg-continent'
    import logoAmti from 'ASSETS/images/logo-white'
    import iconPhone from 'ASSETS/images/icon-phone'
    import iconWhats from 'ASSETS/images/icon-whats'
    import iconMail from 'ASSETS/images/icon-mail'
    import iconFB from 'ASSETS/images/icon-fb'
    import iconIG from 'ASSETS/images/icon-ig'
        export default{
            setup(){
                return{
                    logoAmtiAzul,
                    bgMenu,
                    logoAmtiBco,
                    logoBB, 
                    bgContinente,
                    logoAmti,
                    iconPhone,
                    iconWhats,
                    iconMail,
                    iconFB,
                    iconIG
                }
            },
            methods: {
                redirect(name){
                    this.$router.push({
                    name:name
                    })
                }
            },
            data() {
            return { 
                bgContinente: { backgroundImage: `url('${bgContinente}')` } 
            };
        },
        }
</script>
<style scoped>
    .bg-blue-green{
        background: rgb(49,177,167);
        background: linear-gradient(140deg, rgba(49,177,167,0.9) 3%, rgba(15,65,73,0.9) 30%, rgba(15,65,73,0.9) 100%);
        color: #fff;
    }
    .logo-menu{
        width: 150px;
    }
    .fa-bars{
        color: #1F7575;
        font-size: 1.5rem;
        cursor: pointer;
    }
</style>
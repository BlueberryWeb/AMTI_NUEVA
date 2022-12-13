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
                    <h1 class="rExtraBold txt-blue">PRIVACY NOTICE</h1>
                </div>
                <div class="regular">
                    <p>
                        This document is composed by the Privacy Notice for the
                        purposes of the provisions of the Federal Law for the Protection of
                        Personal Data in Possession of Private Parties (the "LFPDP") and
                        the provisions that emanate from it or are related to it. This
                        Privacy Notice (referred to as "Notice") applies to the personal
                        information collected about the Data Subject by <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>
                        , in it´s capacity as Data Controller. The
                        purpose of this Notice is to protect your personal data, through it’s
                        legitimate, controlled and informed treatment, in order to
                        guarantee your privacy, as well as your right to informational selfdetermination.
                    </p>
                    <p>
                        According to article 3, section V, of the Law, Personal Data is
                        understood as: Any information concerning an identified or
                        identifiable natural person according to the provisions of section I
                        of article 16 of the Law, will be the Responsible for your personal
                        information (Personal Data).
                    </p>
                    <h6 class="oBold">What information do we collect?</h6>
                    <p>
                        The Responsible collects information that can reasonably identify
                        you, for example, but not limited to: your first and last name; date
                        of birth; e-mail address, general information of your profile.
                    </p>
                    <h6 class="oBold">How do we use or share the information we collect?</h6>
                    <p>
                        By sending via email your personal information to the different
                        representatives of <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> and/or
                        completing the online application form that appears on the page,
                        you accept and authorize <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> to
                        use and treat in an automated way your personal data and
                        information provided, which will be part of our database with the
                        purpose of using them in an enunciative, but not limited way to: 
                    </p>
                    <p>
                        PEAR as responsible for the treatment of your personal data, is
                        obliged to comply with the principles of legality, consent,
                        information, quality, purpose, loyalty, proportionality and
                        responsibility protected by the Law; therefore, based on articles
                        13 and 14 of the Law, <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> is
                        committed to keep your personal data strictly confidential, as well
                        as to maintain the administrative, technical and physical security
                        measures to protect them against any damage, loss, alteration,
                        access or unauthorized treatment. 
                    </p>
                    <h6 class="oBold">How to contact our Personal Data Department?</h6>
                    <p>
                        For any communication about our Privacy Notice, please contact
                        our Personal Data Department: <a href="maito:amtialejandra@gmail.com?Subject=Privacy%20Policy%20AMTI_USA" class="a_none_style txt-blue">amtialejandra@gmail.com</a> 
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

    .bg-yellow-blue{
        background: rgb(107,199,196);
        background: linear-gradient(160deg, rgba(107,199,196,1) 0%, rgba(243,173,61,1) 61%, rgba(243,173,61,1) 100%);
        color: #000000;
    }
    .icon-fb{
        width: 11.5px;
    }
    .icon-ig{
        width: 20px;
    }
    .icon-phone{
        width: 20px;
        margin-right: 1rem;
        margin-bottom: 0.3rem;
    }
    .icon-whats{
        width: 20px;
        margin-right: 1rem;
        margin-bottom: 0.3rem;
    }
    .icon-mail{
        width: 20px;
        margin-right: 1rem;
        margin-bottom: 0.3rem;
    }
    .bg-continent{
        background-image: url('~@/assets/images/bg-continent.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
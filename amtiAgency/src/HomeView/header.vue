<template>
     <a href="https://api.whatsapp.com/send?phone=523337883222" class="btn-flotante-whats" target="_blank" rel="noopener noreferrer">
        <font-awesome-icon icon="fa-brands fa-whatsapp" class="fa-brands fa-whatsapp icono-btn" />
     </a>
     <a href="tel:+17477778619" class="btn-flotante-phone" target="_blank" rel="noopener noreferrer">
        <font-awesome-icon icon="fa-solid fa-phone"  class="fa-solid fa-phone icono-btn"/>
    </a>
    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img :src="logoAmtiAzul" alt="AMTI" class="img-fluid"/>
              </a>
              <div class="">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <div class="d-none d-sm-none d-md-block">
                        <div class="bg-blue-green py-3">
                            <div class="mx-4">
                                <a href=" tel:+74719006093" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                                    <h3 class="oRegular h6"><b class="oExtraBold">Call us today:</b>+1 (747) 7778 619</h3>
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
                        <a href="tel:+17477778619" class="a_none_style text-white" target="_blank" rel="noopener noreferrer">
                            <h3 class="oRegular h6"><b class="oExtraBold">Call us today:</b>+1 (747) 7778 619</h3>
                        </a>
                    </div>
                </div>
            </div>
          <!-- TRAVEL THE WORLD WITHOUT LIMITS -->
            <div class="bg-index py-5" :style="bgHeader">
                <div class="container">
                    <div class="row">
                        <div class="text-center txt-index" data-aos="fade-down" data-aos-duration="1800">
                            <h1 class="regular display-3">Travel the world</h1>
                            <h1 class="rExtraBold display-3">without limits</h1>
                        </div>
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
</template>
<script>
//IMAGES
    import logoAmtiAzul from 'ASSETS/images/logo-azul-amti'
    import bgHeader from 'ASSETS/images/bg-index'
    import bgMenu from 'ASSETS/images/bg-menu'
    import logoAmtiBco from 'ASSETS/images/logo-white'
    import logoBB from 'ASSETS/images/materialized-negro'
    import bgContinente from 'ASSETS/images/bg-continent'


    export default{
        setup(){
            return{
                logoAmtiAzul,
                bgHeader,
                bgMenu,
                logoAmtiBco,
                logoBB, 
                bgContinente
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
                bgHeader: { backgroundImage: `url('${bgHeader}')` },
                bgContinente: { backgroundImage: `url('${bgContinente}')` } 
            };
        },
    }


  /*var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101314932771727");
      chatbox.setAttribute("attribution", "biz_inbox");

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
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));*/
      

</script>
<style scoped>
    .bg-blue-green{
        background: rgb(49,177,167);
        background: linear-gradient(140deg, rgba(49,177,167,0.9) 3%, rgba(15,65,73,0.9) 30%, rgba(15,65,73,0.9) 100%);
        color: #fff;
    }
    .bg-index{
        background-image: url('~@/assets/images/bg-index.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        color: #fff;
        height: 80vh;
    }
    .bg-continent{
        background-image: url('~@/assets/images/bg-continent.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .bg-yellow-blue{
        background: rgb(107,199,196);
        background: linear-gradient(160deg, rgba(107,199,196,1) 0%, rgba(243,173,61,1) 61%, rgba(243,173,61,1) 100%);
        color: #000000;
    }
    .icono-btn{
        margin-left: 0.8rem;
        color: #fff;
    }
    .btn-flotante-whats{
        position: fixed;
        bottom: 100px;
        right: 20px;
        transition: all 300ms ease 0ms;
        z-index: 99;
        font-size: 40px;
        width: 60px;
        height: 60px;
        background: rgb(49,177,167);
        background: linear-gradient(140deg, rgba(49,177,167,0.9) 3%, rgba(15,65,73,0.9) 30%, rgba(15,65,73,0.9) 100%);
        border-radius: 100%;
    }
    .btn-flotante-whats:hover {
        transform: translateY(-7px);
    }
    .fa-phone{
        margin-top: 0.8rem;
        margin-left: 0.9rem;
    }
    .fa-bars{
        color: #1F7575;
        font-size: 1.5rem;
        cursor: pointer;
    }
    .btn-flotante-phone{
        position: fixed;
        bottom: 180px;
        right: 20px;
        transition: all 300ms ease 0ms;
        z-index: 99;
        font-size: 30px;
        width: 60px;
        height: 60px;
        background: rgb(49,177,167);
        background: linear-gradient(140deg, rgba(49,177,167,0.9) 3%, rgba(15,65,73,0.9) 30%, rgba(15,65,73,0.9) 100%);
        border-radius: 100%;
    }
    .btn-flotante-phone:hover {
        transform: translateY(-7px);
    }
    .txt-index{
        margin-top: 21rem;
    }
    .logo-menu{
        width: 150px;
    }
    .fa-xmark{
        color: #000000;
        font-size: 2rem;
        cursor: pointer;
    }
</style>
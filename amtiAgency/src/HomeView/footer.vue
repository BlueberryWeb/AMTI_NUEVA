<template>
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
    import logoAmti from 'ASSETS/images/logo-white'
    import iconPhone from 'ASSETS/images/icon-phone'
    import iconWhats from 'ASSETS/images/icon-whats'
    import iconMail from 'ASSETS/images/icon-mail'
    import iconFB from 'ASSETS/images/icon-fb'
    import iconIG from 'ASSETS/images/icon-ig'
    import bgContinente from 'ASSETS/images/bg-continent'
    import logoBB from 'ASSETS/images/materialized-negro'
        export default{
            setup(){
                return{
                    logoAmti,
                    bgContinente,
                    iconPhone,
                    iconWhats,
                    iconMail,
                    iconFB,
                    iconIG,
                    logoBB
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
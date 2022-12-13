<template>
     <!-- TRAVEL THE WORD WITHOUT LIMITS -->
     <div class="container-fluid p-0 bg-blue">
        <div class="row p-0 mb-4">
            <div class="bg-travel">
                <img :src="bgWorld" alt="AMTI" class="img-fluid"/>
                <div class="txt-bg-travel"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <h1 class="regular display-3">Travel the world</h1>
                    <h1 class="rExtraBold display-3">without limits</h1>
                </div>
            </div>
        </div>
        <!-- NEED AND GET IDP -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <div class="">
                        <div class="text-center">
                            <img :src="iconIDP" alt="IDP" class="img-fluid icon-idp mb-3"/>
                            <h1 class="rExtraBold">Why do I</h1>
                            <h1 class="rExtraBold">need an <b class="txt-yellow">IDP?</b></h1>
                        </div>
                        <div class="d-none d-sm-none d-md-block">
                            <div class="oRegular mt-5 text-start txt-get-need mx-5">
                                <p ><b class="oBold">The IDP helps you secure your trip abroad.</b> </p>
                                <p class="">If you plan to drive abroad, car rental companies often require it </p>
                                <p class="">and traffic authorities ask for you to show your foreign driver’s</p>
                                <p class="">license. Even if you do not plan to drive or rent a car during your </p>
                                <p class="">stay abroad, carrying an identity document provides an additional </p>
                                <p class="">measure of security and peace of mind in case of unexpected</p>
                                <p class="">circumstances.</p>
                            </div>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <div class="oRegular mt-5 text-start txt-get-need mx-5">
                                <p ><b class="oBold">The IDP helps you secure your trip abroad.</b>  
                                If you plan to drive abroad, car rental companies often require it 
                                and traffic authorities ask for it if you show your foreign drivers 
                                license. Even if you do not plan to drive or rent a car during your 
                                stay abroad, carrying an identity document provides an additional 
                                measure of security and peace of mind in case of unexpected 
                                circumstances.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <div class="">
                        <div class="text-center">
                            <img :src="iconIDP" alt="IDP" class="img-fluid icon-idp mb-3"/>
                            <h1 class="rExtraBold">How did I get</h1>
                            <h1 class="rExtraBold">an <b class="txt-yellow">IDP?</b></h1>
                        </div>
                        <div class="d-none d-sm-none d-md-block">
                            <div class="oRegular mt-5 text-start txt-get-need mx-4">
                                <p ><b class="oBold">Complete our simple Application form</b>, mail it to the address </p>
                                <p class="">shown on the application along with two passport sized </p>
                                <p class="">photographs, photocopies of the front</p>
                                <p class="">and back of your drivers license and your check or money order </p>
                                <p class="">for the IDP issuance fee choosing the 1, 3 or 5 years duration IDP - </p>
                                <p class="">plus your choice of shipping and handling options. No written or </p>
                                <p class="">driving skills test is required.</p>
                            </div>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <div class="oRegular mt-5 text-start txt-get-need mx-4">
                                <p ><b class="oBold">Complete our simple Application form</b>, mail it to the address 
                                shown on the application along with two passport sized 
                                photographs, photocopies of the front 
                                and back of your drivers license and your check or money order 
                                for the IDP issuance fee choosing the 1, 3 or 5 years duration IDP - 
                                plus your choice of shipping and handling options. No written or 
                                driving skills test is required.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- AMTI's IDP Periods -->
        <div class="container bg-continent mt-5 py-5" :style="bgContinente">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="row pt-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 pt-5 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="text-end pt-3 tit-periods">
                                <h1 class="rExtraBold">AMTI’s IDP</h1>
                                <h1 class="rExtraBold txt-yellow">periods</h1>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="mx-4">
                                <div class="card-period py-4">
                                    <div class="text-center">
                                        <h1 class="oExtraBold display-2">3</h1>
                                        <h1 class="oRegular h3 mb-3">years</h1>
                                        <img :src="iconInternational" alt="INTERNATIONAL DRIVING PERIOD" class="img-fluid icon-licence"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="mx-4">
                                <div class="card-period py-4">
                                    <div class="text-center">
                                        <h1 class="oExtraBold display-2">5</h1>
                                        <h1 class="oRegular h3 mb-3">years</h1>
                                        <img :src="iconInternational" alt="INTERNATIONAL DRIVING PERIOD" class="img-fluid icon-licence"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="mx-4">
                                <div class="card-period py-4">
                                    <div class="text-center">
                                        <h1 class="oExtraBold display-2">1</h1>
                                        <h1 class="oRegular h3 mb-3">year</h1>
                                        <img :src="iconInternational" alt="INTERNATIONAL DRIVING PERIOD" class="img-fluid icon-licence"/>
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
</template>
<script>
//IMAGES
    import bgWorld from 'ASSETS/images/bg-travel-the-world'
    import iconIDP from 'ASSETS/images/icon-IDP-white'
    import bgContinente from 'ASSETS/images/bg-continent'
    import iconInternational from 'ASSETS/images/international-driving'
        export default{
            setup(){
                return{
                    bgWorld,
                    iconIDP,
                    bgContinente,
                    iconInternational
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
    .bg-blue{
        background: rgb(48,172,163);
        background: linear-gradient(180deg, rgba(48,172,163,0.9) 7%, rgba(15,65,73,0.9) 58%, rgba(15,65,73,0.9) 100%);
        color: #fff;
    }
    .bg-travel{
        position: relative;
        color: #fff;
    }
    .bg-continent{
        background-image: url('~@/assets/images/bg-continent.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .txt-bg-travel{
        position: absolute;
        text-align: center;
        top: 60%;
        left: 35%;
    }
    .icon-idp{
        width: 100px;
    }
    .txt-get-need p{
        line-height: 95%;
        font-size: 14px;
        font-family: 'OpenSans Regular';
    }
    .icon-licence{
        width: 120px;
    }
    .card-period{
        background: rgb(107,199,196);
        background: linear-gradient(180deg, rgba(107,199,196,1) 0%, rgba(243,173,61,1) 89%, rgba(243,173,61,1) 100%);
        border-radius: 25px;
    }
</style>
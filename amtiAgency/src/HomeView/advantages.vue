<template>
     <!-- SECURITY, WIDE, SUPPORT -->
     <div class="container py-5" id="Advantages">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="mx-4">
                    <div class="cards-blue">
                        <div class="mx-4 py-5">
                            <div class="text-center">
                                <img :src="iconSecurity" alt="SECURITY AND REGULATIONS" class="img-fluid icon-cards-blue mb-5"/>
                                <h2 class="rExtraBold h1">Security &</h2>
                                <h2 class="rExtraBold txt-yellow h1">regulations</h2>
                            </div>
                            <div class="d-none d-sm-none d-md-block">
                                <div class="mx-5 mt-5 txt-cards-blue">
                                    <p>Your license is protected </p>
                                    <p>under all authorities </p>
                                    <p>regulations.</p>
                                </div>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <div class="mx-5 mt-5">
                                    <p>Your license is protected 
                                    under all authorities 
                                    regulations.</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="mx-4">
                    <div class="cards-blue">
                        <div class="mx-4 py-5">
                            <div class="text-center">
                                <img :src="iconWide" alt="SECURITY AND REGULATIONS" class="img-fluid icon-cards-blue mb-5"/>
                                <h2 class="rExtraBold h1">Wide</h2>
                                <h2 class="rExtraBold txt-yellow h1">coverage</h2>
                            </div>
                            <div class="d-none d-sm-none d-md-block">
                                <div class="mx-5 mt-5 txt-cards-blue">
                                    <p>AMTI’s IDP has an extensive </p>
                                    <p>coverage in more than 130 </p>
                                    <p>countries around the world.</p>
                                </div>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <div class="mx-5 mt-5">
                                    <p>AMTI’s IDP has an extensive 
                                    coverage in more than 130 
                                    countries around the world.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="mx-4">
                    <div class="cards-blue">
                        <div class="mx-4 py-5">
                            <div class="text-center">
                                <img :src="iconSupport" alt="SECURITY AND REGULATIONS" class="img-fluid icon-cards-blue mb-5"/>
                                <h2 class="rExtraBold h1">Support & </h2>
                                <h2 class="rExtraBold txt-yellow h1">attention</h2>
                            </div>
                            <div class="d-none d-sm-none d-md-block">
                                <div class="mx-5 mt-5 txt-cards-blue">
                                    <p>You will have personalized </p>
                                    <p>customer service attention</p>
                                    <p>24/7.</p>
                                </div>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <div class="mx-5 mt-5">
                                    <p>You will have personalized 
                                    customer service attention
                                    24/7.</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</template>
<script>
//IMAGES
    import iconSecurity from 'ASSETS/images/icon-security'
    import iconWide from 'ASSETS/images/icon-wide'
    import iconSupport from 'ASSETS/images/icon-support'
        export default{
            setup(){
                return{
                    iconSecurity,
                    iconWide,
                    iconSupport
                }
            },
            methods: {
                redirect(name){
                    this.$router.push({
                    name:name
                    })
                }
            },
        }
</script>
<style scoped>
    .icon-cards-blue{
        width: 80px;
    }
    .cards-blue{
        background: rgb(48,172,163);
        background: linear-gradient(180deg, rgba(48,172,163,0.9) 0%, rgba(15,65,73,0.9) 66%, rgba(15,65,73,0.9) 100%);
        border-radius: 35px;
        color: #fff;
    }
    .cards-blue p{
        font-family: 'OpenSans Regular';
        line-height: 80%;
    }
</style>
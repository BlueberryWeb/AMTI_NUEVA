<template>
    <!-- TRAVEL THE WORLD CAREFREE -->
    <div class="container-fluid p-0 bg-blue" id="Process-your-IDP">
        <div class="row p-0">
            <div class="bg-travel"  >
                <img :src="bgTravel" alt="AMTI" class="img-fluid"/>
                <div class="txt-bg-travel " data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <h1 class="regular display-3">Travel the world</h1>
                    <h1 class="rExtraBold display-3 ">carefree</h1>
                </div>
            </div>
        </div>
        <div class="row py-5"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
            <div class="text-center">
                <h1 class="rExtraBold">Process your IDP today</h1>
                <h1 class="rExtraBold txt-yellow">with these simple steps</h1>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="text-center mb-2">
                                <img :src="iconWide1" alt="COVERAGE AND VALIDITY" class="img-fluid icon-advantages mb-4"/>
                                <h1 class="rExtraBold h3">Coverage & </h1>
                                <h1 class="rExtraBold txt-yellow h3">validity</h1>
                            </div>
                            <div class="oRegular txt-advantages">
                                <p>Check the coverage of </p>
                                <p>the country and choose</p>
                                <p>the validity of your </p>
                                <p>license.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <img :src="arrow" alt="AMTI" class="img-fluid icon-arrow d-none d-sm-none d-md-block"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="text-center mb-2">
                                <img :src="iconOnline" alt="COVERAGE AND VALIDITY" class="img-fluid icon-advantages mb-4"/>
                                <h1 class="rExtraBold h3">Online</h1>
                                <h1 class="rExtraBold txt-yellow h3">form</h1>
                            </div>
                            <div class="oRegular txt-advantages">
                                <p>Complete the steps </p>
                                <p>through our online form.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <img :src="arrow" alt="AMTI" class="img-fluid icon-arrow d-none d-sm-none d-md-block"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="text-center mb-2">
                                <img :src="iconPayment" alt="COVERAGE AND VALIDITY" class="img-fluid icon-advantages mb-4"/>
                                <h1 class="rExtraBold h3">Make the </h1>
                                <h1 class="rExtraBold txt-yellow h3">payment</h1>
                            </div>
                            <div class="oRegular txt-advantages">
                                <p>Make your license  </p>
                                <p>payment through the </p>
                                <p>accepted methods.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <img :src="arrow" alt="AMTI" class="img-fluid icon-arrow d-none d-sm-none d-md-block"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                            <div class="text-center mb-2">
                                <img :src="iconReady" alt="COVERAGE AND VALIDITY" class="img-fluid icon-advantages mb-4"/>
                                <h1 class="rExtraBold h3">IDP will be </h1>
                                <h1 class="rExtraBold txt-yellow h3">ready</h1>
                            </div>
                            <div class="oRegular txt-advantages">
                                <p>Done! Your license will be </p>
                                <p>in your hands in less than</p>
                                <p>7 days.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
//IMAGES
    import bgTravel from 'ASSETS/images/bg-travel-carefree'
    import iconWide1 from 'ASSETS/images/icon-wide'
    import arrow from 'ASSETS/images/icon-arrow'
    import iconOnline from 'ASSETS/images/icon-online'
    import iconPayment from'ASSETS/images/icon-payment'
    import iconReady from'ASSETS/images/icon-IDP-black'
        export default{
            setup(){
                return{
                    bgTravel,
                    iconWide1,
                    arrow,
                    iconOnline,
                    iconPayment,
                    iconReady
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
    .bg-travel{
        position: relative;
        color: #fff;
    }
    .bg-blue{
        background: rgb(48,172,163);
        background: linear-gradient(180deg, rgba(48,172,163,0.9) 7%, rgba(15,65,73,0.9) 58%, rgba(15,65,73,0.9) 100%);
        color: #fff;
    }
    .txt-bg-travel{
        position: absolute;
        text-align: center;
        top: 60%;
        left: 35%;
    }
    .icon-advantages{
        width: 80px;
    }
    .icon-arrow{
        margin-top: 8rem;
    }
    .txt-advantages p{
        font-size: 12.5px;
        line-height: 80%;
    }
    .txt-advantages{
        margin-left: 1.5rem;
        margin-right: 1.5rem;
    }
</style>
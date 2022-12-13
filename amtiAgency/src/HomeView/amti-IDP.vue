<template>
     <!-- AMTI's IDP Book -->
     <div class="bg-yellow-blue py-5" id="IDP-Booklet">
        <div class="container bg-continent py-5" :style="bgContinente">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <div class="mx-4 pt-3">
                        <img :src="passaportAmti" alt="AMTI IDP BOOK" class="img-fluid"/>
                    </div>
                     <div class = "text-center my-3">
                        <h6 class ="oRegular">That your international driving permit serves as a valid form of identification doesn’t make it an official document.</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <div class="mx-5 txt-amti-book">
                        <div class="mb-5">
                            <h1 class="rExtraBold display-4">AMTI’S IDP</h1>
                            <h1 class="rExtraBold text-white display-4">Booklet:</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <h6 class="regular h4">The IDP Booklet consists of your drivers</h6>
                                <h6 class="regular h4">license information that you provide </h6>
                                <h6 class="regular h4">during the online application process.</h6>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <h6 class="regular h4">The IDP Booklet consists of your drivers 
                                license information that you provide 
                                during the online application process.</h6>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="oRegular">
                                    <ul>
                                        <li>Life span period</li>
                                        <li>Vehicles you can drive with an IDP (in 9 languages)</li>
                                        <li> Your picture</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="oRegular">
                                    <ul>
                                        <li>Your signature</li>
                                        <li>Your First and Last name</li>
                                        <li>Your birth country</li>
                                        <li>Your date of birth</li>
                                        <li>Your country of residence</li>
                                    </ul>
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
    import passaportAmti from 'ASSETS/images/passaport-amti'
    import bgContinente from 'ASSETS/images/bg-continent'
        export default{
            setup(){
                return{
                    passaportAmti,
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
    .bg-continent{
        background-image: url('~@/assets/images/bg-continent.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
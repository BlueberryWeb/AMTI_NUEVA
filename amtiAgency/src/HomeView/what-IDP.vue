<template>
     <!-- WHAT IS A IDP -->
     <div class="bg-yellow-blue"   id="What-is-an-IDP?">
        <div class="bg-continent py-5" :style="bgContinente">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                        <div class="mx-3">
                            <img :src="internationaDriving" alt="INTERNATIONAL DRIVING PERMIT" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3 order-1-phone" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                        <div class="mx-5 txt-idp">
                            <h1 class="rExtraBold display-4">What is an IDP?</h1>
                            <h1 class="text-white rExtraBold display-4">And how does it works?</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p class="pt-4">The International Driving Permit (IDP) functions as an extension of </p>
                                <p>your national license to foreign countries, it translates your drivers</p>
                                <p>license into a language that your destination country understands,</p>
                                <p>identifying the holder as meeting the requirements of the United</p>
                                <p>Nations 1949 Convention on Road Traffic to foreign traffic </p>
                                <p>authorities and to car rental agencies.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p class="pt-4">The International Driving Permit (IDP) functions as an extension of 
                                your national license to foreign countries, it translates your drivers 
                                license into a language that your destination country understands, 
                                identifying the holder as meeting the requirements of the United 
                                Nations 1949 Convention on Road Traffic to foreign traffic 
                                authorities and to car rental agencies.</p>
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
    import internationaDriving from 'ASSETS/images/international-driving'
    import bgContinente from 'ASSETS/images/bg-continent'
        export default{
            setup(){
                return{
                    internationaDriving,
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
    .txt-idp p{
        line-height: 95%;
        font-size: 14px;
        font-family: 'OpenSans Regular';
    }
</style>
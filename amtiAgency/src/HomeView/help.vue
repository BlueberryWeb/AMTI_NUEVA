<template>
    <!-- NEED HELP OR HAVE A QUESTION -->
    <div class="container bg-continent-black pt-5" :style="bgContinenteBlack">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 order-2-phone"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="mx-2">
                    <img :src="needHelp" alt="AMTI" class="img-fluid"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 pt-4 order-1-phone"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="text-center pt-5">
                    <h1 class="rExtraBold display-4">Need help or have a question?</h1>
                    <h2 class="rExtraBold txt-blue display-5">Call Us</h2>
                    <a href="tel:+17477778619" class="a_none_style" target="_blank" rel="noopener noreferrer">
                        <h3 class="oSemiBold txt-blue h1">+1 (747) 7778 619 </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
//IMAGES
    import needHelp from 'ASSETS/images/need-help'
    import bgContinenteBlack from 'ASSETS/images/bg-continent-black'
        export default{
            setup(){
                return{
                    needHelp,
                    bgContinenteBlack
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
                    bgContinenteBlack: { backgroundImage: `url('${bgContinenteBlack}')` } 
                };
            },
        }
</script>
<style scoped>
    .bg-continent-black{
        background-image: url('~@/assets/images/bg-continent-black.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
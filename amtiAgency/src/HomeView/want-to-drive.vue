<template>
   <!-- WANT TO DRIVE ABROAD -->
   <div class="gray py-5">
        <div class="container bg-want-drive">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <div class="txt-want mx-4">
                        <div class="mb-5">
                            <h1 class="rExtraBold display-4 mb-0">Want to</h1>
                            <h1 class="rExtraBold txt-blue display-4 mt-0">drive abroad?</h1>
                            <h2 class="regular mb-4">Let us get in charge!</h2>
                            <p class="oRegular">We are a company dedicated to the </p>
                            <p class="oRegular">processing and issurance of international</p>
                            <p class="oRegular">licenses, so that you can be able to drive </p>
                            <p class="oRegular">abroad without worries.</p>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary btn-blue-green btn-know">
                                <a href="#What-is-an-IDP?" class="a_none_style text-white">
                                    <h6 class="pt-1">KNOW MORE</h6>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                    <div class="world-car">
                        <img :src="worldWant" alt="AMTI" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
//IMAGES
    import worldWant from 'ASSETS/images/what-is-IDP'
    export default{
        setup(){
            return{
                worldWant
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
    .world-car{
        margin-top: -100px;
        z-index: 99;
    }
    .world-car img{
        width: 700px;
    }
    .txt-want{
        margin-top: 5rem;
    }
    .txt-want p{
        line-height: 80%;
    }
</style>
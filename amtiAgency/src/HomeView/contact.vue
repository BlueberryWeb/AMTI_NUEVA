<template>
    <!-- FORM -->
    <div class="container-fluid" id="Contact">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0 order-2-phone"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <img :src="helpContact" alt="AMTI" class="img-fluid"/>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 pt-5 order-1-phone mb-3"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="mx-4 pt-2 txt-form mb-4">
                    <div class="mx-5 txt-form">
                        <h1 class="rExtraBold">Need help?</h1>
                        <h1 class="rExtraBold txt-blue">Get in touch with us</h1>
                        <h5 class="regular">We are always glad to hear from you.</h5>
                        <a href="tel:+17477778619" class="a_none_style" target="_blank" rel="noopener noreferrer">
                            <h1 class="oSemiBold txt-blue">+1 (747) 7778 619 </h1>
                        </a>
                    </div>
                </div>
                <div class="mx-2">
                    <form class="form-help mx-2" method="POST" action="{{ route('contact.index') }} " onsubmit="miFuncion()">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" name="name" required/>
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="form-label">Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone" required/> 
                        </div>
                        <div class=" mb-4">
                            <label for="message">Message</label>
                            <textarea class="form-control"  id="message" name="message" required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="g-recaptcha" data-sitekey="6Ld6KPwiAAAAAMoRsqUTyy8scDbaIjwY6L1I7bPB"></div>
                        </div>
                        <br/>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-send">SEND</button>
                        </div>
                             
                      </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
</template>
<script>
//IMAGES
    import helpContact from 'ASSETS/images/need-help-contact'
        export default{
            setup(){
                return{
                    helpContact
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
    function miFuncion() {
        var response = grecaptcha.getResponse();            
            if (response.length == 0) {        
                // window.alert("Favor de llenar el captcha");
                Swal.fire({
                    title: 'Error',
                    text: 'El campo "No soy un robot" no esta seleccionado',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#000000',
            })
                event.preventDefault();
                // window.history.back();       
            } else {
            console.log('Todo bien');
        }
    }
</script>
<style scoped>

</style>
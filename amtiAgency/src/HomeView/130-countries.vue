<template>
    <!-- AMTI'S IDP COVERAGE -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="txt-coverage">
                    <h1 class="regular">AMTI’s IDP coverage</h1>
                    <h1 class="rExtraBold display-3">In more than</h1>
                    <h1 class="rExtraBold txt-blue display-1">130</h1>
                    <h1 class="regular txt-blue">countries</h1>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary btn-blue-green btn-list" data-bs-toggle="modal" data-bs-target="#Countrys">
                        <h6 class="pt-1 oRegular">SEE THE FULL LIST</h6>
                    </button>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1800">
                <div class="text-center">
                    <img :src="worldCountries" alt="AMTI" class="img-fluid icon-world"/>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL COUNTRYS -->
    <div class="modal fade" id="Countrys" tabindex="-1" aria-labelledby="CountrysLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered ">
          <div class="modal-content bg-modal">
            <div class="modal-header p-0">
                <div class="container-fluid p-0">
                    <div class="row p-0 header-modal">
                        <div class="col-6 col-sm-6-col-md-6 col-lg-6 mt-4">
                            <img :src="logoAmtiBco" alt="AMTI" class="img-fluid logo-modal mb-4"/>
                            <h1 class="rExtraBold">AMTI’s IDP <b class="txt-yellow">coverage</b> </h1>
                        </div>
                        <div class="col-6 col-sm-6-col-md-6 col-lg-6 p-0 complement">
                            <img :src="compPopup" alt="AMTI" class="img-fluid compl-popup"/>
                        </div>
                    </div>
                </div>
             
            </div>
            <div class="modal-body">
                <div class="container bg-continent" :style="bgContinente">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                            <div class="row">
                                <!-- A - I -->
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                   <div class="A">
                                        <img :src="iconA" alt="A" class="img-fluid icon-letter"/>
                                        <p>
                                            Afghanistan, Albania, Algeria, Algeria, Andorra, Angola, Antigua, Argentina, Armenia,
                                            Aruba, Australia, Austria.
                                        </p>
                                    </div>
                                    <div class="B">
                                        <img :src="iconB" alt="B" class="img-fluid icon-letter"/>
                                        <p>
                                            Bahamas, Bangladesh, Barbados, Belarus, Belgium, Benin, Bolivia, Botswana, Brazil,
                                            Bulgaria, Bhutan
                                        </p>
                                    </div>
                                    <div class="C">
                                        <img :src="iconC" alt="C" class="img-fluid icon-letter"/>
                                        <p>
                                            Cameroon, Canada, Chad, Chile, China, Cyprus, Vatican City, Colombia, Comorros, Congo,
                                             Costa Rica, Croatia, Cuba, Cayman Islands, Cape Verde Island, Curacao.
                                        </p>
                                    </div>
                                    <div class="E">
                                        <img :src="iconE" alt="E" class="img-fluid icon-letter"/>
                                        <p>
                                            Ecuador, Egypt, El Salvador, Equatorial
                                            Guinea, Estonia.
                                        </p>
                                    </div>
                                   <div class="F">
                                        <img :src="iconF" alt="F" class="img-fluid icon-letter"/>
                                        <p>
                                            Fiji,  Finland, France.
                                        </p>
                                    </div>
                                    <div class="G">
                                        <img :src="iconG" alt="G" class="img-fluid icon-letter"/>
                                        <p>
                                            Gabon, Gambia, Georgia, Ghana, Gibraltar, Grenada, Greece, Guernsey, Guinea,  Guinea-Bissau, Guyana.
                                        </p>
                                    </div>
                                    <div class="H">
                                        <img :src="iconH" alt="H" class="img-fluid icon-letter"/>
                                        <p>
                                            Haiti, Hong Kong, Hungary.
                                        </p>
                                    </div>
                                    <div class="I">
                                        <img :src="iconI" alt="I" class="img-fluid icon-letter"/>
                                        <p>
                                            India, Indonesia, Iran, Ireland, Iceland,  Israel, ItalyIvory Coast.
                                        </p>
                                    </div>
                                    <div class="J">
                                        <img :src="iconJ" alt="J" class="img-fluid icon-letter"/>
                                        <p> 
                                            Jamaica, Jersey, Jordania, Japan
                                        </p>
                                    </div>
                                    <div class="K">
                                        <img :src="iconK" alt="K" class="img-fluid icon-letter"/>
                                        <p>
                                            Kenia, Kuwait.
                                        </p>
                                    </div>
                                    <div class="L">
                                        <img :src="iconL" alt="L" class="img-fluid icon-letter"/>
                                        <p>
                                            Laos, Liberia, Libya, Liechtenstein, Lithuania, Luxembourg.
                                        </p>
                                    </div>
                                    <div class="M">
                                        <img :src="iconM" alt="M" class="img-fluid icon-letter"/>
                                        <p>
                                            Macao, Madagascar, Malaysia, Malawi, Mali, Malta, Mauritania, Mexico, Morocco, Moldova,
                                            Monaco, Montserrat, Mozambique.
                                        </p>
                                    </div>
                                </div>
                                <!-- J - Q -->
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    
                                    <div class="N">
                                        <img :src="iconN" alt="N" class="img-fluid icon-letter"/>
                                        <p>
                                            Nepal, Nicaragua, Nigeria, Norway, New Caledonia, New Guinea, Netherlands, New Zealand.
                                        </p>
                                    </div>
                                    <div class="O">
                                        <img :src="iconO" alt="O" class="img-fluid icon-letter"/>
                                        <p>
                                            Oman
                                        </p>
                                    </div>
                                    <div class="P">
                                        <img :src="iconP" alt="P" class="img-fluid icon-letter"/>
                                        <p>
                                            Panama, Pakistan, Paraguay, Peru, Polynesia, French Polynesia, Poland, Philippines, Portugal.
                                        </p>
                                    </div>
                                    <div class="Q">
                                        <img :src="iconQ" alt="Q" class="img-fluid icon-letter"/>
                                        <p>
                                            Qatar
                                        </p>
                                    </div>
                                    <div class="R">
                                    <img :src="iconR" alt="R" class="img-fluid icon-letter"/>
                                    <p>
                                        Romania, Russia, Rwand
                                    </p>
                                </div>
                                <div class="S">
                                    <img :src="iconS" alt="S" class="img-fluid icon-letter"/>
                                    <p>
                                        San Marino, Sao Tome, Senegal, Seychelles, Sierra Leone, Singapore, Syria, Sri Lanka, South Africa, 
                                        Sudan, Sweden, Switzerland, Suriname, Swaziland, Saudi Arabia, Slovakia, Slovenia, Spain,.
                                    </p>
                                </div>
                                <div class="T">
                                    <img :src="iconT" alt="T" class="img-fluid icon-letter"/>
                                    <p>
                                        Thailand, Taiwan, Tajikistan, Tanzania, Togo, Trinidad and Tobago, Tunisia, Turkmenistan, Turkey.
                                    </p>
                                </div>
                                <div class="U">
                                    <img :src="iconU" alt="U" class="img-fluid icon-letter"/>
                                    <p>
                                        Ukraine, Uganda, Uruguay, Uzbekistan, United Arab
                                            Emirates, United Kingdom, United States.
                                    </p>
                                </div>
                                <div class="V">
                                    <img :src="iconV" alt="V" class="img-fluid icon-letter"/>
                                    <p>
                                        Venezuela, Vietnam
                                    </p>
                                </div>
                                <div class="Y">
                                    <img :src="iconY" alt="Y" class="img-fluid icon-letter"/>
                                    <p>
                                        Yemen.
                                    </p>
                                </div>
                                <div class="Z">
                                    <img :src="iconZ" alt="Z" class="img-fluid icon-letter"/>
                                    <p>
                                        Zambia.
                                    </p>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</template>
<script>
//IMAGES
    import worldCountries from 'ASSETS/images/world'
    import bgContinente from 'ASSETS/images/bg-continent'
    import logoAmtiBco from 'ASSETS/images/logo-white'
    import compPopup from 'ASSETS/images/compl-popup'
    import iconA from 'ASSETS/images/icon-A'
    import iconB from 'ASSETS/images/icon-B'
    import iconC from 'ASSETS/images/icon-C'
    import iconE from 'ASSETS/images/icon-E'
    import iconF from 'ASSETS/images/icon-F'
    import iconG from 'ASSETS/images/icon-G'
    import iconH from 'ASSETS/images/icon-H'
    import iconI from 'ASSETS/images/icon-I'
    import iconJ from 'ASSETS/images/icon-J'
    import iconK from 'ASSETS/images/icon-K'
    import iconL from 'ASSETS/images/icon-L'
    import iconM from 'ASSETS/images/icon-M'
    import iconN from 'ASSETS/images/icon-N'
    import iconO from 'ASSETS/images/icon-O'
    import iconP from 'ASSETS/images/icon-P'
    import iconQ from 'ASSETS/images/icon-Q'
    import iconR from 'ASSETS/images/icon-R'
    import iconS from 'ASSETS/images/icon-S'
    import iconT from 'ASSETS/images/icon-T'
    import iconU from 'ASSETS/images/icon-U'
    import iconV from 'ASSETS/images/icon-V'
    import iconY from 'ASSETS/images/icon-Y'
    import iconZ from 'ASSETS/images/icon-Z'
        export default{
            setup(){
                return{
                    worldCountries,
                    bgContinente,
                    logoAmtiBco,
                    compPopup,
                    iconA,
                    iconB,
                    iconC,
                    iconE,
                    iconF,
                    iconG,
                    iconH,
                    iconI,
                    iconJ,
                    iconK,
                    iconL,
                    iconM,
                    iconN,
                    iconO,
                    iconP,
                    iconQ,
                    iconR,
                    iconS,
                    iconT,
                    iconU,
                    iconV,
                    iconY,
                    iconZ
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
    .bg-modal{
        background: rgb(48,172,163);
        background: linear-gradient(160deg, rgba(48,172,163,1) 0%, rgba(15,65,73,1) 59%, rgba(15,65,73,1) 100%);
        color: #fff;
    }
    .logo-modal{
        width: 150px;
    }
    .complement{
        position: absolute;
        top: 0;
        right: 0;
        width: 30%;
    }
    .icon-letter{
        width: 50px;
    }
    .modal-header{
        border-bottom: none!important;
    }
    .header-modal{
        position: relative;
    }
</style>
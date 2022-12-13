<template>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                <img :src="logoAmtiAzul" alt="AMTI" class="img-fluid"/>
              </a>
              <div class="">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <div class="d-none d-sm-none d-md-block">
                        <div class="bg-blue-green py-3">
                            <div class="mx-4">
                                <a href=" tel:+525540324042" class="a_none_style text-white">
                                    <h3 class="oRegular h6"><b class="oExtraBold">Call us today:</b> 55 4032 4042</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item  pt-2">
                    <div class="text-center ms-3">
                        <font-awesome-icon icon="fa-solid fa-bars" class="fa-solid fa-bars" onclick="menu()"/>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
          <div class="d-block d-sm-block d-md-none">
                <div class="bg-blue-green py-3">
                    <div class="mx-4">
                        <a href=" tel:+525540324042" class="a_none_style text-white">
                            <h3 class="oRegular h6"><b class="oExtraBold">Call us today:</b> 55 4032 4042</h3>
                        </a>
                    </div>
                </div>
            </div>
    </header>
    <!-- MENU -->
    <div class="container-fluid p-0 bg-yellow-blue" id="menu">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2-phone">
                <img :src="bgMenu" alt="AMTI" class="img-fluid"/>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                <div class="container bg-continent" :style="bgContinente">
                    <div class="row">
                        <div class="text-end my-3 me-5">
                            <i class="fa-solid fa-xmark" id="close" onclick="cerrar()"></i>
                        </div>
                        <div class=" mx-4">
                            <div class="text-start">
                                <img :src="logoAmtiBco" alt="AMTI" class="img-fluid logo-menu mt-3 mb-5"/>
                                <a href="#header" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Index</h1>
                                </a>
                                <a href="#What-is-an-IDP?" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">What is an IDP?</h1>
                                </a>
                                <a href="#IDP-Booklet" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">IDP Booklet</h1>
                                </a>
                                <a href="#Advantages" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Advantages</h1>
                                </a>
                                <a href="#Process-your-IDP" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Process your IDP</h1>
                                </a>
                                <a href="#Contact" class="a_none_style">
                                    <h1 class="rExtraBold text-black mb-3">Contact</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2 pt-5 ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <h4 class="oRegular h6">© 2022 AMTI, All rights reserved</h4>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <img :src="logoBB" alt="Materialized by Blueberry" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="text-center">
                    <h1 class="rExtraBold txt-blue">COOKIES POLICY</h1>
                </div>
                <div class="text-end">
                    <h5 class="regular">Effective date: January 1, 2019.</h5>
                </div>
                <div class="regular">
                    <p>
                        At <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> we believe in being clear
                        about how we collect and use your data. To provide a greater
                        level of transparency, this Policy provides detailed information
                        about how and when we use cookies
                    </p>
                    <p>
                        This Cookie Policy applies to any product or service associated
                        with <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> or incorporated by
                        reference into this policy.
                    </p>
                    <h6 class="oBold">Does <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> use cookies?</h6>
                    <p>
                        Yes, we use cookies and other technologies to ensure that all
                        users of <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> have the best
                        possible experience. Cookies help us keep your account secure.
                        By continuing to use our services, you consent to the use of
                        cookies and other similar technologies for the purposes described
                        in this Policy.
                    </p>
                    <h6 class="oBold">What is a cookie?</h6>
                    <p>
                        A cookie is a small file placed on your electronic device that
                        enables the functionality of <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>
                        For example, cookies allow us to identify your device, provide you
                        with secure access to <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> and
                        our sites in general, and even help us know if someone is trying to
                        access your account from another device. Cookies also make it
                        easier for you to share content on <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> and help us show you ads that are relevant to you.
                    </p>
                    <h6 class="oBold">When does <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> use cookies?</h6>
                    <p>
                        We use cookies on our website (https:// pearreceipt.com/) Any
                        browser visiting these websites will receive cookies from us. We
                        also place cookies on your browser when you visit non<b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> sites that host our plug-ins (e.g., the
                        <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> "Share" button or tags).
                    </p>
                    <h6 class="oBold">What type of cookies does MIGUEL ÁNGEL SUBDIAZ VALDES use?</h6>
                    <p>
                        We use two types of cookies: persistent and session cookies. A
                        persistent cookie helps us recognize you as an existing user to
                        make it easier for you to return to MIGUEL ÁNGEL SUBDIAZ
                        VALDES or interact with our services without having to log in
                        again. Once you are logged in, the persistent cookie will remain
                        on your browser and will be read by <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> when you return to one of our websites or partner sites
                        that use our services (such as sharing or job application buttons).
                        Session cookies only last for the duration of the session (usually
                        for the duration of your current visit to a website or browser
                        session).
                    </p>
                    <h6 class="oBold">What are cookies used for?</h6>
                    <p>
                        Cookies can be used to recognize you when you visit <b class="txt-yellow" >MIGUEL ÁNGEL SUBDIAZ VALDES</b>, remember your preferences and offer
                        you a customized experience based on your settings. Cookies
                        also make your interactions on MIGUEL ÁNGEL SUBDIAZ
                        VALDES faster and safer. In addition, cookies allow us to show
                        you advertising on and off the MIGUEL ÁNGEL SUBDIAZ
                        VALDES websites, and deliver customized functionality through
                        <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> plug-ins such as our "Share"
                        button.
                    </p>
                    <h6 class="oBold">Categories of use Description</h6>
                    <p>
                        Authentication: If you are logged in to MIGUEL ÁNGEL SUBDIAZ
                        VALDES cookies help us to show you the right information and
                        personalize your experience. Security We use cookies to enable
                        and support our security features, and to help us detect fraudulent
                        activity and violations of our Terms of Use. Preferences, features
                        and services Cookies can tell us what languages you prefer and
                        what your communication preferences are. They can help you fill
                        out forms on <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> more easily.
                        They also provide you with customized features, information and
                        content in conjunction with our plug-ins. You can learn more about
                        plug-ins in our Privacy Policy.
                    </p>
                    <p>
                        Advertising We may use cookies to show you relevant advertising
                        both on and off the <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>
                        websites. We may also use a cookie to tell us whether someone
                        who viewed an advertisement visited it at a later time and took an
                        action (such as downloading a document or making a purchase)
                        on the advertiser's website. In addition, our partners may use a
                        cookie to determine whether we have shown an advertisement
                        and what results it obtained, or to obtain information about how
                        you interact with them. We may also work with a partner to show
                        you an advertisement on or off the <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> website, such as after you have visited a partner's
                        website or application.
                    </p>
                    <p>
                        Performance, analytics and research Cookies help us understand
                        the performance of our websites and plug-ins in different places.
                        We also use cookies to understand, improve and research
                        products, functionality and services, including when you access
                        <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> from other websites,
                        applications or devices such as your work computer or cell phone.
                    </p>
                    <h6 class="oBold">What is DNT technology?</h6>
                    <p>
                        "Do Not Track (DNT) is a concept promoted by U.S. regulatory
                        authorities, such as the U.S. Federal Trade Commission, for the
                        Internet industry with the objective of developing and
                        implementing a mechanism that allows Internet users to control
                        the tracking or tracing of their online activities on different
                        websites through the configuration of their browsers. The World
                        Wide Web Consortium (W3C) has been working for some time
                        with industry players, Internet browsers, technology companies
                        and standards bodies to develop a DNT technology standard.
                        Although some progress has been made, it has been limited. To
                        date, no standard has been adopted. As such <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> does not respond to "do not track" signals.
                    </p>
                    <h6 class="oBold">How are cookies used for advertising purposes?</h6>
                    <p>
                        Cookies and other advertising technologies such as web
                        beacons, pixels and tags help us to present relevant ads to you
                        more effectively. They also help us to provide you with added
                        audit data, research and reports for advertisers, to understand
                        and improve our service and to know what content has been
                        shown to you. Note: Because your browser may request these
                        ads and beacons directly from ad network servers, these
                        networks may view, edit or set their own cookies as if you had
                        requested to view a web page on their site. The advertisements
                        on <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> may also include third
                        party cookies.
                    </p>
                    <p>
                        If you are logged into<b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> or
                        another Service referenced in this Cookie Policy, or if you visit a
                        third party website with <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>
                        partner status and you are identified by one of our cookies on
                        your device, usage (such as your browsing behavior) and log data
                        (such as your IP address) will be associated with your account, as
                        described in Section 1.3 of our Privacy Policy. We also use added 
                        data from third parties, your profile data and your <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> activity.
                    </p>
                    <p>
                        If you are a <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> member but are
                        not logged into your account on a browser,<b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> may continue to record your interactions with
                        our services on that browser for 30 days to generate usage
                        analytics associated with our services, which we may share in
                        aggregate form with our advertising clients.
                    </p>
                    <p>
                        Unless you delete those cookies from your browser, we may use
                        that information to: Display more relevant, interest-based
                        advertising.
                    </p>
                    <p>
                        Provide aggregate reporting of advertising activity to advertisers
                        and the websites that host those ads. Help app and website
                        owners learn more about how visitors interact with their sites or
                        apps. 
                    </p>
                    <p>
                        Detect potential fraud and other risks and protect our users and
                        partners from them. Improve our products.
                    </p>
                    <p>
                        For more information about our use of cookies and similar
                        technologies for advertising purposes, as well as the controls
                        available to Members and Visitors, please see our Privacy Policy.
                    </p>
                    <h6 class="oBold">What third party cookies does <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> use?</h6>
                    <p>
                        In our cookie table you will find information about the third party
                        cookies we host on our sites. Please note that cookie names,
                        pixels and other technologies may change over time. Please also
                        note that companies and other types of organizations that
                        sponsor <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> to analyze your
                        interest in them. Control over cookies.
                    </p>
                    <p>
                        Most browsers allow you to control cookies through the
                        configuration preferences. However, if you limit the ability of
                        websites to save cookies, your overall user experience may
                        suffer, as it will not be a personalized experience.
                        You may also not be able to save personalized settings such as
                        login information.
                    </p>
                    <h6 class="oBold">What do I do if I don't want cookies saved on my computer or if I want to delete cookies already saved?</h6>
                    <p>
                        If you are a Visitor, you can opt-out of our advertising cookies
                        here. For Members, the ad settings can be found here. If you do
                        not want to receive cookies, you can also change your browser
                        settings on your computer or other electronic device you are using
                        to access our services. If you use MIGUEL ÁNGEL SUBDIAZ
                        VALDES without changing your browser settings, we will infer that
                        you wish to receive cookies from the MIGUEL ÁNGEL SUBDIAZ
                        VALDES website. Most browsers also offer you the option to
                        review and delete cookies, including those from <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b>
                    </p>
                    <p>
                        Please note that the <b class="txt-yellow" >AMTI AUTO CLUB SA DE CV.</b> website
                        will function properly without cookies. To find out more about
                        cookies, including which cookies have been set and how to
                        manage and delete them, visit www.allaboutcookies.org, o
                        www.aboutcookies.org .Other useful resources.
                    </p>
                    <p>
                        If you would like more information about how advertisers use
                        cookies, you may find the following links useful:
                        <ul>
                            <li>European Interactive Digital Advertising Alliance (EU).</li>
                            <li>Internet Advertising Bureau (US)</li>
                            <li>Internet Advertising Bureau (EU)</li>
                        </ul>
                    </p>
                    <p>
                        The companies that develop browsers provide help pages for
                        managing cookies in their products. If you wish, you can find
                        additional information below.
                        <ul>
                            <li>Google Chrome</li>
                            <li>Internet Explorer Mozilla Firefox</li>
                            <li>Safari (desktop version)</li>
                            <li>Safari (mobile version)</li>
                            <li>Navegador Android</li>
                            <li>Opera</li>
                            <li>Opera (mobile version)</li>
                        </ul>
                    </p>
                    <p>
                        If you need information about another browser, please consult the
                        documentation provided by its manufacturer.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
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
    import logoAmtiAzul from 'ASSETS/images/logo-azul-amti'
    import bgMenu from 'ASSETS/images/bg-menu'
    import logoAmtiBco from 'ASSETS/images/logo-white'
    import logoBB from 'ASSETS/images/materialized-negro'
    import bgContinente from 'ASSETS/images/bg-continent'
    import logoAmti from 'ASSETS/images/logo-white'
    import iconPhone from 'ASSETS/images/icon-phone'
    import iconWhats from 'ASSETS/images/icon-whats'
    import iconMail from 'ASSETS/images/icon-mail'
    import iconFB from 'ASSETS/images/icon-fb'
    import iconIG from 'ASSETS/images/icon-ig'
        export default{
            setup(){
                return{
                    logoAmtiAzul,
                    bgMenu,
                    logoAmtiBco,
                    logoBB, 
                    bgContinente,
                    logoAmti,
                    iconPhone,
                    iconWhats,
                    iconMail,
                    iconFB,
                    iconIG
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
    .bg-blue-green{
        background: rgb(49,177,167);
        background: linear-gradient(140deg, rgba(49,177,167,0.9) 3%, rgba(15,65,73,0.9) 30%, rgba(15,65,73,0.9) 100%);
        color: #fff;
    }
    .logo-menu{
        width: 150px;
    }
    .fa-bars{
        color: #1F7575;
        font-size: 1.5rem;
        cursor: pointer;
    }
</style>
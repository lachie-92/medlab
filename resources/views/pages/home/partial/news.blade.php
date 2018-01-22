<!-----------------------------------------------------------------------------------
--
-- News
--
------------------------------------------------------------------------------------->
<div class="container medlab_news_container">
    <div class="row">
        <!--
        -- News Main
        -->

        <div class="col-md-8 col-sm-12 col-xs-12">

            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        NEWS
                    </div>
                    <div class="medlab_news_item_body">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="/about/news" class="medlab_news_content_link">
                                <h2 class="medlab_news_content_title" style="text-align: center; font-size: 20px;">
                                    Medlab CEO Dr. Sean Hall on SkyNews Business Live: Medical Cannabis and Medlab's clinical trial
                                </h2>
                            </a>

                            <iframe src="https://player.vimeo.com/video/250050644" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <p style="text-align: center">Featured on SkyNews Business Live on the 4th of January 2018</p>

                        </div>

                    </div>
                </div>
            </div>

            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        NEW PRODUCTS
                    </div>
                    <div class="medlab_news_item_body">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h2 class="medlab_news_content_title">
                                <a href="/nutraceuticals/products/neuroactiv" class="medlab_news_content_link">
                                    NeuroActiv&trade;
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                NeuroActiv&trade; is a synergistic combination of biologically active nutrients designed to support a healthy nervous system, promote a healthy mood, and maintain normal cognitive function.
                            </p>
                            <a href="/nutraceuticals/products/neuroactiv" class="medlab_news_content_link">More Information</a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="/nutraceuticals/products/neuroactiv">
                                <img src="/img/products/neuroactiv/neuroactiv.png" alt="NeuroActiv" height="145px" width="auto" class="center-block"/>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top: 15px;">
                            <h2 class="medlab_news_content_title">
                                <a href="/nutraceuticals/products/lactoferrin-enhanced-60s" class="medlab_news_content_link">
                                    Lactoferrin Enhanced&trade;
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                Lactoferrin Enhanced&trade; is a unique combination of lactoferrin, olive leaf extract, probiotics and
                                zinc to support a healthy immune response and regulate gastrointestinal health.
                            </p>
                            <a href="/nutraceuticals/products/lactoferrin-enhanced-60s" class="medlab_news_content_link">More Information</a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="/nutraceuticals/products/lactoferrin-enhanced-60s">
                                <img src="/img/products/lactoferrin_enhanced_60s/lacoferrin_enhanced_60s_plastic_thumb.png" alt="Lactoferrin Enhanced" height="145px" width="auto" class="center-block"/>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top: 15px;">
                            <h2 class="medlab_news_content_title">
                                <a href="/nutraceuticals/products/bifidobiotic-60s" class="medlab_news_content_link">
                                    BifidoBiotic&trade;
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                BifidoBiotic&trade; is a multi-species probiotic formulation to restore and maintain a healthy
                                intestinal microbiome, across the lifespan. BifidoBiotic&trade; may help to re-regulate pro-inflammatory
                                cytokine levels and support a healthy immune system.
                            </p>
                            <a href="/nutraceuticals/products/bifidobiotic-60s" class="medlab_news_content_link">More Information</a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="/nutraceuticals/products/bifidobiotic-60s">
                                <img src="/img/products/bifidobiotic-60s/bifidobiotic_60s_thumb.png" alt="BifidoBiotic" height="150px" width="auto" style="margin-top: 30px;" class="center-block"/>
                            </a>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h2 class="medlab_news_content_title">
                                <a href="/nutraceuticals/products/quatrefolic-60s" class="medlab_news_content_link">
                                    Quatrefolic&reg;
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                Medlab Quatrefolic&reg; contains levomefolate glucosamine which is a form of biologically active
                                folate, 5-methyltetrahydrofolate (5-MTHF). Folate is essential for DNA synthesis, cell division,
                                red blood cell production and homocysteine metabolism. Demands for folate increase during pregnancy
                                due to increased requirements for foetal growth and development.
                            </p>
                            <a href="/nutraceuticals/products/quatrefolic-60s" class="medlab_news_content_link">More Information</a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 15px;">
                            <a href="/nutraceuticals/products/quatrefolic-60s">
                                <img src="/img/products/quatrefolic-60s/quatrefolic_60s_thumb.png" alt="Quatrefolic" height="145px" width="auto" class="center-block"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        UPCOMING WEBINAR
                    </div>
                    <div class="medlab_news_item_body">


                            <p>
                                <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="/education/webinars/register"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                    @else
                                        href="/account/login"
                                    @endif
                                >

                                    <img alt="Upcoming Webinar"
                                         src="/img/webinar/nanabis_webinar_brief.jpg"
                                         title="Upcoming Webinar"
                                         width="100%"

                                         class="img-responsive center-block">
                                </a>
                            </p>




                    </div>
                </div>
            </div>

            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        MEDLAB: CHRONIC DISEASE RESEARCH AND INNOVATION
                    </div>
                    <div class="medlab_news_item_body">



                        <div class="col-md-12 col-sm-12 col-xs-12">

                            





                            <iframe src="https://player.vimeo.com/video/220246612" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>





                        </div>



                    </div>
                </div>
            </div>


            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        MEDLAB EFFICACY MAGAZINE
                    </div>
                    <div class="medlab_news_item_body">



                        <div class="col-md-8 col-sm-12 col-xs-12">

                        <p>
                        <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="/efficacy/magazine_jm18"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                    target="_blank">

                                <img alt="Medlab Efficacy Magazine Edition 6"
                                     src="/img/efficacy/efficacy/EFFICACY Mag Web Banner 600x600 JAN18 v1.jpg"
                                     title="Medlab Efficacy Magazine Edition 6"
                                     width="450px"
                                     class="img-responsive center-block">
                            </a>
                        </p>

                        </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">


                                <h2 style="text-align:center;">Medlab's New Efficacy<sup>TM</sup> Magazine</h2>
                                <h4 style="color:grey; text-align:center;">A true integrative approach to medicine and health</h4>
                                <p style="text-align:center;">Issue 6: January 2018 - March 2018</p>
                                <p style="text-align:center;">Inflammatory Bowel Disease (IBD) and Adjunctive Treatments - in brief</p>
                                </br>



                            </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">


                        <p style="text-align:center;">Medlab’s quarterly magazine designed to educate and update Practitioners with Medlab research and industry advancements with a variety of contributing authors. <a href="/account/login" class="medlab_news_content_link">Register or log in</a> to view today.</p>

                            </div>
                            </div>
                </div>
            </div>

            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        FEATURED PRODUCTS
                    </div>
                    <div class="medlab_news_item_body">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <img src="/img/products/12mg_optima/Mg Optima Relax Sachets_Medlab.png" alt="Mg Optima™ Relax Featured product" width="400px" class="img-responsive center-block"/>
                            <br>
                            <h2 class="medlab_news_content_title">
                                    <sup>12</sup>Mg Optima Relax
                            </h2>
                            <p class="medlab_news_content_paragraph" style="text-align: justify">
                                <p>Please seek advice from your healthcare practitioner to see if this product is suitable for you.</p>
                                <p>Always read the label, use only as directed.</p>
                                <a href="/nutraceuticals/products/12mg-optima-relax-10pk-sachets-lemon-lime" class="medlab_news_content_link">Find out more here</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <!--div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        REGISTER FOR A PRACTITIONER ACCOUNT TODAY
                    </div>
                    <div class="medlab_news_item_body">
                        <p>
                            <a href="https://goo.gl/aGHsdZ" target="_blank">
                                <img alt="Register for a practitioner account"
                                     src="/img/news/pracacc_register.jpg"
                                     title="Register for a practitioner account"
                                     width="500px;"
                                     class="img-responsive center-block">
                            </a>
                        </p>
                    </div>
                </div>
            </div


        -->





        </div>
        <!--
        -- News Sidebar
        -->
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        WEBINARS
                    </div>
                    <div class="medlab_news_sidebar_item_body">

                        <p>
                            Educational webinars available to healthcare practitioners.
                            @if ( (Auth::guest() == true) )
                                <a href="/account/login">Register or Log-in to view</a>
                            @endif
                        </p>

                        <ul class="medlab_news_sidebar_list media-list">
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="https://register.gotowebinar.com/register/4151158159984603651"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                    @else
                                        href="/account/login"
                                    @endif
                                target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Webinar - Understanding the Trial" src="/img/webinar/nanabis_webinar_brief.jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_content_link">
                                            Understanding The Trial - NanaBis for advanced cancer pain
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Dr. Sean Hall, Professor Luis Vitetta for this informative webinar.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="/education/webinars/recordings/2017-year-in-review"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Medlab Year In Review" src="/img/webinar/Medlab Webinar Banner NOV17 v1[1].jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_content_link">
                                            Year In Review
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Dr. Sean Hall for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        PRACTITIONER EDUCATIONAL RESOURCE
                    </div>
                    <div class="medlab_news_sidebar_item_body">
                        <ul class="medlab_news_sidebar_list media-list">



                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.healthed.com.au/seminars/swh17/" target="_blank">

                                    <div class="media-left media-middle">
                                        <a href="/nutraceuticals/praceducationalresource">
                                            <img width="100%" src="/img/products/shippingandpayment/praceducationresource.png">
                                        </a>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <!--
            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        MEDLAB STAFF PARTICIPATION AT UPCOMING CONFERENCES
                    </div>
                    <div class="medlab_news_sidebar_item_body">
                        <ul class="medlab_news_sidebar_list media-list">


                            <li class="medlab_news_sidebar_list_item">
                                <div class="medlab_news_sidebar_list_item_title">
                                    <a href="http://functionalfoodscenter.net/22nd-int--conference-of-ffc.html" target="_blank">22nd International Conference of FFC - 10th International Symposium of ASFFBC</a>
                                </div>
                                <a href="http://functionalfoodscenter.net/22nd-int--conference-of-ffc.html" target="_blank">
                                    <img width="100%"  alt="ACNEM 2017" src="/img/news/functionalfood.jpg">
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <div class="medlab_news_sidebar_list_item_title">
                                    <a href="https://www.beneficialmicrobes2017.org/index.phputm_medium=email&utm_source=sharpspring&sslid=MzU0MTUzNDY3NDQxAAA&sseid=MzQ1MzczNbM0MwEA&jobid=95ec6faa-d2c3-4784-8dbc-e6cd6fddc3b1" target="_blank">The 6<sup>TH</sup> Beneficial Microbes Conference</a>
                                </div>
                                <a href="https://www.beneficialmicrobes2017.org/index.phputm_medium=email&utm_source=sharpspring&sslid=MzU0MTUzNDY3NDQxAAA&sseid=MzQ1MzczNbM0MwEA&jobid=95ec6faa-d2c3-4784-8dbc-e6cd6fddc3b1" target="_blank">
                                    <img width="100%"  alt="ACNEM 2017" src="/img/news/amsterdam.jpg">
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <div class="medlab_news_sidebar_list_item_title">
                                    <a href="https://www.probiotaevent.com/probiota-asia/" target="_blank">ProBiota Asia 2017</a>
                                </div>
                                <a href="https://www.probiotaevent.com/probiota-asia/" target="_blank">
                                    <img width="100%"  alt="ACNEM 2017" src="/img/news/Probiota-Asia-2017-Master-logo.jpg">
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <div class="medlab_news_sidebar_list_item_title">
                                    <a href="hhttp://www.global-engage.com/event/probiotics-usa/" target="_blank">The 2nd Probiotics Congress, San Diego, 2017</a>
                                </div>
                                <a href="http://www.global-engage.com/event/probiotics-usa/" target="_blank">
                                    <img width="100%"  alt="ACNEM 2017" src="/img/news/the-2nd-probiotics-congress-usa-288542.png">
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <div class="medlab_news_sidebar_list_item_title">
                                    <a href="https://www.cosa.org.au/events/2017/11/cosas-44th-annual-scientific-meeting-2017.aspx" target="_blank">COSA’s 44th Annual Scientific Meeting</a>
                                </div>
                                <a href="https://www.cosa.org.au/events/2017/11/cosas-44th-annual-scientific-meeting-2017.aspx" target="_blank">
                                    <img width="100%"  alt="ACNEM 2017" src="/img/news/COSA-ASM2017-08-e-sig-FINAL.png">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            -->

        </div>
    </div>
</div>
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

        <!--ANY URGENT UPDATES
            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        PHONE LINE UPGRADES
                    </div>
                    <div class="medlab_news_item_body">

                        <p>There may be slight disruptions to the phone lines at Medlab today due to an upgrade.</p>
                        <p>Please contact Medlab on our secondary Phone Number: 0280044572</p>
                        <p>We apologise for any inconveniences and appreciate your patience</p>


                    </div>
                </div>
            </div>

            -->



            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        Medlab Efficacy Magazine
                    </div>
                    <div class="medlab_news_item_body">



                        <div class="col-md-8 col-sm-12 col-xs-12">

                        <p>
                        <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="/efficacy/magazine_df16"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                    target="_blank">

                                <img alt="Medlab Efficacy Magazine Edition 1"
                                     src="/img/efficacy/efficacy/yearinreview.jpg"
                                     title="Medlab Efficacy Magazine Edition 2"
                                     width="450px"
                                     class="img-responsive center-block">
                            </a>
                        </p>

                        </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">


                                <h2 style="text-align:center;">Medlab's New Efficacy Magazine</h2>
                                <h4 style="color:grey; text-align:center;">A true integrative approach to medicine and health</h4>
                                <p style="text-align:center;">Issue 2: December 2016 - February 2017</p>
                                <p style="text-align:center;">A year in review: Research Update</p>
                                </br>



                            </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">


                        <p style="text-align:center;">Medlab’s quartely magazine designed to educate and update Practitioners with Medlab research and industry advancements with a variety of contributing authors. <a href="/account/login">Register or log in</a> to view today.</p>

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

                        <img src="/img/products/12mg_optima/mg_optima_relax_150g_citrus_tea.jpg" alt="Mg Optima™ Relax Featured product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/12mg-optima-relax-150g-citrus-tea" class="medlab_news_content_link">
                                New Flavour ‘Citrus Tea’ - <sup>12</sup>Mg Optima™ Relax 150g
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph" style="text-align: justify">
                            <sup>12</sup>Mg Optima™ Relax contains evidenced-based ingredients to support the natural metabolic pathways
                            for gamma-aminobutyric acid (GABA) production and activity, indicated to promote relaxation during times of stress.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/12mg-optima-relax-150g-citrus-tea" class="medlab_news_content_link">More Information</a>
                        </p>


                        <img src='/img/products/orsbiotic/orsbiotic.png' alt="ORSBiotic product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/orsbiotic" class="medlab_news_content_link">
                                Rehydrate with ORSBiotic™
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph" style="text-align: justify">
                            ORSBiotic™ is an Oral Rehydration Solution to replace fluids lost due to vomiting, diarrhoea and strenuous physical activity,
                            providing essential electrolytes together with selected probiotic species to provide therapeutic support for various triggers of diarrhoea and associated symptoms.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/orsbiotic" class="medlab_news_content_link">More Information</a>
                        </p>
                        



                    </div>
                </div>
            </div>

            <div class="medlab_news_item">
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
            </div>



            <div class="medlab_news_item">
            <div class="medlab_news_item_content_wrapper">
                <div class="medlab_news_item_title">
                    FEATURED CONFERENCE
                </div>
                <div class="medlab_news_item_body">
                    <h2 class="medlab_news_content_title">
                        Healthed Annual Women’s & Childrens Health 2017
                    </h2>
                    <p>
                        <img src="/img/news/WCH17-banner.jpg" alt="Microbiome" height="auto" width="100%"/>
                    </p>
                    <p>
                        When:  Saturday 18th February 2017 </br>
                        Where: ICC Sydney Convention Centre, NSW</br>
                    </p>


                </div>
            </div>
        </div>




            <div class="medlab_news_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_item_title">
                        NEWS
                    </div>
                    <div class="medlab_news_item_body">




                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            <a href="https://issuu.com/aiglobalmedia/docs/biotech_awards_2016_supplement/1" target="_blank" class="medlab_news_content_link">
                                Congratulations to the Medlab team! Best early-phase chronic disease drug discovery company. Click the link to review the article, featured on pages 16 and 17.</br>
                            </a>
                        </h2>
                        <br>
                        <p>
                            <a href="https://issuu.com/aiglobalmedia/docs/biotech_awards_2016_supplement/1" target="_blank">
                                <img alt="Best Early-Phase Chronic Disease Drug Discovery Company Award"
                                     src="/img/news/awardlogo.jpg"
                                     title="Best Early-Phase Chronic Disease Drug Discovery Company Award"
                                     width="50%"
                                     class="img-responsive center-block">
                            </a>
                        </p>
                        <br><br>


                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 23px;">
                            <a href="http://a.msn.com/05/en-au/AAe6yNf?ocid=se%20" target="_blank" class="medlab_news_content_link">
                                Medlab's research featured on Channel 9 news
                            </a>
                        </h2>
                        <p style="text-align: justify">
                            Medlab Clinical is at the forefront of research into obesity and the prevention of diabetes.
                            Medlab's probiotic formulation is currently undergoing clinical trial evaluation in
                            collaboration with the University of Sydney's Boden Institute as featured in a recent Channel
                            9 news item.
                        </p>
                        <p>
                            <a class="medlab_panel_content_link" href="http://a.msn.com/05/en-au/AAe6yNf?ocid=se%20" target="_blank">
                                Watch Interview
                            </a>
                        </p>
                    </div>
                </div>
            </div>


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

                        <p>Educational webinars available to healthcare practitioners. <a href="/account/login">Register or Log-in to view</a></p>

                        <ul class="medlab_news_sidebar_list media-list">
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="http://goo.gl/fUusyh"
                                        @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                        @else
                                        href="/account/login"
                                        @endif
                                        target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Understanding the Clinical Application of NanoCelle" src="/img/news/Medlab_nanocelle_webinar.jpeg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Understanding the Clinical Application of NanoCelle
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Professor Luis Vitetta for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                        href="http://goo.gl/uhkgv7"
                                        @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                        href="#"
                                        @else
                                        href="/account/login"
                                        @endif
                                        target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Unlocking the Clinical benefits of NRGBiotic" src="/img/news/MedlabNRG_webinar.jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Unlocking the Clinical benefits of NRGBiotic
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Dr Samantha Coulson for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="http://goo.gl/02ed6J"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                target="_blank">

                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Depression and The Gut Microbiome" src="/img/news/medlab_depressionwebinar.jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Depression and The Gut Microbiome
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Professor Luis Vitetta for this informative webinar.

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="http://goo.gl/uJHPxi"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                target="_blank">
                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="High Fat Diet, Probiotics and NAFLD" src="/img/news/Medlab_HFD_NALFD_Webinar.jpg" target="blank">
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            High Fat Diet, Probiotics and NAFLD
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Professor Luis Vitetta for this informative webinar.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="http://goo.gl/fBJJjj"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                target="_blank">
                                    <div class="media-left media-middle">
                                        <img class="medlab_news_sidebar_list_item_image" alt="Probiotics and Gut Health" src="/img/news/Medlab_Probiotic_and_Gut_Health_Webinar.jpg" target="_blank" >
                                    </div>
                                    <div class="media-body">
                                        <div class="medlab_news_sidebar_list_item_title">
                                            Probiotics and Gut Health
                                        </div>
                                        <div class="medlab_news_sidebar_list_item_body">
                                            Join Professor Luis Vitetta for this informative webinar.
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
                        Practitioner Educational Resource
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


            <div class="medlab_news_sidebar_item">
                <div class="medlab_news_item_content_wrapper">
                    <div class="medlab_news_sidebar_item_title">
                        UPCOMING CONFERENCES
                    </div>
                    <div class="medlab_news_sidebar_item_body">
                        <ul class="medlab_news_sidebar_list media-list">



                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.healthed.com.au/seminars/swh17/" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        Healthed Annual Women’s & Childrens Health 2017</br>
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%"  alt="ACNEM 2017" src="/img/news/WCH17-banner.jpg">
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
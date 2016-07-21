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
                        FEATURED PRODUCT
                    </div>
                    <div class="medlab_news_item_body">

                        <img src="/img/products/manuka-c/mauka-c_thumb.png" alt="Manuka-C Featured product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/manuka-c" class="medlab_news_content_link">
                                New - Manuka-C&trade;
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph">
                            Manuka-C&trade; is scientifically formulated to support optimal immune system function. It includes evidence-based
                            ingredients containing a blend of three ascorbates combined with glutathione and Manuka honey powder. Ascorbic acid
                            and zinc are vital for the optimal functioning of the immune system including the anti-microbial activity of white
                            blood cells and are also important for wound healing.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/manuka-c" class="medlab_news_content_link">More Information</a>
                        </p>

                        <img src="/img/products/nos/nos_thumb.png" alt="NOS Featured product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/nos" class="medlab_news_content_link">
                                New - NOS <small>Nitric Oxide Support</small>
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph">
                            A targeted pre-exercise sports food containing a selection of evidence-based ingredients combined to support
                            and optimise exercise performance. Creatine, L-arginine and the B vitamins support energy production during
                            strenuous exercise while beta-alanine helps to increase muscle carnosine levels.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/nos" class="medlab_news_content_link">More Information</a>
                        </p>
                        <img src="/img/products/sb_5b/sb5b_thumb.png" alt="SB5B Featured product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/sb-5b" class="medlab_news_content_link">
                                New - SB 5B&trade;
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph">
                            Saccharomyces cerevisiae ssp. boulardii (SB) is a beneficial probiotic yeast that helps to maintain gastrointestinal
                            function and integrity by supporting a healthy gut microbial profile. SB 5B™ assists in supporting healthy immune
                            function and may help to reduce inflammatory mediators in the gastrointestinal tract.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/sb-5b" class="medlab_news_content_link">More Information</a>
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
                        MEDLAB WEBINAR
                    </div>
                    <div class="medlab_news_item_body">

                        <p>
                            <a
                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="http://goo.gl/fUusyh"
                                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                    @else
                                    href="/account/login"
                                    @endif
                                    target="_blank">

                                <img alt="Understanding the Clinical Application of NanoCelle"
                                     src="/img/news/Medlab_nanocelle_webinar.jpeg"
                                     title="Understanding the Clinical Application of NanoCelle"
                                     width="450px"
                                     class="img-responsive center-block">
                            </a>
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
                            Professor Luis Vitetta presents Medlab Seminar in: Sydney, Melbourne, Gold Coast, Perth and Brisbane to our Health Practitioners.<br>
                        </h2>
                        <br>
                        <img alt="Medlab Seminars"
                             src="/img/news/Medlab_Seminar.jpg"
                             title="Medlab Seminars"
                             width="600px"
                             class="img-responsive center-block">
                        <br><br>


                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            <a href="https://www.a5m.net/events/category/annual-conference" target="_blank" class="medlab_news_content_link">
                                We are excited to announce our involvement in the upcoming AustralAsian Academy of Anti-Ageing Medicine (A5M)’s 10th Annual Conference, being held in Melbourne 6-7 August 2016.<br>
                            </a>
                        </h2>
                        <p>
                            <a href="https://www.a5m.net/events/category/annual-conference" target="_blank">
                                <img alt="10th Annual A5M Conference"
                                     src="/img/news/A5M_banner.jpg"
                                     title="10th Annual A5M Conference"
                                     width="600px"
                                     class="img-responsive center-block">
                            </a>
                        </p>
                        <p style="text-align: justify">
                            The conference aims to connect medical and health practitioners in Australia, as they come together
                            to learn and understand more about integrative and preventative approaches to treatment and medicine.
                            This is to address the future health crises caused by 21st century lifestyle habits and keep people
                            living a quality life for longer. Medlab will be exhibiting at booth 15 and Professor Luis Vitetta
                            will be presenting at this event.
                        </p>
                        <br><br>


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
                        UPCOMING CONFERENCES
                    </div>
                    <div class="medlab_news_sidebar_item_body">
                        <ul class="medlab_news_sidebar_list media-list">
                            <li class="medlab_news_sidebar_list_item">
                                <a href="https://nutritionmedicine.org.au/" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        Dr Samantha Coulson will be contributing to the scientific program.
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%"  alt="Diet and Gut Health " src="/img/news/Apr2016_nutrition_in_medicine.png" target="blank">
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.gpce.com.au/" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        Prof Luis Vitetta and Dr Samantha Coulson will be contributing to the scientific program.
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%" alt="Diet and Gut Health " src="/img/news/May2016_gpce_sydney.jpg" target="_blank" >
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.iddst.com/iddstkorea2016/" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        Mr Sean Hall will be contributing to the scientific program in South Korea.
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%" alt="Diet and Gut Health " src="/img/news/IDDST.png" target="_blank" >
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
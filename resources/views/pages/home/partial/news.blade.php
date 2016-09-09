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

                        <img src="/img/products/nanocelle_d3k2/nanocelle_d3k2_thumb.png" alt="NanoCelle D3 + K2 Featured product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/nanocelle-d3-k2" class="medlab_news_content_link">
                                New - NanoCelle D3 + K2
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph" style="text-align: justify">
                            NanoCelle™ D3 + K2 is developed from patent-protected nanocellization technology that produces
                            Vitamin D3 and Vitamin K2 submicron nanoparticles that are easily absorbed across the oral
                            mucosal epithelia. NanoCelle™ D3 + K2 is indicated to sustain mineral homeostasis facilitating
                            optimal immune function, cardiovascular health and bone metabolism, and to assist in the
                            management of medically diagnosed vitamin D deficiency.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/nanocelle-d3-k2" class="medlab_news_content_link">More Information</a>
                        </p>


                        <img src='/img/products/immune-5/Immune-5-vanilla_thumb.png' alt="Immune-5 product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/immune-5-vanilla" class="medlab_news_content_link">
                                New - Immune-5™ Vanilla or Raspberry
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph" style="text-align: justify">
                            Immune-5™ is a scientifically-based comprehensive formula containing two specific probiotic
                            species shown to assist with immune function and may assist with upper respiratory tract
                            infections. ResistAid™ is a prebiotic soluble fibre while Lactoferrin is a naturally occurring
                            protein found in the body with broad spectrum anti-microbial and anti-viral activity.
                            Colostrum provides important innate immune supporting proteins including the antibody IgG
                            that both activates and modulates the body defence processes.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/immune-5-vanilla" class="medlab_news_content_link">More Information</a>
                        </p>
                        

                        <img src="/img/products/manuka-c/mauka-c_thumb.png" alt="Manuka-C Featured product" height="150" width="auto" style="float: right;"/>
                        <h2 class="medlab_news_content_title">
                            <a href="/nutraceuticals/products/manuka-c" class="medlab_news_content_link">
                                New - Manuka-C&trade;
                            </a>
                        </h2>
                        <p class="medlab_news_content_paragraph" style="text-align: justify">
                            Manuka-C&trade; is scientifically formulated to support optimal immune system function. It includes evidence-based
                            ingredients containing a blend of three ascorbates combined with glutathione and Manuka honey powder. Ascorbic acid
                            and zinc are vital for the optimal functioning of the immune system including the anti-microbial activity of white
                            blood cells and are also important for wound healing.
                        </p>
                        <p class="medlab_news_content_paragraph">
                            <a href="/nutraceuticals/products/manuka-c" class="medlab_news_content_link">More Information</a>
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

                            Saturday 5th November 2016, Sofitel Hotel Auckland, New Zealand.
                            Professor Luis Vitetta will be a keynote speaker: Gut Microbiome and Evidence Based Interventions for Chronic Diseases.
                            Other topics include functional pathology testing for gut and methylation.

                        </h2>
                        <p>
                            For more information or to register for a place today, email: <a href="mailto:info@nutrisearch.co.nz">info@nutrisearch.co.nz</a>
                        </p>
                        <p>
                            <img alt="Nutrisearch"
                                 src="/img/news/nutrisearch.png"
                                 title="Nutrisearch"
                                 width="600px"
                                 class="img-responsive center-block">
                        </p>
                        <br><br>

                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            <a href="https://www.science.org.au/news-and-events/events/microbiome-exploring-role-microorganisms-ecosystem-processes-and-health" target="_blank" class="medlab_news_content_link">

                                Professor Luis Vitetta will be a keynote speaker and Talia Palacios (Sydney University PhD Scholor) will be making a presentation at the 2016 Theo Murphey Australian Frontiers of Science Symposium.

                            </a>
                        </h2>
                        <p>
                            <a href="https://www.science.org.au/news-and-events/events/microbiome-exploring-role-microorganisms-ecosystem-processes-and-health" target="_blank">
                                <img alt="Theo Murphy Australian Frontiers Of Science"
                                     src="/img/news/theo_murphy_australian_frontiers_of_science.jpg"
                                     title="Theo Murphy Australian Frontiers Of Science"
                                     width="600px"
                                     class="img-responsive center-block">
                            </a>
                        </p>
                        <br><br>

                        <h2 class="medlab_news_content_title" style="text-align: justify; font-size: 20px;">
                            <a href="http://gp16.com.au/" target="_blank" class="medlab_news_content_link">
                                Professor Luis Vitetta will be presenting at the Annual RACGP 'GP 16’ in Perth.</br>
                                We look froward to seeing you there - visit our Practitioner Consultants at booth 203.
                            </a>
                        </h2>
                        <p>
                            <a href="http://gp16.com.au/" target="_blank">
                                <img alt="10th Annual A5M Conference"
                                     src="/img/news/RACGP16.png"
                                     title="RACGP"
                                     width="600px"
                                     class="img-responsive center-block">
                            </a>
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
                                <div class="medlab_news_sidebar_list_item_title">
                                    (NZ) Professor Luis Vitetta will be contributing to the scientific program:
                                    Gut Microbiome and Evidence Based Interventions for Chronic Diseases.
                                </div>
                                <div>Register by email: <a href="mailto:info@nutrisearch.co.nz">info@nutrisearch.co.nz</a></div>
                                <div class="media-left media-middle">
                                    <img width="100%" alt="Nutrisearch" src="/img/news/nutrisearch.png">
                                </div>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a href="http://www.gp16.com.au/" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        Prof Luis Vitetta will be contributing to the scientific program.
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%" alt="GP16 Perth" src="/img/news/RACGP16.png">
                                    </div>
                                </a>
                            </li>
                            <li class="medlab_news_sidebar_list_item">
                                <a href="https://www.science.org.au/news-and-events/events/microbiome-exploring-role-microorganisms-ecosystem-processes-and-health" target="_blank">
                                    <div class="medlab_news_sidebar_list_item_title">
                                        Professor Luis Vitetta & Talia Palacios will be contributing to the scientific program.
                                    </div>
                                    <div class="media-left media-middle">
                                        <img width="100%"  alt="Microbiome" src="/img/news/theo_murphy_australian_frontiers_of_science.jpg">
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
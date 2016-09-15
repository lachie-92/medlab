<!-----------------------------------------------------------------------------------
--
-- About Medlab
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!--
            -- About Medlab
            -->




                    <div class="col-md-8 col-sm-12 col-xs-12">

                    <div class="medlab_news_item">
                        <div class="medlab_news_item_content_wrapper">
                            <div class="medlab_news_item_title">
                                Current Medlab Efficacy Magazine
                            </div>
                            <div class="medlab_news_item_body">

                                <p>
                                    <a
                                            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                            href="/efficacy/magazine_sn16"
                                            @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                            href="#"
                                            @else
                                            href="/account/login"
                                            @endif
                                            target="_blank">

                                        <img alt="Medlab Efficacy Magazine Edition 1"
                                             src="/img/news/EFFICACY Mag Web Banner 600x600 SEPT16 FINAL.jpg"
                                             title="Medlab Efficacy Magazine Edition 1"
                                             width="450px"
                                             class="img-responsive center-block">
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                        </div>


                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="medlab_news_sidebar_item">
                            <div class="medlab_news_item_content_wrapper">
                                <div class="medlab_news_sidebar_item_title">
                                    Past Medlab Efficacy Magazine
                                </div>
                                <div class="medlab_news_sidebar_item_body">
                                    <ul class="medlab_news_sidebar_list media-list">
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/human-ageing">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Understanding the Clinical Application of NanoCelle" src="/img/news/Medlab_nanocelle_webinar.jpeg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Human Ageing: Fish Fats, Orotic Acid and Probiotics.
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Professor Luis Vitetta and Dr Samantha Coulson.

                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/optimising-skeletal-muscle-function">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Unlocking the Clinical benefits of NRGBiotic" src="/img/news/MedlabNRG_webinar.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Optimising Skeletal Muscle Function
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Professor Luis Vitetta and Dr Samantha Coulson
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/obesity-intestinal-inflammation-and-probiotics">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Depression and The Gut Microbiome" src="/img/news/medlab_depressionwebinar.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Obesity, Intestinal Inflammation and Probiotics
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Dr Samantha Coulson and Professor Luis Vitetta

                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/role-of-bacteria-in-git-conditions">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="High Fat Diet, Probiotics and NAFLD" src="/img/news/Medlab_HFD_NALFD_Webinar.jpg" target="blank">
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Role of Bacteria in Gastrointestinal Conditions
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Dr Samantha Coulson, Professor Luis Vitetta
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/optimising-immunity-in-preparation-for-cold-and-flu-season">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Probiotics and Gut Health" src="/img/news/Medlab_Probiotic_and_Gut_Health_Webinar.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Optimising Immunity in preparation for cold and flu season
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Dr Samantha Coulson, Professor Luis Vitetta and Isabelle Ibrahim
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/vitamin-d-your-best-defence">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Probiotics and Gut Health" src="/img/news/Medlab_Probiotic_and_Gut_Health_Webinar.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Vitamin D – Your Best Defence Against The Flu
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Margaret Jasinska
                                                    </div>
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
    </div>

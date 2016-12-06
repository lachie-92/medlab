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
                                            href="/efficacy/magazine_df16"
                                            @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                            href="#"
                                            @else
                                            href="/account/login"
                                            @endif
                                            target="_blank">

                                        <img alt="Medlab Efficacy Magazine Edition 1"
                                             src="/img/efficacy/efficacy/yearinreview.jpg"
                                             title="Medlab Efficacy Magazine Edition 1"
                                             width="450px"
                                             class="img-responsive center-block">
                                    </a>
                                </p>
                                <h1 style="text-align:center;">Medlab's New Efficacy Magazine</h1>
                                <h4 style="color:grey; text-align:center;">A true integrative approach to medicine and health</h4>
                                <p style="text-align:center;">Issue 2: December 2016 – February 2017</p>
                                <p style="text-align:center;">A year in review: Research Update</p>
                                </br>
                                <p style="text-align:center;">Efficacy™ is designed to educate and update Practitioners with Medlab research developments, company progression and the latest industry advancements with a variety of contributing authors.</p>
                                <p style="text-align:center;">Available exclusively online, Efficacy™ can now host a variety of interactive content in an environmentally-friendly format. Efficacy™ Magazine is compatible with Microsoft, android and apple computers, tablets and phones.</p>
                                <p style="text-align:center;">Available to all healthcare practitioners when you <a href="/account/login">register or log in</a> today.</p>




                            </div>
                        </div>
                    </div>
                        </div>



                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="medlab_news_sidebar_item">
                            <div class="medlab_news_item_content_wrapper">
                                <div class="medlab_news_sidebar_item_title">
                                    Past Medlab Efficacy Magazine's
                                </div>
                                <div class="medlab_news_sidebar_item_body">
                                    <ul class="medlab_news_sidebar_list media-list">
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/magazine_sn16">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Understanding the Clinical Application of NanoCelle" src="/img/news/EFFICACY Mag Web Banner 600x600 SEPT16 FINAL.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        A Focus on the Gut-Brain Connection
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Issue 1: September - November 2016

                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="medlab_news_sidebar_item">
                            <div class="medlab_news_item_content_wrapper">
                                <div class="medlab_news_sidebar_item_title">
                                    Medlab Efficacy Articles
                                </div>
                                <div class="medlab_news_sidebar_item_body">
                                    <ul class="medlab_news_sidebar_list media-list">
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/human-ageing">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Understanding the Clinical Application of NanoCelle" src="/img/efficacy/efficacy/human_ageing.jpg" target="_blank" >
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
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Unlocking the Clinical benefits of NRGBiotic" src="/img/efficacy/efficacy/optimising skeletal muscle.jpg" target="_blank" >
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
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Depression and The Gut Microbiome" src="/img/efficacy/efficacy/obesity, intestinal inflammation.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Obesity, Intestinal Inflammation and Probiotics
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Professor Luis Vitetta and Dr Samantha Coulson

                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/role-of-bacteria-in-git-conditions">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="High Fat Diet, Probiotics and NAFLD" src="/img/efficacy/efficacy/role of bacteria.jpg" target="blank">
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Role of Bacteria in Gastrointestinal Conditions
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Professor Luis Vitetta and Dr Samantha Coulson
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/optimising-immunity-in-preparation-for-cold-and-flu-season">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Probiotics and Gut Health" src="/img/efficacy/efficacy/optimising immunity.jpg" target="_blank" >
                                                </div>
                                                <div class="media-body">
                                                    <div class="medlab_news_sidebar_list_item_title">
                                                        Optimising Immunity in preparation for cold and flu season
                                                    </div>
                                                    <div class="medlab_news_sidebar_list_item_body">
                                                        Professor Luis Vitetta, Dr Samantha Coulson and Isabelle Ibrahim
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="medlab_news_sidebar_list_item">
                                            <a href="/efficacy/vitamin-d-your-best-defence">
                                                <div class="media-left media-middle">
                                                    <img class="medlab_news_sidebar_list_item_image" alt="Probiotics and Gut Health" src="/img/efficacy/efficacy/vitamin D.jpg" target="_blank" >
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

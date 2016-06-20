<!-----------------------------------------------------------------------------------
--
-- Publications
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!--
            -- Webinars
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Webinars
                </div>
                <div class="panel-body medlab_panel_content">


                    <div class="medlab_news_item">
                        <div class="medlab_news_item_content_wrapper">

                            <div class="medlab_news_item_body">

                                <div class="container">
                                <div class="col-md-5 col-sm-12 col-xs-12">

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
                                <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Understanding the Clinical Applications of NanoCelle<sup>™</sup></h2>
                                        <p  style="text-align:center;">Presented by Professor Luis Vitetta</p>
                                        <h3 style="text-align:center;">What you will learn in this webinar:</h3>
                                        <ul >
                                            <li>What are nanoparticles, and their applications in medicine</li>
                                            <li>Safety of nanotechnology</li>
                                            <li>NanoCelle - what is it?
                                            <li>Oro-buccal delivery</li>
                                            <li>Medlab's Cannabis research</li>
                                            <li>Medlab's B12 comparative data</li>
                                        </ul>

                                </div>
                                    </div>
                                <hr>
                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">

                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="http://goo.gl/uhkgv7"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/account/login"
                                                @endif
                                                target="_blank">

                                            <img alt="Unlocking the Clinical benefits of NRGBiotic"
                                                 src="/img/news/MedlabNRG_webinar.jpg"
                                                 title="Unlocking the Clinical benefits of NRGBiotic"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Unlocking the Clinical benefits of NRGBiotic</h2>                                            </h2>
                                        <p  style="text-align:center;">Presented by Dr Samantha Coulson</p>
                                        <p  style="text-align:center;">Unlock the benefits on one of Medlab's most prominent products.
                                            Currently undergoing clinical trial after a published pilot study was conducted. </p>
                                        <h3 style="text-align:center;"> Topics covered in this clinically relevant webinar include:</h3>
                                        <ul >
                                            <li>What are nanoparticles, and their applications in medicine</li>
                                            <li>Probiotic strains and Ingredients</li>
                                            <li>Mechanisms of Action</li>
                                            <li>Brain-Gut Connection</li>
                                            <li>Depression and Published Pilot Trial and current trial</li>
                                        </ul>
                                        <h3 style="text-align:center;"> Online exclusive:</h3>
                                        <ul >
                                            <li>Information packed and under 15 minutes!</li>
                                            <li>Five easy multiple choice questions for your chance to win!</li>
                                        </ul>

                                    </div>
                                </div>
                                <hr>

                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">

                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="http://goo.gl/02ed6J"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/account/login"
                                                @endif
                                                target="_blank">

                                            <img alt="Depression and the Gut Microbiome"
                                                 src="/img/news/medlab_depressionwebinar.jpg"
                                                 title="Depression and the Gut Microbiome"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Depression and the Gut Microbiome</h2>
                                        <p  style="text-align:center;">Presented by Professor Luis Vitetta</p>
                                        <h3 style="text-align:center;">Topics covered in this clinically relevant webinar include:</h3>
                                        <ul >
                                            <li>Mental Health in the population</li>
                                            <li>Depression in Clinical Practice</li>
                                            <li>Current treatment options - Nutraceuticals</li>
                                            <li>Gut Microbiota in Depression</li>
                                            <li>Probiotics as an adjunct treatment option</li>
                                        </ul>
                                        <h3 style="text-align:center;">Online exclusive:</h3>

                                        <ul >
                                            <li>Post-script: Medicinal Cannabis</li>
                                            <li>Webinar Only Exclusive Offer!</li>

                                        </ul>

                                    </div>
                                </div>
                                <hr>


                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">

                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="http://goo.gl/uJHPxi"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/account/login"
                                                @endif
                                                target="_blank">

                                            <img alt="Understanding the Clinical Application of NanoCelle"
                                                 src="/img/news/Medlab_HFD_NALFD_Webinar.jpg"
                                                 title="Understanding the Clinical Application of NanoCelle"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">


                                        <h2 style="text-align:center;">High Fat Diet, Probiotics and Non-Alcoholic Fatty Liver Disease</h2>
                                        <p  style="text-align:center;">Presented by Professor Luis Vitetta</p>
                                        <h3 style="text-align:center;">Key presentation features:</h3>
                                        <ul >
                                            <li>Epidemiology of Non-Alcoholic Fatty Liver Disease</li>
                                            <li>Mechanisms involved in NAFLD progression</li>
                                            <li>Management of NALFD</li>
                                            <li>Clinical Research Methodology and Results</li>
                                        </ul>

                                    </div>
                                </div>
                                <hr>


                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">

                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="http://goo.gl/fBJJjj"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/account/login"
                                                @endif
                                                target="_blank">

                                            <img alt="Probiotics and Gut Health"
                                                 src="/img/news/Medlab_Probiotic_and_Gut_Health_Webinar.jpg"
                                                 title="Probiotics and Gut Health"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Probiotics and Gut Health</h2>
                                        <p  style="text-align:center;">Presented by Professor Luis Vitetta</p>
                                        <p  style="text-align:center;">This webinar explores a range of topics including Bacteria, Dysbiosis and The Human Gut Microbiome and Medlab research. A great overall educational webinar.</p>


                                    </div>
                                </div>
                                <hr>


                            </div>
                        </div>
                    </div>


                        </div>











                        </div>
            </div>
        </div>
    </div>
</div>

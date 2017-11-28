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




                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )

                    @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )

                        <div class="center-block">
                        <h3  style="text-align:center;">The following webinars are only available to Healthcare Practitioners. </h3>
                        </div>
                    @else
                        <a href="/account/login"><button type="button" float="center" class="btn btn-success center-block">Educational webinars available to healthcare practitioners. Please click here to register or log in to view</button></a>
                    @endif

                       <hr>

                    <div class="medlab_news_item">
                        <div class="medlab_news_item_content_wrapper">

                            <div class="medlab_news_item_body">






                                <div class="container">

                                    <div class="col-md-5 col-sm-12 col-xs-12">




                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="https://register.gotowebinar.com/register/3690107644784724739"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="https://register.gotowebinar.com/register/3690107644784724739"
                                                @endif
                                                target="_blank">

                                            <img alt="Medlab Year In Review"
                                                 src="/img/webinar/Medlab Webinar Banner NOV17 v1[1].jpg"
                                                 title="Medlab Year in Review"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>




                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Year in review </h2>
                                        <p  style="text-align:center;">Presented by Dr. Sean Hall</p>
                                        <p  style="text-align:center;">8:00am, Tuesday 12<sup>th</sup> December, 2017</p>
                                        <br>
                                        <p>Medlab’s Chief Executive Officer, Dr Sean Hall looks back over the year and discusses some of Medlab’s key projects.
                                            This 30 minute webinar will cover Medlab’s cannabis programme, diabetes and depression research, as well as discussing the company in general.
                                            Approximately 15 minutes will be reserved for questions and answers. This webinar provides a unique opportunity to talk directly with Sean and understand Medlab in more detail.</p>

                                    </div>

                                    </div>
                                <hr>
                                <div class="container">

                                <div class="col-md-5 col-sm-12 col-xs-12">




                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="/education/webinars/recordings"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/education/webinars/recordings"
                                                @endif
                                                target="_blank">

                                            <img alt="Dehydration: a reliable predictor of cognitive function in older adults"
                                                 src="/img/webinar/Webinar November Luis Vitetta.jpg"
                                                 title="Stress and Fatigue"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>




                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">RESEARCH UPDATE </h2>
                                        <h2 style="text-align:center;">Insight Into The Management of Treatment Resistant Depression</h2>
                                        <p  style="text-align:center;">Presented by Prof. Luis Vitetta</p>
                                        <br>
                                        <p>Medlab’s Director of Medical Research, Professor Luis Vitetta will provide an update on Medlab’s current research
                                            into treatment resistant depression and how it can be managed. Unlike other illnesses there are various documented
                                            causes of depression and mood disorders, including stress and predisposition to depression concurrent with biological,
                                            genetic and psychological factors.</p>

                                    </div>
                                </div>
                                <hr>

                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">






                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="/education/webinars/recordings"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/education/webinars/recordings"
                                                @endif
                                                target="_blank">

                                            <img alt="Dehydration: a reliable predictor of cognitive function in older adults"
                                                 src="/img/webinar/stress and fatigue.jpg"
                                                 title="Stress and Fatigue"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Managing Stress & Fatigue: A Clinical Perspective</h2>
                                        <p  style="text-align:center;">Presented by Rebecca James, BHsc (Nat)</p>
                                        <p  style="text-align:center;">Duration: 22 minutes</p>
                                        <h3 style="text-align:center;">What you will learn in this webinar:</h3>
                                        <p>During this webinar Rebecca James, BHsc (Nat), explores the key drivers of stress and the impact this
                                            may have on energy levels. Hydration and diet also affect cognitive performance as nutritional demands
                                            are increased during periods of prolonged stress. Rebecca ties this all together by providing a
                                            clinical perspective on two of the biggest health issues patients present with.</p>

                                    </div>
                                </div>

                                <hr>
                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">






                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="/education/webinars/dehydration"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/account/login"
                                                @endif
                                                target="_blank">

                                            <img alt="Dehydration: a reliable predictor of cognitive function in older adults"
                                                 src="/img/webinar/medlab_dehydration_webinar.jpg"
                                                 title="Dehydration: a reliable predictor of cognitive function in older adults"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <h2 style="text-align:center;">Dehydration: a reliable predictor of cognitive function in older adults</h2>
                                        <p  style="text-align:center;">Presented by Professor Luis Vitetta</p>
                                        <p  style="text-align:center;">Duration: 22 minutes</p>
                                        <h3 style="text-align:center;">What you will learn in this webinar:</h3>
                                        <ul >
                                            <li>Water: a life medium</li>
                                            <li>Dehydration of the elderly in General Practice
                                                <ul>
                                                    <li>Dehydration and Clinical Assessment</li>
                                                    <li>Pathophysiology: body fluid balance required</li></ul></li>
                                            <li>Why Older adults are at increased risk of Dehydration
                                                <ul>
                                                    <li>What is the best defense against dehydration</li>
                                                </ul></li>
                                            <li>Treatment Options
                                                <ul>
                                                    <li>Rehydration Options</li>
                                                    <li>Symptomatic Therapy</li></ul></li>

                                        </ul>

                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                <div class="col-md-5 col-sm-12 col-xs-12">

                                <a
                                            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                            href="/education/webinars/nanocelle"
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
                                        <p  style="text-align:center;">Duration: 16 minutes</p>
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
                                                href="/education/webinars/nrgwebinar"
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
                                        <p  style="text-align:center;">Duration: 15 minutes</p>
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


                                    </div>
                                </div>
                                <hr>

                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">

                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="/education/webinars/depression"
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
                                        <p  style="text-align:center;">Duration: 25 minutes</p>
                                        <h3 style="text-align:center;">Topics covered in this clinically relevant webinar include:</h3>
                                        <ul >
                                            <li>Mental Health in the population</li>
                                            <li>Depression in Clinical Practice</li>
                                            <li>Current treatment options - Nutraceuticals</li>
                                            <li>Gut Microbiota in Depression</li>
                                            <li>Probiotics as an adjunct treatment option</li>
                                        </ul>


                                    </div>
                                </div>
                                <hr>


                                <div class="container">
                                    <div class="col-md-5 col-sm-12 col-xs-12">

                                        <a
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                href="/education/webinars/nafld"
                                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                href="#"
                                                @else
                                                href="/account/login"
                                                @endif
                                                target="_blank">

                                            <img alt="High Fat Diet, Probiotics and Non-Alcoholic Fatty Liver Disease"
                                                 src="/img/news/Medlab_HFD_NALFD_Webinar.jpg"
                                                 title="High Fat Diet, Probiotics and Non-Alcoholic Fatty Liver Disease"
                                                 width="450px"
                                                 class="img-responsive center-block">
                                        </a>


                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">


                                        <h2 style="text-align:center;">High Fat Diet, Probiotics and Non-Alcoholic Fatty Liver Disease</h2>
                                        <p  style="text-align:center;">Presented by Professor Luis Vitetta</p>
                                        <p  style="text-align:center;">Duration: 27 minutes</p>
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
                                                href="/education/webinars/probiotics"
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
                                        <p  style="text-align:center;">Duration: 47 minutes</p>
                                        <p  style="text-align:center;">This webinar explores a range of topics including Bacteria, Dysbiosis and The Human Gut Microbiome and Medlab research. A great overall educational webinar.</p>
                                        <h3 style="text-align:center;">Key presentation features:</h3>
                                        <ul >
                                            <li>Bacteria - how it impacts chronic disease</li>
                                            <li>Gut Dysbiosis & Leaky Gut - understand these terms and treatments</li>
                                            <li>Nutritional tips for Optimal Gut Health</li>
                                            <li>And much much more...</li>
                                        </ul>

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

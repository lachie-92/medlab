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
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Medlab Efficacy Magazine Preview
                </div>
                <div class="panel-body medlab_panel_content">


                    <div class="medlab_news_item">

                            <div class="medlab_news_item_body">

                                <p>
                                    <a
                                            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                            href="/efficacy/magazine_ja17"
                                            @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                            href="#"
                                            @else
                                            href="/account/login"
                                            @endif
                                            target="_blank">

                                        <img alt="Medlab Efficacy Magazine Edition 4"
                                             src="/img/efficacy/efficacy/EFFICACY Mag Web Banner 600x600 JUN17 v1.jpg"
                                             title="Medlab Efficacy Magazine Edition 2"
                                             width="450px"
                                             class="img-responsive center-block">
                                    </a>
                                </p>
                                <h1 style="text-align:center;">Medlab's New Efficacy<sup>TM</sup> Magazine</h1>
                                <h4 style="color:grey; text-align:center;">A true integrative approach to medicine and health</h4>
                                <p style="text-align:center;">Issue 4: June 2017 – August 2017</p>
                                <p style="text-align:center;">Neuro-Cognitive Impairments</p>
                                </br>
                                <p style="text-align:center;">Efficacy™ is designed to educate and update Practitioners with Medlab research developments, company progression and the latest industry advancements with a variety of contributing authors.</p>
                                <p style="text-align:center;">Available exclusively online, Efficacy™ can now host a variety of interactive content in an environmentally-friendly format. Efficacy™ Magazine is compatible with Microsoft, android and apple computers, tablets and phones.</p>
                                <p style="text-align:center;">Available to all healthcare practitioners when you <a href="/account/login">register or log in</a> today.</p>



                            </div>



            </div>
        </div>
    </div>
</div>
    </div>
    </div>
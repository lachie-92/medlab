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

                                <h1 style="text-align:center;">Medlab's New Efficacy Magazine</h1>
                                <h4 style="color:grey; text-align:center;">A true integrative approach to medicine and health</h4>
                                <p style="text-align:center;">Issue 1: September - November 2016</p>
                                <p style="text-align:center;">A Focus on the Gut-Brain Connection</p>
                                </br>
                                <p style="text-align:center;">We welcome you to view our new online Efficacy Magazine – much larger in size than previous newsletters, this Issue incorporates articles from health care practitioners within our community and key authorities and researchers – Professor Luis Vitetta and Dr Matthew Bambling. You will also find Medlab's latest research and company updates included.</p>
                                <p style="text-align:center;">Available exclusively online, we’ve also made the decision to move to an environmentally-friendly digital format. At Medlab Clinical, we pride ourseleves on being ethically responsible in everything we do, with Efficacy being no exception. This new digital format will also allow us to create more interactive content such as website and article links along with educational videos.</p>
                                <p style="text-align:center;">Our new Efficacy Magazine is compatible with microsoft, android and apple computers, tablets and phones.</p>
                                <p style="text-align:center;">Available to all healthcare practitioners when you <a href="/account/login">register or log in</a> today.</p>



                            </div>



            </div>
        </div>
    </div>
</div>
    </div>
    </div>
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

                                <p>New Efficacy Magazine - Available Exclusively Online</p>
                                <p>Issue 1: September - November 2016</p>

                                <p>As we move to quarterly edition of our Practitioner-only Efficacy Magazine several times the size of previous editions, we’ve also made the decision to move to an environmentally-friendly digital format.</p>

                                <p>At Medlab Clinical, we pride ourseleves on being ethically responsible in everything we do, with Efficacy being no exception.</p>

                                <p>This new digital format will also allow us to create more interactive content such as website and article links along with educational videos.</p>

                                <p>Our new Efficacy Magazine is compatible with android and apple computers, tablets and phones.</p>

                                <p>Available to all healthcare practitioners when you <a href="/account/login">register or log in</a> to our website today.</p>

                            </div>



            </div>
        </div>
    </div>
</div>
    </div>
    </div>
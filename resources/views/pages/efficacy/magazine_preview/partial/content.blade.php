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

                            </div>



            </div>
        </div>
    </div>
</div>
    </div>
    </div>
<!-----------------------------------------------------------------------------------
--
-- Research
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!--
            -- About Medlab
            -->




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








        </div>
    </div>
</div>
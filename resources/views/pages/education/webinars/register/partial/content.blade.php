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
                            href="https://attendee.gotowebinar.com/register/8966094398970374403"
                            @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                            href="#"
                            @else
                            href="https://attendee.gotowebinar.com/register/8966094398970374403"
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








        </div>
    </div>
</div>
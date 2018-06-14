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






                    <a href="/education/webinars/stress-and-fatigue">

                        <img alt="Managing Stress & Fatigue: A Clinical Perspective"
                             src="/img/webinar/stress and fatigue.jpg"
                             title="Managing Stress & Fatigue: A Clinical Perspective"
                             width="450px"
                             class="img-responsive center-block">
                    </a>


                    </p>
                    <br>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <h2 style="text-align:center;">Managing Stress & Fatigue: A Clinical Perspective</h2>
                    <p  style="text-align:center;">Presented by Rebecca James, BHsc (Nat)</p>
                    <p  style="text-align:center;">Duration: 30 minutes</p>
                    </hr>
                    <p  style="text-align:justify;">During this webinar Rebecca James, BHsc (Nat), explores the key drivers of stress and the impact this may have on energy levels.
                        Hydration and diet also affect cognitive performance as nutritional demands are increased during periods of prolonged stress.
                        Rebecca ties this all together by providing a clinical perspective on two of the biggest health issues patients present with.</p>




                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )

                            <a href="https://register.gotowebinar.com/register/5931796348302600451" class="btn btn-primary btn-block" role="button" target="_blank">Register for the webinar</a>

                        @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )

                            <h2>UNAVAILABLE FOR PATIENTS</h2>

                        @else

                            <a href="/account/login" class="btn btn-primary btn-block" role="button">Register for a practitioner account</a>

                        @endif





                </div>


            </div>








        </div>
    </div>
</div>
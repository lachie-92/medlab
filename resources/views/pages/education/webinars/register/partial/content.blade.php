<!-----------------------------------------------------------------------------------
--
-- Research
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Upcoming Webinar
                </div>
                <div class="panel-body medlab_panel_content">

                    <div class="container">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <a
                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                    href="https://register.gotowebinar.com/register/4151158159984603651"
                                @elseif( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                    href="#"
                                @else
                                    href="/account/login"
                                @endif
                                target="_blank">

                                <img alt="Webinar - Understanding the Trial"
                                     src="/img/webinar/nanabis_webinar_brief.jpg"
                                     title="Webinar - Understanding the Trial"
                                     width="100%"
                                     class="img-responsive center-block">
                            </a>
                            <br>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">

                            <h2 style="text-align:center;">Understanding The Trial<br>- NanaBis for advanced cancer pain</h2>
                            <p  style="text-align:center;">Presented by Dr. Sean Hall, Prof. Luis Vitetta</p>
                            <p  style="text-align:center;">6:00pm, Tuesday 20<sup>th</sup> Feburary, 2018</p>
                            <p  style="text-align:center;">Duration: 45 minutes</p>
                            <br>
                            <p>
                                NanaBis is a 1:1 whole plant extract of CBD and THC in a sub micron delivery platform
                            </p>
                            <ul>
                                <li>History and epidemiology of cannabis use.</li>
                                <li>The opioid epidemic that needs to be further addressed with a cannabis medicine substitute.</li>
                                <li>Medlab's cannabis research: from plant to THC/CBD extracts to regulatory S8 pathways to standardised analysis and delivery.</li>
                                <li>The clinical trials Medlab are conducting, specifically NanaBis at the Royal North Shore Hospital.</li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
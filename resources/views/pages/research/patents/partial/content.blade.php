<!-----------------------------------------------------------------------------------
--
-- Patents
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!--
            -- Patents
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    PATENTS
                </div>
                <div class="panel-body medlab_panel_content">

                    <p>
                        Medlab owns and runs an Office of the <a class="medlab_panel_content_link" href="http://www.ogtr.gov.au/">Gene Technology Regulator</a>
                        (OGTR) approved PC2 Biologic facility in NSW, Australia.
                    </p>

                    <br>

                    <p>
                        This is the primary site for research projects.
                    </p>

                    <br>

                    <p>
                        Presently we are involved in early phase drug discovery in 5 key areas:
                    </p>

                    <p>
                        <ol>
                            <li>Obesity</li>
                            <li>Chronic Kidney Disease</li>
                            <li>Depression</li>
                            <li>Musculoskeletal muscle loss associated with ageing</li>
                            <li>Non-opioid pain management</li>
                        </ol>
                    </p>

                    <p>
                        &nbsp;
                    </p>

                    <p>
                        <strong>Medlab has multiple patents pending on our products:</strong>
                    </p>

                    <p>
                        &nbsp;
                    </p>

                    <div style="width: 100%; overflow-x: auto;">
                        <table class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th class="bg-primary"><h4>Product</h4></th>
                                <th class="bg-primary"><h4>Jurisdiction</h4></th>
                                <th class="bg-primary"><h4>Description</h4></th>
                                <th class="bg-primary"><h4>Application Number</h4></th>
                                <th class="bg-primary"><h4>Filling Date</h4></th>
                                <th class="bg-primary"><h4>Status</h4></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($patents as $patent)
                                <tr>
                                    <td align="left">{{ $patent->product }}</td>
                                    <td align="left">{{ $patent->jurisdiction }}</td>
                                    <td align="left">{{ $patent->description }}</td>
                                    <td align="left">{{ $patent->application_number }}</td>
                                    <td align="left">{{ $patent->filing_date }}</td>
                                    <td align="left">{{ $patent->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

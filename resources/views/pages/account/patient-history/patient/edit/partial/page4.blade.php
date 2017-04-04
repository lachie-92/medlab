@section('custom_script')
<script type="text/javascript" src="/js/jquery.jqscribble.js"></script>
<script>
    $(document).ready(function() {
        $('#canvas_diagram_front').jqScribble({
            backgroundImage: '{{ array_get($intake, 'area_diagram_front', '/img/account/patient-history/body-front.png') }}',
            brushSize: 9
        });

        $('#canvas_diagram_back').jqScribble({
            backgroundImage: '{{ array_get($intake, 'area_diagram_back', '/img/account/patient-history/body-back.png') }}',
            brushSize: 9
        });

        $('form').on('submit', function() {
            $("#canvas_diagram_front").data("jqScribble").save(function(imageData)
            {
                $('#area_diagram_front').val(imageData);
            });

            $("#canvas_diagram_back").data("jqScribble").save(function(imageData)
            {
                $('#area_diagram_back').val(imageData);
            });
        })

        $('.area_diagram .canvas-clear').on('click', function() {
            $original = $(this).parents('.area_diagram').find('.canvas_diagram').attr('rel');
            $(this).parents('.area_diagram').find('.canvas_diagram').data('jqScribble').clear().update({
                backgroundImage: $original
            });
        })

        $('#selWidth').on('change', function() {
            $brushSize = this.value;
            $('.canvas_diagram').each(function () {
                $(this).data('jqScribble').update({
                    brushSize: $brushSize
                });
            });
        })

        $('#selColor').on('change', function() {
            $brushColor = this.value;
            $('.canvas_diagram').each(function() {
                $(this).data('jqScribble').update({
                    brushColor: $brushColor
                });
            });
        })
    })
</script>
@endsection

<div class="row">
    <form action="{{ route('account.patient-history.update', $history->id) }}" method="POST" id="patient-history">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="4">

        <div class="col-md-12 col-sm-12">

            <div class="row">
                <div class="container-fluid medlab_panel_container">

                    <div class="col-md-12 col-sm-12">
                        <div class="panel panel-primary medlab_panel">
                            <div class="panel-heading medlab_panel_title">
                                <h3 class="panel-title pull-left">
                                    Patient History &mdash; Page 4
                                </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div style="background-color: transparent; background-image: none">
                                    <input type="hidden" name="hdid" id="ContentPlaceHolder1_hdid" value="0">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <table class="table table-bordered" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th colspan="5" style="color:#1E5494">Please Indicate Areas of (1 being lowest, 10 being highest):</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label>Pain</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/black.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="area_rating_pain" id="area_rating_pain" class="form-control" {{ isset($readOnly)? 'disabled="disabled"': '' }}>
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'area_rating_pain')==1? ' selected="selected"': "" }}>1</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==2? ' selected="selected"': "" }}>2</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==3? ' selected="selected"': "" }}>3</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==4? ' selected="selected"': "" }}>4</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==5? ' selected="selected"': "" }}>5</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==6? ' selected="selected"': "" }}>6</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==7? ' selected="selected"': "" }}>7</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==8? ' selected="selected"': "" }}>8</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==9? ' selected="selected"': "" }}>9</option>
                                                                    <option{{ array_get($intake, 'area_rating_pain')==10? ' selected="selected"': "" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Concern</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/green.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="area_rating_concern" id="area_rating_concern" class="form-control"  {{ isset($readOnly)? 'disabled="disabled"': '' }}>
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'area_rating_concern')==1? ' selected="selected"': "" }}>1</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==2? ' selected="selected"': "" }}>2</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==3? ' selected="selected"': "" }}>3</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==4? ' selected="selected"': "" }}>4</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==5? ' selected="selected"': "" }}>5</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==6? ' selected="selected"': "" }}>6</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==7? ' selected="selected"': "" }}>7</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==8? ' selected="selected"': "" }}>8</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==9? ' selected="selected"': "" }}>9</option>
                                                                    <option{{ array_get($intake, 'area_rating_concern')==10? ' selected="selected"': "" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Swelling</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/dotted.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="area_rating_swelling" id="area_rating_swelling" class="form-control"  {{ isset($readOnly)? 'disabled="disabled"': '' }}>
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==1? ' selected="selected"': "" }}>1</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==2? ' selected="selected"': "" }}>2</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==3? ' selected="selected"': "" }}>3</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==4? ' selected="selected"': "" }}>4</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==5? ' selected="selected"': "" }}>5</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==6? ' selected="selected"': "" }}>6</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==7? ' selected="selected"': "" }}>7</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==8? ' selected="selected"': "" }}>8</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==9? ' selected="selected"': "" }}>9</option>
                                                                    <option{{ array_get($intake, 'area_rating_swelling')==10? ' selected="selected"': "" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Bleeding</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/red.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="area_rating_bleeding" id="area_rating_bleeding" class="form-control"  {{ isset($readOnly)? 'disabled="disabled"': '' }}>
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==1? ' selected="selected"': "" }}>1</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==2? ' selected="selected"': "" }}>2</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==3? ' selected="selected"': "" }}>3</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==4? ' selected="selected"': "" }}>4</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==5? ' selected="selected"': "" }}>5</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==6? ' selected="selected"': "" }}>6</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==7? ' selected="selected"': "" }}>7</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==8? ' selected="selected"': "" }}>8</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==9? ' selected="selected"': "" }}>9</option>
                                                                    <option{{ array_get($intake, 'area_rating_bleeding')==10? ' selected="selected"': "" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2 col-sm-2"></div>
                                        <div class="col-md-10 col-sm-10">
                                            <label style="color:red">
                                                Indicated by clicking on the part of the body, and selecting from the legend above
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3"></div>
                                        <div class="col-md-3 col-sm-3">
                                            <label style="text-align:center">
                                                BACK
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3"></div>
                                        <div class="col-md-3 col-sm-3">
                                            <label style="text-align:center">
                                                FRONT
                                            </label>
                                        </div>
                                    </div>
                                    @if (!isset($readOnly))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Pointer Width :</label>
                                            <select id="selWidth" class="form-control" style="width:120px">
                                                <option value="1">1</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                                <option value="7">7</option>
                                                <option value="9" selected="selected">9</option>
                                                <option value="11">11</option>
                                            </select>
                                            <label>Color :</label>
                                            <select id="selColor" class="form-control" style="width:120px">
                                                <option value="black" selected="selected">Pain</option>
                                                <option value="red">Bleeding</option>
                                                <option value="green">Concern</option>
                                                <option value="gray">Swelling</option>
                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row" style="padding-top:5px;">
                                        <div class="area_diagram">
                                            @if (!isset($readOnly))
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <button type="button" id="" class="btn-info canvas-clear">Reset</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="hidden" id="area_diagram_front" name="area_diagram_front" value="" />
                                                <div id="canvas_diagram_front" class="canvas_diagram" style="width:200px;height:500px;" rel="/img/account/patient-history/body-front.png"></div>
                                            </div>
                                            @else
                                            <div class="col-md-6 text-center">
                                                <img src="{{ array_get($intake, 'area_diagram_front', '/img/account/patient-history/body-front.png') }}" />
                                            </div>
                                            @endif
                                        </div>
                                        <div class="area_diagram">
                                            @if (!isset($readOnly))
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <button type="button" id="" class="btn-info canvas-clear">Reset</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="hidden" id="area_diagram_back" name="area_diagram_back" value="" />
                                                <div id="canvas_diagram_back" class="canvas_diagram" style="width:200px;height:500px;" rel="/img/account/patient-history/body-back.png"></div>
                                            </div>
                                            @else
                                            <div class="col-md-6 text-center">
                                                <img src="{{ array_get($intake, 'area_diagram_back', '/img/account/patient-history/body-back.png') }}" />
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <table class="table table-bordered" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th colspan="5" style="color:#1E5494">Have you travelled in the last 30 days?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label>Where?</label>

                                                        </td>
                                                        <td colspan="4">

                                                            <input name="30days_travel_detail" type="text" id="30days_travel_detail" class="form-control" value="{{ array_get($intake, '30days_travel_detail') }}" {{ isset($readOnly)? 'disabled="disabled"': '' }}>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    @if (!isset($readOnly))
                                    <br>
                                    <div class="row">
                                        <div class="col-ms-1 col-sm-1">
                                            <a href="{{ route('account.patient-history.edit', ['history' => $history, 'page' => $page-1]) }}" name="_btnprevious" value="Back" id="ContentPlaceHolder1_btnprevious" class="btn btn-primary">Back</a>
                                        </div>
                                        <div class="col-ms-10 col-sm-10">
                                        </div>
                                        <div class="col-ms-1 col-sm-1">
                                            <input type="submit" name="_Btnnext" value="Next" id="ContentPlaceHolder1_Btnnext" class="btn btn-primary">
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

</div>

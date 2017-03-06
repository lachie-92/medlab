<script type="text/javascript" src="/js/jquery.jqscribble.js"></script>

<div class="row">
    <form action="{{ route('account.patient-history.new.continue', 5) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-md-12 col-sm-12">
             <div class="panel panel-primary medlab_panel">

                <div class="panel-body">

                    <div class="row">
                        <div class="container-fluid">

                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
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
                                                        <td><label>Pain</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/black.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="TextBox39" id="TextBox39" class="form-control">
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'TextBox39')==1?' selected="selected"':"" }}>1</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==2?' selected="selected"':"" }}>2</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==3?' selected="selected"':"" }}>3</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==4?' selected="selected"':"" }}>4</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==5?' selected="selected"':"" }}>5</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==6?' selected="selected"':"" }}>6</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==7?' selected="selected"':"" }}>7</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==8?' selected="selected"':"" }}>8</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==9?' selected="selected"':"" }}>9</option>
                                                                    <option{{ array_get($intake, 'TextBox39')==10?' selected="selected"':"" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>Concern</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/green.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="TextBox40" id="TextBox40" class="form-control">
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'TextBox40')==1?' selected="selected"':"" }}>1</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==2?' selected="selected"':"" }}>2</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==3?' selected="selected"':"" }}>3</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==4?' selected="selected"':"" }}>4</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==5?' selected="selected"':"" }}>5</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==6?' selected="selected"':"" }}>6</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==7?' selected="selected"':"" }}>7</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==8?' selected="selected"':"" }}>8</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==9?' selected="selected"':"" }}>9</option>
                                                                    <option{{ array_get($intake, 'TextBox40')==10?' selected="selected"':"" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>Swelling</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/dotted.png">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="TextBox41" id="TextBox41" class="form-control">
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'TextBox41')==1?' selected="selected"':"" }}>1</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==2?' selected="selected"':"" }}>2</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==3?' selected="selected"':"" }}>3</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==4?' selected="selected"':"" }}>4</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==5?' selected="selected"':"" }}>5</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==6?' selected="selected"':"" }}>6</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==7?' selected="selected"':"" }}>7</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==8?' selected="selected"':"" }}>8</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==9?' selected="selected"':"" }}>9</option>
                                                                    <option{{ array_get($intake, 'TextBox41')==10?' selected="selected"':"" }}>10</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>Bleeding</label>
                                                            <img style="width:40px;height:40px" src="/img/account/patient-history/red.jpg">
                                                        </td>
                                                        <td colspan="4">

                                                            <select name="TextBox42" id="TextBox42" class="form-control"                                                       </td>
                                                                <optgroup label="Rate 1-10">
                                                                    <option{{ array_get($intake, 'TextBox42')==1?' selected="selected"':"" }}>1</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==2?' selected="selected"':"" }}>2</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==3?' selected="selected"':"" }}>3</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==4?' selected="selected"':"" }}>4</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==5?' selected="selected"':"" }}>5</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==6?' selected="selected"':"" }}>6</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==7?' selected="selected"':"" }}>7</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==8?' selected="selected"':"" }}>8</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==9?' selected="selected"':"" }}>9</option>
                                                                    <option{{ array_get($intake, 'TextBox42')==10?' selected="selected"':"" }}>10</option>
                                                                </optgroup>
                                                            </select>

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
                                         <div class="row" style="padding-top:5px;">
                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <button onclick="javascript:drawImage();return false;" class="btn-info"><i class="fa fa-times"></i></button>
                                        <button onclick="javascript:cUndo();return false;" class="btn-info"><i class="fa fa-undo"></i></button>
                                        <button onclick="javascript:cRedo();return false;" class="btn-info"><i class="fa fa-repeat"></i></button>
                                        <button onclick="javascript:UploadImage();" class="btn-info"><i class="fa fa-floppy-o"></i></button>
                                        </div>

                                        </div>
                                        <div class="col-md-3">
                                             <canvas id="myCanvas" width="200" height="500" style="cursor: pointer;"></canvas>

                                            <input type="hidden" name="hdn_back" id="ContentPlaceHolder1_hdn_back">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                       <button onclick="javascript:drawImage1();return false;" class="btn-info"><i class="fa fa-times"></i></button>
                                      <button onclick="javascript:cUndo1();return false;" class="btn-info"><i class="fa fa-undo"></i></button>
                                       <button onclick="javascript:cRedo1();return false;" class="btn-info"><i class="fa fa-repeat"></i></button>
                                       <button onclick="javascript:UploadImage1();" class="btn-info"><i class="fa fa-floppy-o"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                             <canvas id="myCanvas1" width="200" height="500"></canvas>

                                            <input type="hidden" name="hdn_font" id="ContentPlaceHolder1_hdn_font">
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
                                                        <td><label>Where?</label>

                                                        </td>
                                                        <td colspan="4">

                                                            <input name="TextBox43" type="text" id="TextBox43" class="form-control" value="{{ array_get($intake, 'TextBox43') }}">
                                                        </td>

                                                    </tr>
                                            </tbody>
                                        </table>

                                        </div>
                                    </div>


                                            <br>
                                    <div class="row">
                                        <div class="col-ms-1 col-sm-1">
                                            <input type="submit" name="btnprevious" value="Back" id="ContentPlaceHolder1_btnprevious" class="btn btn-primary">
                                        </div>
                                        <div class="col-ms-10 col-sm-10">
                                        </div>
                                        <div class="col-ms-1 col-sm-1">
                                            <input type="submit" name="Btnnext" value="Next" id="ContentPlaceHolder1_Btnnext" class="btn btn-primary">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
             </div>
        </div>

    </form>

</div>

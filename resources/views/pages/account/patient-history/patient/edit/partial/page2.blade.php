<div class="container-fluid">
    <form action="{{ route('account.patient-history.new.continue', 3) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 col-sm-12">
             <div class="panel panel-primary medlab_panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="container-fluid">
                            <input type="hidden" name="hdid" id="hdid" value="0">

                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">

                                    <div class="row">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                    <div class="row">
                                    <div class="col-md-12 col-sm-12">

                                        <label style="color:#1E5494">
                                            PAST MEDICAL HISTORY
                                        </label>
                                    </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>
                                                    Do you now or have you ever had:
                                                </label>
                                            </div>
                                        </div>
                                    <div class="row">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <br>
                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="chk1" type="checkbox" name="chk1" value="Y" {{ array_get($intake, 'chk1')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Diabetes</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox1" type="checkbox" name="CheckBox1" value="Y" {{ array_get($intake, 'CheckBox1')=="Y"?'checked="checked"':"" }}">

                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Heart Murmur</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox2" type="checkbox" name="CheckBox2" value="Y" {{ array_get($intake, 'CheckBox2')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Crohn’s Disease</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox10" type="checkbox" name="CheckBox10" value="Y" {{ array_get($intake, 'CheckBox10')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>High Blood Pressure</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox7" type="checkbox" name="CheckBox7" value="Y" {{ array_get($intake, 'CheckBox7')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>High Cholesterol</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox8" type="checkbox" name="CheckBox8" value="Y" {{ array_get($intake, 'CheckBox8')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Hypothyroidism</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox9" type="checkbox" name="CheckBox9" value="Y" {{ array_get($intake, 'CheckBox9')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Goiter</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox11" type="checkbox" name="CheckBox11" value="Y" {{ array_get($intake, 'CheckBox11')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Leukemia</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox3" type="checkbox" name="CheckBox3" value="Y" {{ array_get($intake, 'CheckBox3')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Psoriasis</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox4" type="checkbox" name="CheckBox4" value="Y" {{ array_get($intake, 'CheckBox4')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Angina</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox12" type="checkbox" name="CheckBox12" value="Y" {{ array_get($intake, 'CheckBox12')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Heart Problems</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox13" type="checkbox" name="CheckBox13" value="Y" {{ array_get($intake, 'CheckBox13')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Pneumonia</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox14" type="checkbox" name="CheckBox14" value="Y" {{ array_get($intake, 'CheckBox14')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Pulmonary Embolism</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox15" type="checkbox" name="CheckBox15" value="Y" {{ array_get($intake, 'CheckBox15')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Asthma</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox16" type="checkbox" name="CheckBox16" value="Y" {{ array_get($intake, 'CheckBox16')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Emphysema</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox17" type="checkbox" name="CheckBox17" value="Y" {{ array_get($intake, 'CheckBox17')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Stroke</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox18" type="checkbox" name="CheckBox18" value="Y" {{ array_get($intake, 'CheckBox18')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Epilepsy (Seizures)</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox19" type="checkbox" name="CheckBox19" value="Y" {{ array_get($intake, 'CheckBox19')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Cataracts</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox20" type="checkbox" name="CheckBox20" value="Y" {{ array_get($intake, 'CheckBox20')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Kidney Disease</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox21" type="checkbox" name="CheckBox21" value="Y" {{ array_get($intake, 'CheckBox21')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Kidney Stones</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox22" type="checkbox" name="CheckBox22" value="Y" {{ array_get($intake, 'CheckBox22')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Colitis</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox23" type="checkbox" name="CheckBox23" value="Y" {{ array_get($intake, 'CheckBox23')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Anemia</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox24" type="checkbox" name="CheckBox24" value="Y" {{ array_get($intake, 'CheckBox24')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Jaundice</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox25" type="checkbox" name="CheckBox25" value="Y" {{ array_get($intake, 'CheckBox25')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Hepatitis</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox26" type="checkbox" name="CheckBox26" value="Y" {{ array_get($intake, 'CheckBox26')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Stomach or Peptic Ulcer</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox27" type="checkbox" name="CheckBox27" value="Y" {{ array_get($intake, 'CheckBox27')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Rheumatic Fever</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox28" type="checkbox" name="CheckBox28" value="Y" {{ array_get($intake, 'CheckBox28')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>Tuberculosis</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox29" type="checkbox" name="CheckBox29" value="Y" {{ array_get($intake, 'CheckBox29')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label>HIV/AIDS</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="CheckBox30" type="checkbox" name="CheckBox30" value="Y" {{ array_get($intake, 'CheckBox30')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <label>Cancer (type)</label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input name="txtcancer" type="text" id="txtcancer" class="form-control" value="{{ array_get($intake, 'txtcancer') }}">
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="CheckBox33" type="checkbox" name="CheckBox33" value="Y" {{ array_get($intake, 'CheckBox33')=="Y"?'checked="checked"':"" }}">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <label>OTHER STD</label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>
                                                    Other Medical Conditions (please list):
                                                </label>
                                            </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">

                                            <textarea name="txtothermedical" rows="2" cols="20" id="txtothermedical" class="form-control">{{ array_get($intake, 'txtothermedical') }}</textarea>
                                        </div>
                                    </div>
                                        <br>

                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label style="color:#1E5494">
                                                    PERSONAL HISTORY
                                                </label>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>
                                                    What is your highest education?
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="ContentPlaceHolder1_chkedu" cellpadding="10">
                                                    <tbody><tr>
                                                        <td><input id="ContentPlaceHolder1_chkedu_0" type="radio" name="chkedu" value="1" {{ array_get($intake, 'chkedu')==1?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chkedu_0">High School</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chkedu_1" type="radio" name="chkedu" value="2" {{ array_get($intake, 'chkedu')==2?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chkedu_1">College Graduate</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chkedu_2" type="radio" name="chkedu" value="3" {{ array_get($intake, 'chkedu')==3?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chkedu_2">Some College</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chkedu_3" type="radio" name="chkedu" value="4" {{ array_get($intake, 'chkedu')==4?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chkedu_3">Advanced Degree</label></td>
                                                    </tr>
                                                    </tbody></table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <hr size="6">
                                        </div>

                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>
                                                    What is your marital status?
                                                </label>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12">
                                                <table id="ContentPlaceHolder1_chk_marital" cellpadding="10">
                                                    <tbody><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_marital_0" type="radio" name="marital" value="1" {{ array_get($intake, 'marital')==1?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_marital_0">Married</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_marital_1" type="radio" name="marital" value="2" {{ array_get($intake, 'marital')==2?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_marital_1">Divorced</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_marital_2" type="radio" name="marital" value="3" {{ array_get($intake, 'marital')==3?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_marital_2">Widowed</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_marital_3" type="radio" name="marital" value="4" {{ array_get($intake, 'marital')==4?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_marital_3">Separated</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_marital_4" type="radio" name="marital" value="5" {{ array_get($intake, 'marital')==5?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_marital_4">Never Married</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_marital_5" type="radio" name="marital" value="6" {{ array_get($intake, 'marital')==6?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_marital_5">Partnered/Significant Other</label></td>
                                                    </tr>
                                                    </tbody></table>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            function MutExChkList1(chk) {
                                                var chkList = chk.parentNode.parentNode.parentNode;
                                                var chks = chkList.getElementsByTagName("input");
                                                for (var i = 0; i < chks.length; i++) {
                                                    if (chks[i] != chk && chk.checked) {
                                                        chks[i].checked = false;
                                                    }
                                                }
                                            }
                                        </script>



                                    <div class="row">
                                            <hr size="6">
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label style="color:#1E5494">
                                                    What is your current or past occupation?
                                                </label>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <label>
                                                Are you currently working?
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">

                                            <table id="rdwrk" onclick="check()">
                                                <tbody><tr>
                                                    <td><input id="rdwrk_0" type="radio" name="rdwrk" value="1" {{ array_get($intake, 'rdwrk')==1?'checked="checked"':"" }}><label for="rdwrk_0">Yes</label></td><td><input id="rdwrk_1" type="radio" name="rdwrk" value="0" {{ array_get($intake, 'rdwrk')==0?'checked="checked"':"" }}><label for="rdwrk_1">No</label></td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                            <label>Hours/week</label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input name="txtwork" type="text" id="txtwork" class="form-control" value="{{ array_get($intake, 'txtwork') }}">
                                            </div>
                                        <div class="col-md-2 col-sm-2">

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <label>
                                                If not, are you?
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input id="CheckBox42" type="checkbox" name="CheckBox42" value="Y" {{ array_get($intake, 'CheckBox42')=="Y"?'checked="checked"':"" }}><label for="CheckBox42">retired</label>
                                            <input id="CheckBox43" type="checkbox" name="CheckBox43" value="Y" {{ array_get($intake, 'CheckBox43')=="Y"?'checked="checked"':"" }}><label for="CheckBox43">disabled</label>
                                            <input id="CheckBox44" type="checkbox" name="CheckBox44" value="Y" {{ array_get($intake, 'CheckBox44')=="Y"?'checked="checked"':"" }}><label for="CheckBox44">sick leave</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">

                                        </div>
                                        <div class="col-md-3 col-sm-3">

                                            <div class="col-md-2 col-sm-2">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <hr size="6">
                                    </div>
                                    <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <label style="color:#1E5494">
                                                    Do you receive disability or pension?
                                                </label>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <table id="rdpension" onchange="Check2()">
                                                    <tbody><tr>
                                                        <td><input id="rdpension_0" type="radio" name="rdpension" value="1"  {{ array_get($intake, 'rdpension')==1?'checked="checked"':"" }}><label for="rdpension_0">Yes</label></td><td><input id="rdpension_1" type="radio" name="rdpension" value="0" {{ array_get($intake, 'rdpension')==0?'checked="checked"':"" }}><label for="rdpension_1">No</label></td>
                                                    </tr>
                                                    </tbody></table>
                                            </div>
                                            <div class="col-md-5"></div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <label>
                                                    If yes, for what disability and how long?
                                                </label>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <input name="txtdis" type="text" id="txtdis" class="form-control" value="{{ array_get($intake, 'txtdis') }}">
                                            </div>
                                            <div class="col-md-5"></div>
                                        </div>

                                    <div class="row">
                                            <hr size="6">
                                    </div>
                                    <div class="row">
                                        <div class="col=md-3 col-sm-3">
                                            <label>
                                                Religion
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <select name="ddlreligion" id="ddlreligion" class="form-control">
                                                <option value="--Select Religion--">--Select Religion--</option>
                                                <option value="Hinduism" {{ array_get($intake, 'ddlreligion')=="Hinduism"?'selected="selected"':"" }}>Hinduism</option>
                                                <option value="Christianity" {{ array_get($intake, 'ddlreligion')=="Christianity"?'selected="selected"':"" }}>Christianity</option>
                                                <option value="Islam" {{ array_get($intake, 'ddlreligion')=="Islam"?'selected="selected"':"" }}>Islam</option>
                                                <option value="Buddhism" {{ array_get($intake, 'ddlreligion')=="Buddhism"?'selected="selected"':"" }}>Buddhism</option>
                                                <option value="Sikhism" {{ array_get($intake, 'ddlreligion')=="Sikhism"?'selected="selected"':"" }}>Sikhism</option>
                                                <option value="Jainism" {{ array_get($intake, 'ddlreligion')=="Jainism"?'selected="selected"':"" }}>Jainism</option>
                                                <option value="Judaism" {{ array_get($intake, 'ddlreligion')=="Judaism"?'selected="selected"':"" }}>Judaism</option>
                                                <option value="Baha'i" {{ array_get($intake, 'ddlreligion')=="Baha'i"?'selected="selected"':"" }}>Baha'i</option>
                                                <option value="Taoism" {{ array_get($intake, 'ddlreligion')=="Taoism"?'selected="selected"':"" }}>Taoism</option>
                                                <option value="Zoroastrianism" {{ array_get($intake, 'ddlreligion')=="Zoroastrianism"?'selected="selected"':"" }}>Zoroastrianism</option>
                                                <option value="Other" {{ array_get($intake, 'ddlreligion')=="Other"?'selected="selected"':"" }}>Other</option>

                                                </select>
                                        </div>
                                        <div class="col-md-5 col-sm-5"></div>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                    <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <label style="color:#1E5494">
                                           FAMILY HISTORY
                                        </label>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                        <table class="table table-bordered" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                    <th style="width:20%"></th>
                                                    <th colspan="2">IF LIVING</th>
                                                    <th colspan="2">IF DECEASED</th>
                                                    </tr>
                                                    <tr>
                                                    <th style="width:20%"></th>
                                                    <th style="width:20%">Age (s)</th>
                                                    <th style="width:20%">Health &amp; Psychiatric</th>
                                                    <th style="width:20%">Age(s) at death</th>
                                                    <th style="width:20%">Cause</th>
                                                   </tr>
                                                </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label>Father</label></td>

                                                    <td><input name="txtfatherage" type="text" id="txt" class="form-control" value="{{ array_get($intake, 'txtfatherage') }}"></td>

                                                    <td><input name="txtfhealth" type="text" id="txtfhealth" class="form-control" value="{{ array_get($intake, 'txtfhealth') }}"></td>

                                                    <td><input name="TextBox27" type="text" id="TextBox27" class="form-control" value="{{ array_get($intake, 'TextBox27') }}"></td>
                                                    <td><input name="TextBox28" type="text" id="TextBox28" class="form-control" value="{{ array_get($intake, 'TextBox28') }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Mother</label> </td>
                                                    <td><input name="txtmotherage" type="text" id="TextBox29" class="form-control" value="{{ array_get($intake, 'txtmotherage') }}"></td>
                                                    <td><input name="TextBox30" type="text" id="TextBox30" class="form-control" value="{{ array_get($intake, 'TextBox30') }}"></td>
                                                    <td><input name="TextBox31" type="text" id="TextBox31" class="form-control" value="{{ array_get($intake, 'TextBox31') }}"></td>
                                                    <td><input name="TextBox33" type="text" id="TextBox33" class="form-control" value="{{ array_get($intake, 'TextBox33') }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Siblings</label></td>
                                                    <td><input name="TextBox34" type="text" id="TextBox34" class="form-control" value="{{ array_get($intake, 'TextBox34') }}"></td>
                                                    <td><input name="TextBox51" type="text" id="TextBox51" class="form-control" value="{{ array_get($intake, 'TextBox51') }}"></td>
                                                    <td><input name="TextBox52" type="text" id="TextBox52" class="form-control" value="{{ array_get($intake, 'TextBox52') }}"></td>
                                                    <td><input name="TextBox53" type="text" id="TextBox53" class="form-control" value="{{ array_get($intake, 'TextBox53') }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Children</label></td>
                                                    <td><input name="TextBox54" type="text" id="TextBox54" class="form-control" value="{{ array_get($intake, 'TextBox54') }}"></td>
                                                    <td><input name="TextBox55" type="text" id="TextBox55" class="form-control" value="{{ array_get($intake, 'TextBox55') }}"></td>
                                                    <td><input name="TextBox56" type="text" id="TextBox56" class="form-control" value="{{ array_get($intake, 'TextBox56') }}"></td>
                                                    <td><input name="TextBox57" type="text" id="TextBox57" class="form-control" value="{{ array_get($intake, 'TextBox57') }}"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                        <label style="color:#1E5494">
                                           EXTENDED FAMILY PSYCHIATRIC/MEDICAL/SURGICAL PROBLEMS PAST &amp; PRESENT:
                                        </label>

                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <label>
                                                    Maternal Relatives:
                                                </label>
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <input name="TextBox36" type="text" id="TextBox36" class="form-control" value="{{ array_get($intake, 'TextBox36') }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <label>
                                                    Paternal Relatives:
                                                </label>
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <input name="TextBox35" type="text" id="TextBox35" class="form-control" value="{{ array_get($intake, 'TextBox35') }}">
                                            </div>

                                        </div>

                                    </div>
                                    </div>

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

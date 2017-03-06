<div class="container-fluid">
    <form action="{{ route('account.patient-history.new.continue', 2) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 col-sm-12">
            <div class="well" style="background-color: transparent; background-image: none">
                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    PATIENT DETAILS
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    Date
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtdate" type="text" value="{{ array_get($intake, 'txtdate') }}" id="txtdate" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-6">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    First Name
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtfname" type="text" value="{{ array_get($intake, 'txtfname') }}" id="txtfname" class="form-control">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <label>
                                    Surname
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtlast" type="text" value="{{ array_get($intake, 'txtlast') }}" id="txtlast" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    Address
                                </label>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <input name="txtarddr" type="text" value="{{ array_get($intake, 'txtarddr') }}" id="txtarddr" class="form-control">
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    Email
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtemail" type="text" value="{{ $user->email }}" readonly="readonly" id="txtemail" class="form-control">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <label>D.O.B</label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtdob" type="text" value="{{ array_get($intake, 'txtdob') }}" id="txtdob" class="form-control">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="rdm" type="radio" name="txtsex" value="M" {{ array_get($intake, 'txtsex')=="M"?'checked="checked"':"" }}><label for="rdm">Male</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input id="rdf" type="radio" name="txtsex" value="F" {{ array_get($intake, 'txtsex')=="F"?'checked="checked"':"" }}><label for="rdf">Female</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    GUARDIAN DETAILS (if applicable)
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    First Name
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtgfname" type="text" value="{{ array_get($intake, 'txtgfname') }}" id="txtgfname" class="form-control">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <label>
                                    Surname
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="txtglast" type="text" value="{{ array_get($intake, 'txtglast') }}" id="txtglast" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    Relationship to Patient
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <select name="ddlrelation" id="ddlrelation" class="form-control">
                                    <option selected="selected" value="">Parents</option>
                                    <option value="">Parents</option>
                                    <option value="">Partner</option>
                                    <option value="">Sibling</option>
                                    <option value="">Carer</option>
                                    <option value="">Friend</option>

                                    </select>
                            </div>

                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    Describe briefly your present symptoms
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <textarea name="txtpsyntoms" rows="2" cols="20" id="txtpsyntoms" class="form-control">{{ array_get($intake, 'txtpsyntoms') }}</textarea>
                            </div>
                        </div>

                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    Please list the names of other practitioners you regularly or routinely see (eg, Family Doctor)
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>1/. Practitioner Name</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="TextBox5" type="text" id="TextBox5" class="form-control" value="{{ array_get($intake, 'TextBox5') }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label>Town/State/Country</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="TextBox11" type="text" id="TextBox11" class="form-control" value="{{ array_get($intake, 'TextBox11') }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label>Ph/Email</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="TextBox12" type="text" id="TextBox12" class="form-control" value="{{ array_get($intake, 'TextBox12') }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>2/. Practitioner Name</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="TextBox13" type="text" id="TextBox13" class="form-control" value="{{ array_get($intake, 'TextBox13') }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label>Town/State/Country</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="TextBox14" type="text" id="TextBox14" class="form-control" value="{{ array_get($intake, 'TextBox14') }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label>Ph/Email</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="TextBox15" type="text" id="TextBox15" class="form-control" value="{{ array_get($intake, 'TextBox15') }}">
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <label style="color: #1E5494">
                            Hospitalisations (include where, when and for what reason):
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea name="txthospital" rows="2" cols="20" id="txthospital" class="form-control">{{ array_get($intake, 'txthospital') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <hr size="6">
                </div>
                <div class="row">

                    <div class="col-md-3 col-sm-3">
                        <label>
                            Have you ever had ECT?
                        </label>
                    </div>
                    <div class="col-md-2 col-sm-2">

                        <table id="rdect">
                        <tbody><tr>
                        <td><input id="rdect_0" type="radio" name="rdect" value="Y" {{ array_get($intake, 'rdect')=="Y"?'checked="checked"':"" }}><label for="rdect_0">Yes</label></td><td><input id="rdect_1" type="radio" name="rdect" value="N" {{ array_get($intake, 'rdect')=="N"?'checked="checked"':"" }}><label for="rdect_1">No</label></td>
                        </tr>
                        </tbody></table>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label>
                            Have you had psychotherapy?
                        </label>
                    </div>
                    <div class="col-md-3 col-sm-3">

                        <table id="rdpsycho">
                        <tbody><tr>
                        <td><input id="rdpsycho_0" type="radio" name="rdpsycho" value="Y" {{ array_get($intake, 'rdpsycho')=="Y"?'checked="checked"':"" }}"><label for="rdpsycho_0">Yes</label></td><td><input id="rdpsycho_1" type="radio" name="rdpsycho" value="N" {{ array_get($intake, 'rdpsycho')=="N"?'checked="checked"':"" }}><label for="rdpsycho_1">No</label></td>
                        </tr>
                        </tbody></table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="well" style="background-color: transparent; background-image: none">
                <label style="color: #1E5494">CURRENT MEDICATIONS</label>
                <br>

                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <label>Drugs Allergies</label>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <input id="rddrugy" type="radio" name="drug" value="Y" {{ array_get($intake, 'drug')=="Y"?'checked="checked"':"" }}"><label for="rddrugy">Yes</label>
                        <input id="rddrugn" type="radio" name="drug" value="N" {{ array_get($intake, 'drug')=="N"?'checked="checked"':"" }}"><label for="rddrugn">No</label>


                    </div>
                    <div class="col-md-2 col-sm-2">
                    </div>
                    <div class="col-md-6 col-sm-6"></div>
                </div>



                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <label>
                            Please list any medications that you are now taking. Include non-prescription medication &amp; vitamins or
                        supplements
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <label>
                            Name Of Drug, Dose (include strength &amp; number of pills per day), How long have you been taking this?</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            1/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug1" rows="2" cols="20" id="txtdrug1" class="form-control">{{ array_get($intake, 'txtdrug1') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            2/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug2" rows="2" cols="20" id="txtdrug2" class="form-control">{{ array_get($intake, 'txtdrug2') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            3/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug3" rows="2" cols="20" id="txtdrug3" class="form-control">{{ array_get($intake, 'txtdrug3') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            4/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug4" rows="2" cols="20" id="txtdrug4" class="form-control">{{ array_get($intake, 'txtdrug4') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            5/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug5" rows="2" cols="20" id="txtdrug5" class="form-control">{{ array_get($intake, 'txtdrug5') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            6/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug6" rows="2" cols="20" id="txtdrug6" class="form-control">{{ array_get($intake, 'txtdrug6') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            7/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug7" rows="2" cols="20"id="txtdrug7" class="form-control">{{ array_get($intake, 'txtdrug7') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            8/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug8" rows="2" cols="20" id="txtdrug8" class="form-control">{{ array_get($intake, 'txtdrug8') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            9/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug9" rows="2" cols="20" id="txtdrug9" class="form-control">{{ array_get($intake, 'txtdrug9') }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <label>
                            10/.</label>
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <textarea name="txtdrug10" rows="2" cols="20" id="txtdrug10" class="form-control">{{ array_get($intake, 'txtdrug10') }}</textarea>
                    </div>
                </div>
                <br>


            </div>
        </div>

        <div class="row">
            <div class="col-ms-11 col-sm-11">
            </div>
            <div class="col-ms-1 col-sm-1">
                <input type="submit" name="Btnnext" value="Next" id="Btnnext" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

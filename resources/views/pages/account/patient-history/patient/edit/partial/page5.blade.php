<div class="row">
    <form action="{{ route('account.patient-history.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="page" value="5">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label style="color: #1E5494">
                                            IMMUNISATION
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <table class="table table-bordered" style="width:100%;">
                                                <thead style="background-color:gray">
                                                    <tr>
                                                        <th colspan="2">Vaccine</th>
                                                        <th colspan="2">Age</th>
                                                        <th colspan="2">Yes / No</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_lblhepa">
                                                            <ul><li>Hepatitis B (hepB)a</li></ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2">
                                                            <input type="text" size="3" maxlength="3" name="immunization_one_age" value="{{ array_get($intake, 'immunization_one_age') }}" placeholder="age" />
                                                        </td>
                                                        <td colspan="2">
                                                            <table id="immunization_one">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_one_0" type="radio" name="immunization_one" value="1"{{ array_get($intake, 'immunization_one')==1?'checked="checked"':'' }}><label for="immunization_one_0">Yes</label></td>
                                                                        <td><input id="immunization_one_1" type="radio" name="immunization_one" value="0"{{ array_get($intake, 'immunization_one')==0?'checked="checked"':'' }}><label for="immunization_one_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_vacname">
                                                                <ul>
                                                                    <li>Hepatitis B, diphtheria, tetanus, acellular pertussis (whooping cough),</li>
                                                                    <li>Haemophilus influenzae type b, inactivated poliomyelitis (polio) (hepB-DTPa-Hib-IPV)</li>
                                                                    <li>neumococcal conjugate (13vPCV)</li>
                                                                    <li>Rotavirus</li>
                                                                </ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2"><input type="text" size="3" maxlength="3" name="immunization_two_age" value="{{ array_get($intake, 'immunization_two_age') }}" placeholder="age" /></td>
                                                        <td colspan="2">
                                                            <table id="immunization_two">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_two_0" type="radio" name="immunization_two" value="1"{{ array_get($intake, 'immunization_two')==1?'checked="checked"':'' }}><label for="immunization_two_0">Yes</label></td>
                                                                        <td><input id="immunization_two_1" type="radio" name="immunization_two" value="0"{{ array_get($intake, 'immunization_two')==0?'checked="checked"':'' }}><label for="immunization_two_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_lbl3">
                                                                <ul>
                                                                    <li>Hepatitis B, diphtheria, tetanus, acellular pertussis (whooping cough), Haemophilus influenzae type b, inactivated poliomyelitis (polio) (hepB-DTPa-Hib-IPV)</li>
                                                                    <li>Pneumococcal conjugate (13vPCV)</li>
                                                                    <li>Rotavirus</li>
                                                                </ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2"><input type="text" size="3" maxlength="3" name="immunization_three_age" value="{{ array_get($intake, 'immunization_three_age') }}" placeholder="age" /></td>
                                                        <td colspan="2">
                                                            <table id="immunization_three">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_three_0" type="radio" name="immunization_three" value="1"{{ array_get($intake, 'immunization_three')==1?'checked="checked"':'' }}><label for="immunization_three_0">Yes</label></td>
                                                                        <td><input id="immunization_three_1" type="radio" name="immunization_three" value="0"{{ array_get($intake, 'immunization_three')==0?'checked="checked"':'' }}><label for="immunization_three_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_lbl4">
                                                                <ul>
                                                                    <li>Hepatitis B, diphtheria, tetanus, acellular pertussis (whooping cough), Haemophilus influenzae type b, inactivated poliomyelitis (polio) (hepB-DTPa-Hib-IPV)</li>
                                                                    <li>Pneumococcal conjugate (13vPCV)</li>
                                                                    <li>Rotavirus b</li>
                                                                </ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2"><input type="text" size="3" maxlength="3" name="immunization_four_age" value="{{ array_get($intake, 'immunization_four_age') }}" placeholder="age" /></td>
                                                        <td colspan="2">
                                                            <table id="immunization_four">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_four_0" type="radio" name="immunization_four" value="1"{{ array_get($intake, 'immunization_four')==1?'checked="checked"':'' }}><label for="immunization_four_0">Yes</label></td>
                                                                        <td><input id="immunization_four_1" type="radio" name="immunization_four" value="0"{{ array_get($intake, 'immunization_four')==0?'checked="checked"':'' }}><label for="immunization_four_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_lbl5">
                                                                <ul>
                                                                    <li>Haemophilus influenzae type b and meningococcal C (Hib-MenC)</li>
                                                                    <li>Measles, mumps and rubella (MMR)</li>
                                                                </ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2"><input type="text" size="3" maxlength="3" name="immunization_five_age" value="{{ array_get($intake, 'immunization_five_age') }}" placeholder="age" /></td>
                                                        <td colspan="2">
                                                            <table id="immunization_five">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_five_0" type="radio" name="immunization_five" value="1"{{ array_get($intake, 'immunization_five')==1?'checked="checked"':'' }}><label for="immunization_five_0">Yes</label></td>
                                                                        <td><input id="immunization_five_1" type="radio" name="immunization_five" value="0"{{ array_get($intake, 'immunization_five')==0?'checked="checked"':'' }}><label for="immunization_five_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_lbl6">
                                                                <ul><li>Measles, mumps, rubella and varicella (chickenpox) (MMRV)</li></ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2"><input type="text" size="3" maxlength="3" name="immunization_six_age" value="{{ array_get($intake, 'immunization_six_age') }}" placeholder="age" /></td>
                                                        <td colspan="2">
                                                            <table id="immunization_six">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_six_0" type="radio" name="immunization_six" value="1"{{ array_get($intake, 'immunization_six')==1?'checked="checked"':'' }}><label for="immunization_six_0">Yes</label></td>
                                                                        <td><input id="immunization_six_1" type="radio" name="immunization_six" value="0"{{ array_get($intake, 'immunization_six')==0?'checked="checked"':'' }}><label for="immunization_six_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label id="ContentPlaceHolder1_lbl7">
                                                                <ul>
                                                                    <li>Diphtheria, tetanus, acellular pertussis (whooping cough) and inactivated poliomyelitis (polio) (DTPa-IPV)</li>
                                                                    <li>Measles, mumps and rubella (MMR) (to be given only if MMRV vaccine was not given at 18 months)</li>
                                                                </ul>
                                                            </label>
                                                        </td>
                                                        <td colspan="2"><input type="text" size="3" maxlength="3" name="immunization_seven_age" value="{{ array_get($intake, 'immunization_seven_age') }}" placeholder="age" /></td>
                                                        <td colspan="2">
                                                            <table id="immunization_seven">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input id="immunization_seven_0" type="radio" name="immunization_seven" value="1"{{ array_get($intake, 'immunization_seven')==1?'checked="checked"':'' }}><label for="immunization_seven_0">Yes</label></td>
                                                                        <td><input id="immunization_seven_1" type="radio" name="immunization_seven" value="0"{{ array_get($intake, 'immunization_seven')==0?'checked="checked"':'' }}><label for="immunization_seven_1">No</label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
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
            <p style="text-align: center">
            </p>
        </div>
    </form>
</div>

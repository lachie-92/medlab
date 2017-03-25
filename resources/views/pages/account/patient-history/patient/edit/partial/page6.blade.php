<div class="row">
    <form action="{{ route('account.patient-history.update', $history->id) }}" method="POST" id="patient-history">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="page" value="6"> @endif
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="container-fluid medlab_panel_container">
                    <div class="col-md-12 col-sm-12">
                        <div class="panel panel-primary medlab_panel">
                            <div class="panel-heading medlab_panel_title">
                                <h3 class="panel-title pull-left">
                                    Patient History
                                </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <label style="color: #1E5494">
                                            SUBSTANCE USE
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table table-bordered" style="width:100%;">
                                            <thead style="background-color:gray">
                                                <tr>
                                                    <th>DRUG CATEGORY</th>
                                                    <th>Age when you first used this:</th>
                                                    <th>How much &amp; how often did you use this? </th>
                                                    <th>How many years did you use this?</th>
                                                    <th>When did you last use this?</th>
                                                    <th>Do you currently use this?</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>ALCOHOL</label>
                                                    </td>
                                                    <td>
                                                        <input name="substance_alcohol_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_alcohol_age" value="{{ array_get($intake, 'substance_alcohol_age') }}" class="form-control"
                                                        autocomplete="off"> </td>
                                                    <td>
                                                        <input name="substance_alcohol_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_alcohol_frequency" value="{{ array_get($intake, 'substance_alcohol_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_alcohol_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_alcohol_years" value="{{ array_get($intake, 'substance_alcohol_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_alcohol_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_alcohol_lastuse" value="{{ array_get($intake, 'substance_alcohol_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="rblOption">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_alcohol_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_alcohol" value="1" {{ array_get($intake, 'substance_alcohol')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_alcohol_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_alcohol_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_alcohol" value="0" {{ array_get($intake, 'substance_alcohol')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_alcohol_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>TOBACCO</label>
                                                        <p>Cigarettes, Cigars, Vapour Cigarettes</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_tobacco_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_tobacco_age" value="{{ array_get($intake, 'substance_tobacco_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_tobacco_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_tobacco_frequency" value="{{ array_get($intake, 'substance_tobacco_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_tobacco_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_tobacco_years" value="{{ array_get($intake, 'substance_tobacco_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_tobacco_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_tobacco_lastuse" value="{{ array_get($intake, 'substance_tobacco_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_tobacco">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_tobacco_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_tobacco" value="1" {{ array_get($intake, 'substance_tobacco')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_tobacco_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_tobacco_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_tobacco" value="0" {{ array_get($intake, 'substance_tobacco')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_tobacco_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>CANNABIS</label>
                                                        <p>Marijuana, Hashish, Hash oil</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_cannabis_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cannabis_age" value="{{ array_get($intake, 'substance_cannabis_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_cannabis_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cannabis_frequency" value="{{ array_get($intake, 'substance_cannabis_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_cannabis_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cannabis_years" value="{{ array_get($intake, 'substance_cannabis_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_cannabis_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cannabis_lastuse" value="{{ array_get($intake, 'substance_cannabis_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_cannabis">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_cannabis_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_cannabis" value="1" {{ array_get($intake, 'substance_cannabis')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_cannabis_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_cannabis_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_cannabis" value="0" {{ array_get($intake, 'substance_cannabis')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_cannabis_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>STIMULANTS</label>
                                                        <p>Cocaine, Crack</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_cocaine_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cocaine_age" value="{{ array_get($intake, 'substance_cocaine_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_cocaine_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cocaine_frequency" value="{{ array_get($intake, 'substance_cocaine_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_cocaine_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cocaine_years" value="{{ array_get($intake, 'substance_cocaine_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_cocaine_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_cocaine_lastuse" value="{{ array_get($intake, 'substance_cocaine_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_cocaine">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_cocaine_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_cocaine" value="1" {{ array_get($intake, 'substance_cocaine')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_cocaine_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_cocaine_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_cocaine" value="0" {{ array_get($intake, 'substance_cocaine')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_cocaine_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>STIMULANTS</label>
                                                        <p>Methamphetamines - speed, ice, crank</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_methamphetamines_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methamphetamines_age" value="{{ array_get($intake, 'substance_methamphetamines_age') }}"
                                                        class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_methamphetamines_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methamphetamines_frequency" value="{{ array_get($intake, 'substance_methamphetamines_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_methamphetamines_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methamphetamines_years" value="{{ array_get($intake, 'substance_methamphetamines_years') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_methamphetamines_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="TextBox75" value="{{ array_get($intake, 'TextBox75') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_methamphetamines">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_methamphetamines_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_methamphetamines" value="1" {{ array_get($intake,
                                                                        'substance_methamphetamines')==1? 'checked="checked"': '' }}>
                                                                        <label for="substance_methamphetamines_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_methamphetamines_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_methamphetamines" value="0" {{ array_get($intake,
                                                                        'substance_methamphetamines')==0? 'checked="checked"': '' }}>
                                                                        <label for="substance_methamphetamines_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>AMPHETAMINES/OTHER STIMULANTS </label>
                                                        <p>Ritalin, Benzedrine, Dexedrine</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_amphetamines_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_amphetamines_age" value="{{ array_get($intake, 'substance_amphetamines_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_amphetamines_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_amphetamines_frequency" value="{{ array_get($intake, 'substance_amphetamines_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_amphetamines_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_amphetamines_years" value="{{ array_get($intake, 'substance_amphetamines_years') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_amphetamines_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_amphetamines_lastuse" value="{{ array_get($intake, 'substance_amphetamines_lastuse') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_amphetamines">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_amphetamines_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_amphetamines" value="1" {{ array_get($intake,
                                                                        'substance_amphetamines')==1? 'checked="checked"': '' }}>
                                                                        <label for="substance_amphetamines_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_amphetamines_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_amphetamines" value="0" {{ array_get($intake,
                                                                        'substance_amphetamines')==0? 'checked="checked"': '' }}>
                                                                        <label for="substance_amphetamines_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            BENZODIAZEPINES/
                                                            <p>TRANSQUILIZERS</p>
                                                        </label>
                                                        <p>Valium, Librium, Halcion,</p>
                                                        <p>Xanax, Diazepam, “Roofies”</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_benzodiazepines_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_benzodiazepines_age" value="{{ array_get($intake, 'substance_benzodiazepines_age') }}"
                                                        class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_benzodiazepines_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_benzodiazepines_frequency" value="{{ array_get($intake, 'substance_benzodiazepines_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_benzodiazepines_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_benzodiazepines_years" value="{{ array_get($intake, 'substance_benzodiazepines_years') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_benzodiazepines_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="TextBox83" value="{{ array_get($intake, 'TextBox83') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_benzodiazepines">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_benzodiazepines_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_benzodiazepines" value="1" {{ array_get($intake,
                                                                        'substance_benzodiazepines')==1? 'checked="checked"': '' }}>
                                                                        <label for="substance_benzodiazepines_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_benzodiazepines_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_benzodiazepines" value="0" {{ array_get($intake,
                                                                        'substance_benzodiazepines')==0? 'checked="checked"': '' }}>
                                                                        <label for="substance_benzodiazepines_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            SEDATIVES/HYPNOTICS/
                                                            <p>BARBITURATES</p>
                                                        </label>
                                                        <p>Amytal, Seconal, Dalmane,</p>
                                                        <p>Quaalude, Phenobarbital</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_sedatives_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_sedatives_age" value="{{ array_get($intake, 'substance_sedatives_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_sedatives_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_sedatives_frequency" value="{{ array_get($intake, 'substance_sedatives_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_sedatives_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_sedatives_years" value="{{ array_get($intake, 'substance_sedatives_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_sedatives_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="TextBox87" value="{{ array_get($intake, 'TextBox87') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_sedatives">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_sedatives_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_sedatives" value="1" {{ array_get($intake, 'substance_sedatives')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_sedatives_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_sedatives_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_sedatives" value="0" {{ array_get($intake, 'substance_sedatives')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_sedatives_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>HEROIN </label>
                                                    </td>
                                                    <td>
                                                        <input name="substance_heroin_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_heroin_age" value="{{ array_get($intake, 'substance_heroin_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_heroin_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_heroin_frequency" value="{{ array_get($intake, 'substance_heroin_frequency') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_heroin_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_heroin_years" value="{{ array_get($intake, 'substance_heroin_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_heroin_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_heroin_lastuse" value="{{ array_get($intake, 'substance_heroin_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_heroin">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_heroin_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_heroin" value="1" {{ array_get($intake, 'substance_heroin')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_heroin_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_heroin_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_heroin" value="0" {{ array_get($intake, 'substance_heroin')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_heroin_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            STREET OR ILLICIT/
                                                            <p>METHADONE</p>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input name="substance_methadone_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methadone_age" value="{{ array_get($intake, 'substance_methadone_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_methadone_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methadone_frequency" value="{{ array_get($intake, 'substance_methadone_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_methadone_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methadone_years" value="{{ array_get($intake, 'substance_methadone_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_methadone_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_methadone_lastuse" value="{{ array_get($intake, 'substance_methadone_lastuse') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_methadone">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_methadone_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_methadone" value="1" {{ array_get($intake, 'substance_methadone')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_methadone_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_methadone_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_methadone" value="0" {{ array_get($intake, 'substance_methadone')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_methadone_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>OTHER OPIOIDS </label>
                                                        <p>Tylenol #2 &amp; #3, 282s, 292s</p>
                                                        <p>Percodan, Percocet, Opium</p>
                                                        <p>Morphine, Demerol, Dilaudid</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_opioids_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_opioids_age" value="{{ array_get($intake, 'substance_opioids_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_opioids_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_opioids_frequency" value="{{ array_get($intake, 'substance_opioids_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_opioids_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_opioids_years" value="{{ array_get($intake, 'substance_opioids_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_opioids_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_opioids_lastuse" value="{{ array_get($intake, 'substance_opioids_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_opioids">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_opioids_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_opioids" value="1" {{ array_get($intake, 'substance_opioids')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_opioids_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_opioids_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_opioids" value="0" {{ array_get($intake, 'substance_opioids')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_opioids_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>HALLUCINOGENS</label>
                                                        <p>LSD, PCP, STP, MDA, DAT, </p>
                                                        <p>mescaline, peyote,</p>
                                                        <p>mushrooms, ecstasy (MDMA)</p>
                                                        <p>nitrous oxide</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_hallucinogens_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_hallucinogens_age" value="{{ array_get($intake, 'substance_hallucinogens_age') }}"
                                                        class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_hallucinogens_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_hallucinogens_frequency" value="{{ array_get($intake, 'substance_hallucinogens_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_hallucinogens_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_hallucinogens_years" value="{{ array_get($intake, 'substance_hallucinogens_years') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_hallucinogens_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_hallucinogens_lastuse" value="{{ array_get($intake, 'substance_hallucinogens_lastuse') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_hallucinogens">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_hallucinogens_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_hallucinogens" value="1" {{ array_get($intake,
                                                                        'substance_hallucinogens')==1? 'checked="checked"': '' }}>
                                                                        <label for="substance_hallucinogens_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_hallucinogens_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_hallucinogens" value="0" {{ array_get($intake,
                                                                        'substance_hallucinogens')==0? 'checked="checked"': '' }}>
                                                                        <label for="substance_hallucinogens_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>INHALENTS</label>
                                                        <p>Glue, gasoline, aerosols, paint</p>
                                                        <p>thinner, poppers, rush, locker</p>
                                                        <p>room</p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_inhalents_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_inhalents_age" value="{{ array_get($intake, 'substance_inhalents_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_inhalents_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_inhalents_frequency" value="{{ array_get($intake, 'substance_inhalents_frequency') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_inhalents_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_inhalents_years" value="{{ array_get($intake, 'substance_inhalents_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_inhalents_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_inhalents_lastuse" value="{{ array_get($intake, 'substance_inhalents_lastuse') }}"
                                                        class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_inhalents">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_inhalents_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_inhalents" value="1" {{ array_get($intake, 'substance_inhalents')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_inhalents_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_inhalents_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_inhalents" value="0" {{ array_get($intake, 'substance_inhalents')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_inhalents_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>OTHER: (specify)</label>
                                                        <p>
                                                            <input name="substance_other_name" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_other_name" value="{{ array_get($intake, 'substance_other_name') }}" class="form-control">
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <input name="substance_other_age" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_other_age" value="{{ array_get($intake, 'substance_other_age') }}" class="form-control"> </td>
                                                    <td>
                                                        <input name="substance_other_frequency" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_other_frequency" value="{{ array_get($intake, 'substance_other_frequency') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_other_years" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_other_years" value="{{ array_get($intake, 'substance_other_years') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input name="substance_other_lastuse" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="substance_other_lastuse" value="{{ array_get($intake, 'substance_other_lastuse') }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <table id="substance_other">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input id="substance_other_0" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_other" value="1" {{ array_get($intake, 'substance_other')==1?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_other_0">Yes</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="substance_other_1" type="radio" {{ isset($readOnly)? 'disabled="disabled"': '' }} name="substance_other" value="0" {{ array_get($intake, 'substance_other')==0?
                                                                        'checked="checked"': '' }}>
                                                                        <label for="substance_other_1">No</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                        <input type="submit" name="_Btnnext" value="Finish" id="Btnnext" class="btn btn-primary">
                                    </div>
                                </div>
                                @endif
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

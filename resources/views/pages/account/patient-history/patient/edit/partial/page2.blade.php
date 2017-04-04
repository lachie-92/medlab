@section('custom_script')
<script type="text/javascript" src="/js/intake.js"></script>
@endsection

    <form action="{{ route('account.patient-history.update', $history->id) }}" method="POST" id="patient-history">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="2">
        @endif
        <div class="col-md-12 col-sm-12">
             <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Patient History &mdash; Page 2
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-md-12 col-sm-12">
                                <div style="background-color: transparent; background-image: none">

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
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_diabetes" type="hidden" name="medicalhistory_diabetes" value="{{ array_get($intake, 'medicalhistory_diabetes', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_diabetes" class="shadowCheckbox" name="_medicalhistory_diabetes" value="1" {{ array_get($intake, 'medicalhistory_diabetes')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_diabetes">Diabetes</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_heartmurmur" type="hidden" name="medicalhistory_heartmurmur" value="{{ array_get($intake, 'medicalhistory_heartmurmur', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_heartmurmur" class="shadowCheckbox" name="_medicalhistory_heartmurmur" value="1" {{ array_get($intake, 'medicalhistory_heartmurmur')=="1"?'checked="checked"':"" }}>

                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_heartmurmur">Heart Murmur</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_crohnsdisease" type="hidden" name="medicalhistory_crohnsdisease" value="{{ array_get($intake, 'medicalhistory_crohnsdisease', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_crohnsdisease" class="shadowCheckbox" name="_medicalhistory_crohnsdisease" value="1" {{ array_get($intake, 'medicalhistory_crohnsdisease')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_crohnsdisease">Crohn’s Disease</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_highbloodpressure" type="hidden" name="medicalhistory_highbloodpressure" value="{{ array_get($intake, 'medicalhistory_highbloodpressure', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_highbloodpressure" class="shadowCheckbox" name="_medicalhistory_highbloodpressure" value="1" {{ array_get($intake, 'medicalhistory_highbloodpressure')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_highbloodpressure">High Blood Pressure</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_highcholesterol" type="hidden" name="medicalhistory_highcholesterol" value="{{ array_get($intake, 'medicalhistory_highcholesterol', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_highcholesterol" class="shadowCheckbox" name="_medicalhistory_highcholesterol" value="1" {{ array_get($intake, 'medicalhistory_highcholesterol')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_highcholesterol">High Cholesterol</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_hypothyroidism" type="hidden" name="medicalhistory_hypothyroidism" value="{{ array_get($intake, 'medicalhistory_hypothyroidism', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_hypothyroidism" class="shadowCheckbox" name="_medicalhistory_hypothyroidism" value="1" {{ array_get($intake, 'medicalhistory_hypothyroidism')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_hypothyroidism">Hypothyroidism</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_goiter" type="hidden" name="medicalhistory_goiter" value="{{ array_get($intake, 'medicalhistory_goiter', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_goiter" class="shadowCheckbox" name="_medicalhistory_goiter" value="1" {{ array_get($intake, 'medicalhistory_goiter')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_goiter">Goiter</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_leukemia" type="hidden" name="medicalhistory_leukemia" value="{{ array_get($intake, 'medicalhistory_leukemia', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_leukemia" class="shadowCheckbox" name="_medicalhistory_leukemia" value="1" {{ array_get($intake, 'medicalhistory_leukemia')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_leukemia">Leukemia</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_psoriasis" type="hidden" name="medicalhistory_psoriasis" value="{{ array_get($intake, 'medicalhistory_psoriasis', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_psoriasis" class="shadowCheckbox" name="_medicalhistory_psoriasis" value="1" {{ array_get($intake, 'medicalhistory_psoriasis')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_psoriasis">Psoriasis</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_angina" type="hidden" name="medicalhistory_angina" value="{{ array_get($intake, 'medicalhistory_angina', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_angina" class="shadowCheckbox" name="_medicalhistory_angina" value="1" {{ array_get($intake, 'medicalhistory_angina')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_angina">Angina</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_heartproblems" type="hidden" name="medicalhistory_heartproblems" value="{{ array_get($intake, 'medicalhistory_heartproblems', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_heartproblems" class="shadowCheckbox" name="_medicalhistory_heartproblems" value="1" {{ array_get($intake, 'medicalhistory_heartproblems')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_heartproblems">Heart Problems</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_pneumonia" type="hidden" name="medicalhistory_pneumonia" value="{{ array_get($intake, 'medicalhistory_pneumonia', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_pneumonia" class="shadowCheckbox" name="_medicalhistory_pneumonia" value="1" {{ array_get($intake, 'medicalhistory_pneumonia')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_pneumonia">Pneumonia</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_pulmonaryembolism" type="hidden" name="medicalhistory_pulmonaryembolism" value="{{ array_get($intake, 'medicalhistory_pulmonaryembolism', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_pulmonaryembolism" class="shadowCheckbox" name="_medicalhistory_pulmonaryembolism" value="1" {{ array_get($intake, 'medicalhistory_pulmonaryembolism')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_pulmonaryembolism">Pulmonary Embolism</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_asthma" type="hidden" name="medicalhistory_asthma" value="{{ array_get($intake, 'medicalhistory_asthma', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_asthma" class="shadowCheckbox" name="_medicalhistory_asthma" value="1" {{ array_get($intake, 'medicalhistory_asthma')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_asthma">Asthma</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_emphysema" type="hidden" name="medicalhistory_emphysema" value="{{ array_get($intake, 'medicalhistory_emphysema', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_emphysema" class="shadowCheckbox" name="_medicalhistory_emphysema" value="1" {{ array_get($intake, 'medicalhistory_emphysema')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_emphysema">Emphysema</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_stroke" type="hidden" name="medicalhistory_stroke" value="{{ array_get($intake, 'medicalhistory_stroke', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_stroke" class="shadowCheckbox" name="_medicalhistory_stroke" value="1" {{ array_get($intake, 'medicalhistory_stroke')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_stroke">Stroke</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_epilepsy" type="hidden" name="medicalhistory_epilepsy" value="{{ array_get($intake, 'medicalhistory_epilepsy', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_epilepsy" class="shadowCheckbox" name="_medicalhistory_epilepsy" value="1" {{ array_get($intake, 'medicalhistory_epilepsy')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_epilepsy">Epilepsy (Seizures)</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_cataracts" type="hidden" name="medicalhistory_cataracts" value="{{ array_get($intake, 'medicalhistory_cataracts', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_cataracts" class="shadowCheckbox" name="_medicalhistory_cataracts" value="1" {{ array_get($intake, 'medicalhistory_cataracts')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_cataracts">Cataracts</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_kidneydisease" type="hidden" name="medicalhistory_kidneydisease" value="{{ array_get($intake, 'medicalhistory_kidneydisease', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_kidneydisease" class="shadowCheckbox" name="_medicalhistory_kidneydisease" value="1" {{ array_get($intake, 'medicalhistory_kidneydisease')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_kidneydisease">Kidney Disease</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_kidneystones" type="hidden" name="medicalhistory_kidneystones" value="{{ array_get($intake, 'medicalhistory_kidneystones', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_kidneystones" class="shadowCheckbox" name="_medicalhistory_kidneystones" value="1" {{ array_get($intake, 'medicalhistory_kidneystones')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_kidneystones">Kidney Stones</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_colitis" type="hidden" name="medicalhistory_colitis" value="{{ array_get($intake, 'medicalhistory_colitis', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_colitis" class="shadowCheckbox" name="_medicalhistory_colitis" value="1" {{ array_get($intake, 'medicalhistory_colitis')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_colitis">Colitis</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_anemia" type="hidden" name="medicalhistory_anemia" value="{{ array_get($intake, 'medicalhistory_anemia', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_anemia" class="shadowCheckbox" name="_medicalhistory_anemia" value="1" {{ array_get($intake, 'medicalhistory_anemia')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_anemia">Anemia</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_jaundice" type="hidden" name="medicalhistory_jaundice" value="{{ array_get($intake, 'medicalhistory_jaundice', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_jaundice" class="shadowCheckbox" name="_medicalhistory_jaundice" value="1" {{ array_get($intake, 'medicalhistory_jaundice')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_jaundice">Jaundice</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_hepatitis" type="hidden" name="medicalhistory_hepatitis" value="{{ array_get($intake, 'medicalhistory_hepatitis', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_hepatitis" class="shadowCheckbox" name="_medicalhistory_hepatitis" value="1" {{ array_get($intake, 'medicalhistory_hepatitis')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_hepatitis">Hepatitis</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_stomachpepticulcer" type="hidden" name="medicalhistory_stomachpepticulcer" value="{{ array_get($intake, 'medicalhistory_stomachpepticulcer', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_stomachpepticulcer" class="shadowCheckbox" name="_medicalhistory_stomachpepticulcer" value="1" {{ array_get($intake, 'medicalhistory_stomachpepticulcer')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_stomachpepticulcer">Stomach or Peptic Ulcer</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_rheumaticfever" type="hidden" name="medicalhistory_rheumaticfever" value="{{ array_get($intake, 'medicalhistory_rheumaticfever', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_rheumaticfever" class="shadowCheckbox" name="_medicalhistory_rheumaticfever" value="1" {{ array_get($intake, 'medicalhistory_rheumaticfever')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_rheumaticfever">Rheumatic Fever</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_tuberculosis" type="hidden" name="medicalhistory_tuberculosis" value="{{ array_get($intake, 'medicalhistory_tuberculosis', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_tuberculosis" class="shadowCheckbox" name="_medicalhistory_tuberculosis" value="1" {{ array_get($intake, 'medicalhistory_tuberculosis')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_tuberculosis">Tuberculosis</label>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_hivaids" type="hidden" name="medicalhistory_hivaids" value="{{ array_get($intake, 'medicalhistory_hivaids', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_hivaids" class="shadowCheckbox" name="_medicalhistory_hivaids" value="1" {{ array_get($intake, 'medicalhistory_hivaids')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <label for="medicalhistory_hivaids">HIV/AIDS</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-sm-1">
                                            <input id="medicalhistory_cancer" type="hidden" name="medicalhistory_cancer" value="{{ array_get($intake, 'medicalhistory_cancer', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_cancer" class="shadowCheckbox" name="_medicalhistory_cancer" value="1" {{ array_get($intake, 'medicalhistory_cancer')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <label for="medicalhistory_cancer">Cancer (type)</label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input name="medicalhistory_cancer_type" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="medicalhistory_cancer_type" class="form-control" value="{{ array_get($intake, 'medicalhistory_cancer_type') }}">
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                           <input id="medicalhistory_otherstd" type="hidden" name="medicalhistory_otherstd" value="{{ array_get($intake, 'medicalhistory_otherstd', 0) }}" />
                                           <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_medicalhistory_otherstd" class="shadowCheckbox" name="_medicalhistory_otherstd" value="1" {{ array_get($intake, 'medicalhistory_otherstd')=="1"?'checked="checked"':"" }}>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <label for="medicalhistory_otherstd">OTHER STD</label>
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

                                            <textarea name="medicalhistory_other" rows="2" cols="20" id="medicalhistory_other" class="form-control" {{ isset($readOnly)?'disabled="disabled"':'' }}>{{ array_get($intake, 'medicalhistory_other') }}</textarea>
                                        </div>
                                    </div>
                                        <br>

                                    </div>
                                    </div>

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
                                                        <td><input id="ContentPlaceHolder1_personalhistory_education_0" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_education" value="1" {{ array_get($intake, 'personalhistory_education')==1?'checked="checked"':"" }}><label for="ContentPlaceHolder1_personalhistory_education_0">High School</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_personalhistory_education_1" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_education" value="2" {{ array_get($intake, 'personalhistory_education')==2?'checked="checked"':"" }}><label for="ContentPlaceHolder1_personalhistory_education_1">College Graduate</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_personalhistory_education_2" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_education" value="3" {{ array_get($intake, 'personalhistory_education')==3?'checked="checked"':"" }}><label for="ContentPlaceHolder1_personalhistory_education_2">Some College</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_personalhistory_education_3" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_education" value="4" {{ array_get($intake, 'personalhistory_education')==4?'checked="checked"':"" }}><label for="ContentPlaceHolder1_personalhistory_education_3">Advanced Degree</label></td>
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
                                                        <td><input id="ContentPlaceHolder1_chk_personalhistory_maritalstatus_0" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_maritalstatus" value="1" {{ array_get($intake, 'personalhistory_maritalstatus')==1?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_personalhistory_maritalstatus_0">Married</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_personalhistory_maritalstatus_1" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_maritalstatus" value="2" {{ array_get($intake, 'personalhistory_maritalstatus')==2?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_personalhistory_maritalstatus_1">Divorced</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_personalhistory_maritalstatus_2" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_maritalstatus" value="3" {{ array_get($intake, 'personalhistory_maritalstatus')==3?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_personalhistory_maritalstatus_2">Widowed</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_personalhistory_maritalstatus_3" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_maritalstatus" value="4" {{ array_get($intake, 'personalhistory_maritalstatus')==4?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_personalhistory_maritalstatus_3">Separated</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_personalhistory_maritalstatus_4" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_maritalstatus" value="5" {{ array_get($intake, 'personalhistory_maritalstatus')==5?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_personalhistory_maritalstatus_4">Never Married</label></td>
                                                    </tr><tr>
                                                        <td><input id="ContentPlaceHolder1_chk_personalhistory_maritalstatus_5" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_maritalstatus" value="6" {{ array_get($intake, 'personalhistory_maritalstatus')==6?'checked="checked"':"" }}><label for="ContentPlaceHolder1_chk_personalhistory_maritalstatus_5">Partnered/Significant Other</label></td>
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
                                                    <td><input id="personalhistory_currentlyworking_0" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_currentlyworking" value="1" {{ array_get($intake, 'personalhistory_currentlyworking')==1?'checked="checked"':"" }}><label for="personalhistory_currentlyworking_0">Yes</label></td><td><input id="personalhistory_currentlyworking_1" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_currentlyworking" value="0" {{ array_get($intake, 'personalhistory_currentlyworking')==0?'checked="checked"':"" }}><label for="personalhistory_currentlyworking_1">No</label></td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                            <label>Hours/week</label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input name="personalhistory_workinghours" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="personalhistory_workinghours" class="form-control" value="{{ array_get($intake, 'personalhistory_workinghours') }}">
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
                                            <input id="personalhistory_statusretired" type="hidden" name="personalhistory_statusretired" value="{{ array_get($intake, 'personalhistory_statusretired', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_personalhistory_statusretired" class="shadowCheckbox" name="_personalhistory_statusretired" value="1" {{ array_get($intake, 'personalhistory_statusretired')=="1"?'checked="checked"':"" }}><label for="personalhistory_statusretired">retired</labe>
                                            <input id="personalhistory_statusdisabled" type="hidden" name="personalhistory_statusdisabled" value="{{ array_get($intake, 'personalhistory_statusdisabled', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_personalhistory_statusdisabled" class="shadowCheckbox" name="_personalhistory_statusdisabled" value="1" {{ array_get($intake, 'personalhistory_statusdisabled')=="1"?'checked="checked"':"" }}><label for="personalhistory_statusdisabled">disabled</labe>
                                            <input id="personalhistory_statussickleave" type="hidden" name="personalhistory_statussickleave" value="{{ array_get($intake, 'personalhistory_statussickleave', 0) }}" />
                                            <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_personalhistory_statussickleave" class="shadowCheckbox" name="_personalhistory_statussickleave" value="1" {{ array_get($intake, 'personalhistory_statussickleave')=="1"?'checked="checked"':"" }}><label for="personalhistory_statussickleave">sick leave</labe>
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
                                                        <td><input id="personalhistory_disabilitypension_0" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_disabilitypension" value="1"  {{ array_get($intake, 'personalhistory_disabilitypension')==1?'checked="checked"':"" }}><label for="personalhistory_disabilitypension_0">Yes</label></td><td><input id="personalhistory_disabilitypension_1" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="personalhistory_disabilitypension" value="0" {{ array_get($intake, 'personalhistory_disabilitypension')==0?'checked="checked"':"" }}><label for="personalhistory_disabilitypension_1">No</label></td>
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
                                                <input name="personalhistory_disabilitypension_detail" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="personalhistory_disabilitypension_detail" class="form-control" value="{{ array_get($intake, 'personalhistory_disabilitypension_detail') }}">
                                            </div>
                                            <div class="col-md-5"></div>
                                        </div>
                                    <div class="row">
                                        <div class="col=md-3 col-sm-3">
                                            <label>
                                                Religion
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <select name="personalhistory_religion" id="personalhistory_religion" class="form-control" {{ isset($readOnly)?'disabled="disabled"':'' }}>
                                                <option value="--Select Religion--">--Select Religion--</option>
                                                <option value="Hinduism" {{ array_get($intake, 'personalhistory_religion')=="Hinduism"?'selected="selected"':"" }}>Hinduism</option>
                                                <option value="Christianity" {{ array_get($intake, 'personalhistory_religion')=="Christianity"?'selected="selected"':"" }}>Christianity</option>
                                                <option value="Islam" {{ array_get($intake, 'personalhistory_religion')=="Islam"?'selected="selected"':"" }}>Islam</option>
                                                <option value="Buddhism" {{ array_get($intake, 'personalhistory_religion')=="Buddhism"?'selected="selected"':"" }}>Buddhism</option>
                                                <option value="Sikhism" {{ array_get($intake, 'personalhistory_religion')=="Sikhism"?'selected="selected"':"" }}>Sikhism</option>
                                                <option value="Jainism" {{ array_get($intake, 'personalhistory_religion')=="Jainism"?'selected="selected"':"" }}>Jainism</option>
                                                <option value="Judaism" {{ array_get($intake, 'personalhistory_religion')=="Judaism"?'selected="selected"':"" }}>Judaism</option>
                                                <option value="Baha'i" {{ array_get($intake, 'personalhistory_religion')=="Baha'i"?'selected="selected"':"" }}>Baha'i</option>
                                                <option value="Taoism" {{ array_get($intake, 'personalhistory_religion')=="Taoism"?'selected="selected"':"" }}>Taoism</option>
                                                <option value="Zoroastrianism" {{ array_get($intake, 'personalhistory_religion')=="Zoroastrianism"?'selected="selected"':"" }}>Zoroastrianism</option>
                                                <option value="Other" {{ array_get($intake, 'personalhistory_religion')=="Other"?'selected="selected"':"" }}>Other</option>

                                                </select>
                                        </div>
                                        <div class="col-md-5 col-sm-5"></div>
                                    </div>

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

                                                    <td><input name="familyhistory_father_living_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="txt" class="form-control" value="{{ array_get($intake, 'familyhistory_father_living_age') }}"></td>

                                                    <td><input name="familyhistory_father_living_health" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_father_living_health" class="form-control" value="{{ array_get($intake, 'familyhistory_father_living_health') }}"></td>

                                                    <td><input name="familyhistory_father_deceased_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_father_deceased_age" class="form-control" value="{{ array_get($intake, 'familyhistory_father_deceased_age') }}"></td>
                                                    <td><input name="familyhistory_father_deceased_causeofdeath" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_father_deceased_causeofdeath" class="form-control" value="{{ array_get($intake, 'familyhistory_father_deceased_causeofdeath') }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Mother</label> </td>
                                                    <td><input name="familyhistory_mother_living_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="TextBox29" class="form-control" value="{{ array_get($intake, 'familyhistory_mother_living_age') }}"></td>
                                                    <td><input name="familyhistory_mother_living_health" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_mother_living_health" class="form-control" value="{{ array_get($intake, 'familyhistory_mother_living_health') }}"></td>
                                                    <td><input name="familyhistory_mother_deceased_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_mother_deceased_age" class="form-control" value="{{ array_get($intake, 'familyhistory_mother_deceased_age') }}"></td>
                                                    <td><input name="familyhistory_mother_deceased_causeofdeath" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_mother_deceased_causeofdeath" class="form-control" value="{{ array_get($intake, 'familyhistory_mother_deceased_causeofdeath') }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Siblings</label></td>
                                                    <td><input name="familyhistory_siblings_living_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_siblings_living_age" class="form-control" value="{{ array_get($intake, 'familyhistory_siblings_living_age') }}"></td>
                                                    <td><input name="familyhistory_siblings_living_health" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_siblings_living_health" class="form-control" value="{{ array_get($intake, 'familyhistory_siblings_living_health') }}"></td>
                                                    <td><input name="familyhistory_siblings_deceased_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_siblings_deceased_age" class="form-control" value="{{ array_get($intake, 'familyhistory_siblings_deceased_age') }}"></td>
                                                    <td><input name="familyhistory_siblings_deceased_causeofdeath" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_siblings_deceased_causeofdeath" class="form-control" value="{{ array_get($intake, 'familyhistory_siblings_deceased_causeofdeath') }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Children</label></td>
                                                    <td><input name="familyhistory_children_living_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_children_living_age" class="form-control" value="{{ array_get($intake, 'familyhistory_children_living_age') }}"></td>
                                                    <td><input name="familyhistory_children_living_health" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_children_living_health" class="form-control" value="{{ array_get($intake, 'familyhistory_children_living_health') }}"></td>
                                                    <td><input name="familyhistory_children_deceased_age" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_children_deceased_age" class="form-control" value="{{ array_get($intake, 'familyhistory_children_deceased_age') }}"></td>
                                                    <td><input name="familyhistory_children_deceased_causeofdeath" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_children_deceased_causeofdeath" class="form-control" value="{{ array_get($intake, 'familyhistory_children_deceased_causeofdeath') }}"></td>
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
                                                <input name="familyhistory_maternalrelatives" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_maternalrelatives" class="form-control" value="{{ array_get($intake, 'familyhistory_maternalrelatives') }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <label>
                                                    Paternal Relatives:
                                                </label>
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <input name="familyhistory_paternalrelatives" type="text" {{ isset($readOnly)?'disabled="disabled"':'' }} id="familyhistory_paternalrelatives" class="form-control" value="{{ array_get($intake, 'familyhistory_paternalrelatives') }}">
                                            </div>

                                        </div>

                                    </div>
                                    </div>
                                    @if (!isset($readOnly))
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

    </form>


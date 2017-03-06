<div class="row">
    <form action="{{ route('account.patient-history.new.continue', 4) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 col-sm-12">
        <div class="panel panel-primary medlab_panel">

            <div class="panel-body">

                    <div class="row">
                        <div class="container-fluid">

                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <input type="hidden" name="hdid" id="hdid" value="0">

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label style="color: #1E5494">
                                                        In the past last 30 days, have you had any of the following?
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">GENERAL</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">NERVOUS SYSTEM</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                   <label style="text-align:center;color:#7AA43F">PSYCHIATRIC</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox5" type="checkbox" value="1" name="CheckBox5" {{ array_get($intake, 'CheckBox5')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Recent weight gain, How Much</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input name="txtwt" type="text" id="txtwt" class="form-control" value="{{ array_get($intake, 'txtwt') }}" placeholder="KG">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox6" type="checkbox" value="1" name="CheckBox6" {{ array_get($intake, 'CheckBox6')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Headaches</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox47" type="checkbox" value="1" name="CheckBox47" {{ array_get($intake, 'CheckBox47')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Depression</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox48" type="checkbox" value="1" name="CheckBox48" {{ array_get($intake, 'CheckBox48')=='1'?' checked="checked"':"" }}' onclick="weightloss();">
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Recent weight loss; How Much</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input name="TextBox67" type="text" id="TextBox67" class="form-control" value="{{ array_get($intake, 'TextBox67') }}" placeholder="KG">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox92" type="checkbox" value="1" name="CheckBox92" {{ array_get($intake, 'CheckBox92')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Dizziness</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox93" type="checkbox" value="1" name="CheckBox93" {{ array_get($intake, 'CheckBox93')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Excessive worries</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox94" type="checkbox" value="1" name="CheckBox94" {{ array_get($intake, 'CheckBox94')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Fatigue</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox95" type="checkbox" value="1" name="CheckBox95" {{ array_get($intake, 'CheckBox95')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Fainting or loss of consciousness </label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox96" type="checkbox" value="1" name="CheckBox96" {{ array_get($intake, 'CheckBox96')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Difficulty falling asleep</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox97" type="checkbox" value="1" name="CheckBox97" {{ array_get($intake, 'CheckBox97')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Weakness</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox98" type="checkbox" value="1" name="CheckBox98" {{ array_get($intake, 'CheckBox98')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Numbness or tingling </label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox99" type="checkbox" value="1" name="CheckBox99" {{ array_get($intake, 'CheckBox99')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Difficulty staying asleep</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox100" type="checkbox" value="1" name="CheckBox100" {{ array_get($intake, 'CheckBox100')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Fever</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox101" type="checkbox" value="1" name="CheckBox101" {{ array_get($intake, 'CheckBox101')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Memory loss</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox102" type="checkbox" value="1" name="CheckBox102" {{ array_get($intake, 'CheckBox102')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Difficult with sexual arousal</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox103" type="checkbox" value="1" name="CheckBox103" {{ array_get($intake, 'CheckBox103')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Night Sweats</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox104" type="checkbox" value="1" name="CheckBox104" {{ array_get($intake, 'CheckBox104')=='1'?' checked="checked"':"" }}' onclick="ratepain();">
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Do you suffer from pain?</label>Please rate(1-10)
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <select name="txtpain" id="txtpain" class="form-control">
                                                        <option {{ array_get($intake, 'txtpain')==1?' selected="selected"':"" }}>1</option>
                                                        <option {{ array_get($intake, 'txtpain')==2?' selected="selected"':"" }}>2</option>
                                                        <option {{ array_get($intake, 'txtpain')==3?' selected="selected"':"" }}>3</option>
                                                        <option {{ array_get($intake, 'txtpain')==4?' selected="selected"':"" }}>4</option>
                                                        <option {{ array_get($intake, 'txtpain')==5?' selected="selected"':"" }}>5</option>
                                                        <option {{ array_get($intake, 'txtpain')==6?' selected="selected"':"" }}>6</option>
                                                        <option {{ array_get($intake, 'txtpain')==7?' selected="selected"':"" }}>7</option>
                                                        <option {{ array_get($intake, 'txtpain')==8?' selected="selected"':"" }}>8</option>
                                                        <option {{ array_get($intake, 'txtpain')==9?' selected="selected"':"" }}>9</option>
                                                        <option {{ array_get($intake, 'txtpain')==10?' selected="selected"':"" }}>10</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox105" type="checkbox" value="1" name="CheckBox105" {{ array_get($intake, 'CheckBox105')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Poor appetite</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">MUSCLE/JOINT/BONES</label>
                                                </div>

                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">STOMACH AND INTESTINES</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox51" type="checkbox" value="1" name="CheckBox51" {{ array_get($intake, 'CheckBox51')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Food cravings</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox49" type="checkbox" value="1" name="CheckBox49" {{ array_get($intake, 'CheckBox49')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Numbness</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox50" type="checkbox" value="1" name="CheckBox50" {{ array_get($intake, 'CheckBox50')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Nausea</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-2 col-sm-2">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox106" type="checkbox" value="1" name="CheckBox106" {{ array_get($intake, 'CheckBox106')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Joint pain</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox107" type="checkbox" value="1" name="CheckBox107" {{ array_get($intake, 'CheckBox107')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Heartburn</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox108" type="checkbox" value="1" name="CheckBox108" {{ array_get($intake, 'CheckBox108')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Frequent crying</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox109" type="checkbox" value="1" name="CheckBox109" {{ array_get($intake, 'CheckBox109')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Muscle weakness</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox110" type="checkbox" value="1" name="CheckBox110" {{ array_get($intake, 'CheckBox110')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Stomach pain</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox111" type="checkbox" value="1" name="CheckBox111" {{ array_get($intake, 'CheckBox111')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Sensitivity</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox53" type="checkbox" value="1" name="CheckBox53" {{ array_get($intake, 'CheckBox53')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Joint swelling Where?</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox54" type="checkbox" value="1" name="CheckBox54" {{ array_get($intake, 'CheckBox54')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Vomiting</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox55" type="checkbox" value="1" name="CheckBox55" {{ array_get($intake, 'CheckBox55')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Thoughts of suicide / attempts</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">EARS</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox57" type="checkbox" value="1" name="CheckBox57" {{ array_get($intake, 'CheckBox57')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Yellow jaundice</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox58" type="checkbox" value="1" name="CheckBox58" {{ array_get($intake, 'CheckBox58')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <label>Stress</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox56" type="checkbox" value="1" name="CheckBox56" {{ array_get($intake, 'CheckBox56')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Ringing in ears</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox59" type="checkbox" value="1" name="CheckBox59" {{ array_get($intake, 'CheckBox59')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Increasing constipation</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox60" type="checkbox" value="1" name="CheckBox60" {{ array_get($intake, 'CheckBox60')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Irritability</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox112" type="checkbox" value="1" name="CheckBox112" {{ array_get($intake, 'CheckBox112')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Loss of hearing</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox113" type="checkbox" value="1" name="CheckBox113" {{ array_get($intake, 'CheckBox113')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Persistant diarrhoea</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox114" type="checkbox" value="1" name="CheckBox114" {{ array_get($intake, 'CheckBox114')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Poor concentration</label>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">EYES</label>
                                                </div>
                                               <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox64" type="checkbox" value="1" name="CheckBox64" {{ array_get($intake, 'CheckBox64')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Blood in stools</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox117" type="checkbox" value="1" name="CheckBox117" {{ array_get($intake, 'CheckBox117')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Racing thoughts</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox61" type="checkbox" value="1" name="CheckBox61" {{ array_get($intake, 'CheckBox61')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Pain</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox62" type="checkbox" value="1" name="CheckBox62" {{ array_get($intake, 'CheckBox62')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Black stools</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox63" type="checkbox" value="1" name="CheckBox63" {{ array_get($intake, 'CheckBox63')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Hallucinations</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox115" type="checkbox" value="1" name="CheckBox115" {{ array_get($intake, 'CheckBox115')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Redness</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">BLOOD</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox118" type="checkbox" value="1" name="CheckBox118" {{ array_get($intake, 'CheckBox118')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Anxiety</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox116" type="checkbox" value="1" name="CheckBox116" {{ array_get($intake, 'CheckBox116')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Loss of vision</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox119" type="checkbox" value="1" name="CheckBox119" {{ array_get($intake, 'CheckBox119')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Anemia</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox120" type="checkbox" value="1" name="CheckBox120" {{ array_get($intake, 'CheckBox120')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Risky behaviour</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox121" type="checkbox" value="1" name="CheckBox121" {{ array_get($intake, 'CheckBox121')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Double or blurred vision</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox122" type="checkbox" value="1" name="CheckBox122" {{ array_get($intake, 'CheckBox122')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Clots</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox123" type="checkbox" value="1" name="CheckBox123" {{ array_get($intake, 'CheckBox123')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Dryness</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">SKIN</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">SEXUAL HABITS:</label>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">THROAT</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox125" type="checkbox" value="1" name="CheckBox125" {{ array_get($intake, 'CheckBox125')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Skin Redness</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox124" type="checkbox" value="1" name="CheckBox124" {{ array_get($intake, 'CheckBox124')=='1'?' checked="checked"':"" }}' onclick="lastsex();">
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Other than your current partner, have you had unprotected sex? Y / N </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox126" type="checkbox" value="1" name="CheckBox126" {{ array_get($intake, 'CheckBox126')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Frequent sore throats</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox127" type="checkbox" value="1" name="CheckBox127" {{ array_get($intake, 'CheckBox127')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Rash</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>If yes:</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox128" type="checkbox" value="1" name="CheckBox128" {{ array_get($intake, 'CheckBox128')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Hoarseness</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox129" type="checkbox" value="1" name="CheckBox129" {{ array_get($intake, 'CheckBox129')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Nodules/bumps</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox130" type="radio" value="1" name="CheckBox130" {{ array_get($intake, 'CheckBox130')=='1'?' checked="checked"':"" }} />
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Last 30 days</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox131" type="checkbox" value="1" name="CheckBox131" {{ array_get($intake, 'CheckBox131')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Difficulty in swallowing</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox132" type="checkbox" value="1" name="CheckBox132" {{ array_get($intake, 'CheckBox132')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Hair loss</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox133" type="radio" value="2" name="CheckBox130" {{ array_get($intake, 'CheckBox130')=='2'?' checked="checked"':"" }} />
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Last 60 days</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox134" type="checkbox" value="1" name="CheckBox134" {{ array_get($intake, 'CheckBox134')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Pain in jaw</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox135" type="checkbox" value="1" name="CheckBox135" {{ array_get($intake, 'CheckBox135')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Colour changes of hands or feet</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox136" type="radio" value="3" name="CheckBox130" {{ array_get($intake, 'CheckBox130')=='3'?' checked="checked"':"" }} />
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Last 90 days</label>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">HEART AND LUNGS</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <label style="text-align:center;color:#7AA43F">KIDNEY/URINE/BLADDER</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox139" type="radio" value="4" name="CheckBox130" {{ array_get($intake, 'CheckBox130')=='4'?' checked="checked"':"" }} />
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Last 120 days</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox137" type="checkbox" value="1" name="CheckBox137" {{ array_get($intake, 'CheckBox137')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Chest pain</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox138" type="checkbox" value="1" name="CheckBox138" {{ array_get($intake, 'CheckBox138')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Frequent or painful urination</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label style="text-align:center;color:#7AA43F">OTHER PROBLEMS:</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox140" type="checkbox" value="1" name="CheckBox140" {{ array_get($intake, 'CheckBox140')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Palpitations</label>
                                                </div>

                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox141" type="checkbox" value="1" name="CheckBox141" {{ array_get($intake, 'CheckBox141')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Blood in urine</label>
                                                </div>
                                                <div class="col-md-1 col-sm-1">

                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <input name="txtother" type="text" id="ContentPlaceHolder1_txtother" class="form-control" value="{{ array_get($intake, 'txtother') }}">                                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox142" type="checkbox" value="1" name="CheckBox142" {{ array_get($intake, 'CheckBox142')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Shortness of breath</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox143" type="checkbox" value="1" name="CheckBox143" {{ array_get($intake, 'CheckBox143')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Fainting</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox144" type="checkbox" value="1" name="CheckBox144" {{ array_get($intake, 'CheckBox144')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Swollen legs or feet</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <input id="CheckBox145" type="checkbox" value="1" name="CheckBox145" {{ array_get($intake, 'CheckBox145')=='1'?' checked="checked"':"" }}'>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <label>Cough</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                </div>
                                            </div>
                                            <hr>


                                            <hr>


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
                    <p style="text-align: center">

                    </p>
                </div>
             </div>
        </div>
    </form>
</div>

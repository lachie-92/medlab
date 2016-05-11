<!-----------------------------------------------------------------------------------
--
-- Contact
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <!--
            -- Details
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    DETAILS
                </div>
                <div class="panel-body medlab_panel_content">
                    Medlab Clinical LTD
                    <br>
                    66 McCauley St
                    <br>
                    Alexandria, NSW
                    <br>
                    Australia 2015
                    <br>
                    <br>
                    <label>Toll Free: </label> 1300 369 570
                    <br>
                    <label>Phone: </label> 02 8188 0311
                    <br>
                    <label>Fax: </label> 02 9699 3347
                    <br>
                    <label>Email: </label> <a class="medlab_panel_content_link" href="mailto:hello@medlab.co">hello@medlab.co</a>
                    <br>
                    <label>Hours: </label> Monday - Friday. 8:30am to 5pm AEST
                </div>
            </div>

            <!--
            -- Enquires form
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    QUESTIONS, COMMENTS OR ENQUIRIES
                </div>
                <div class="panel-body medlab_panel_content">
                    <p>
                        Have a question, comment or just want to say 'Hello!', use the form below, and will get in contact with you
                    </p>
                    <form role="form" method="POST" action="/contact">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">* Name</label>
                            <input class="form-control" name="name" type="text"  placeholder="Name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">* Email</label>
                            <input class="form-control" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" name="phone" type="text" placeholder="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="enquiry">* Enquiry</label>
                            <textarea class="form-control" id="enquiry" name="enquiry" rows="3" maxlength="200" value="{{ old('enquiry') }}"></textarea>
                        </div>

                        @if (count($errors) > 0)
                            <div class="container-fluid">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="container-fluid">
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!--
        -- Google Map
        -->
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    MAP
                </div>
                <div class="panel-body">
                    <iframe width="100%" height="440" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.435244527485!2d151.19921100000002!3d-33.904196000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b1c62e6bb025%3A0x87a7d92f4052b0b7!2s66+McCauley+St%2C+Alexandria+NSW+2015!5e0!3m2!1sen!2sau!4v1409795179466"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>



   
        <div class="container">
            
            <script src='https://www.google.com/recaptcha/api.js'></script>
           

<div class="row">
                    
                    <form method="post" id="reused_form" class="plan-wrap aos-init aos-animate" data-aos="fade-up" >
                        <div class="plan-block aos-init aos-animate" data-aos="fade-up">
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input id="name" type="text" name="Name" required maxlength="50" class="form-control">
                                
                                <label for="name">Your name</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input id="email" type="email" name="Email" required maxlength="50" class="form-control">
                                
                                <label for="email">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <textarea id="message" class="form-control" name="Message" rows="4" height="5"
                                 maxlength="200" required></textarea> 
                                <label for="form8">Your message</label>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LenSH4UAAAAALKEA3tQcGehSYpXHoWGu_oxdwpe"></div>
                            <div class="text-center">
                                <button class="btn button btn-indigo waves-effect waves-light">Send</button>

                                
                                <div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                               
                            </div>

                        </div>
                   
                    </form>
                    <!-- end plan-wrap -->
                </div>
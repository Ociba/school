<!doctype html>
<html class="no-js" lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('frontlayouts.title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		@include('frontlayouts.css')
        <style>
            .button2 {
                background-color: #4CAF50; /* Green */
                margin-top: -400px;
            }
            </style>
    </head>
    <body>
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header>
                    @include('frontlayouts.menu2')   
                </header>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                @include('frontlayouts.breadcrumb')
                <!--End of Breadcrumb Banner Area-->
                
                <div class="contact-form-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h4 class="contact-title text-center">Fill In This Form For Sponsorship Application</h4>
                                <form id="contact-form" action="https://htmldemo.hasthemes.com/educat-preview/educat/mail.php" method="post">
                                    <p style="font-weight:bold;">I.Personal Information</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Name (s)<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="name">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Contact <span class="required">*</span></label>
                                            <input type="text" name="contact" placeholder="e.g. 070000000" maxlength="10">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Date of Birth <span class="required">*</span></label>
                                            <input type="date" name="date_of_birth" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nationality <span class="required">*</span></label>
                                            <input type="text" name="nationality" placeholder="eg. Ugandan">
                                        </div>
                                        <div class="col-md-4">
                                            <label>National Identification Number <span class="required">*</span></label>
                                            <input type="text" name="nin" placeholder="e.g. CM5344266288A" maxlength="14">
                                        </div>
                                        <div class="col-md-4">
                                            <label>District <span class="required">*</span></label>
                                            <select class="form-control mb-3" name="district">
                                                <option>Soroti</option>
                                                <option>Ngora</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="address" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender <span class="required">*</span></label>
                                            <select class="form-control mb-3" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <p style="font-weight:bold; margin-left: 20px;">II.Education Information</p>
                                        
                                        <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label>Sponsorship Applied For <span class="required">*</span></label>
                                            <select class="form-control mb-3" name="sponsorship_type">
                                                <option>Certificate</option>
                                                <option>Diploma</option>
                                                <option>Bachelors Degree</option>
                                                <option>Post Diploma</option>
                                                <option>Masters</option>
                                                <option>PHD</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Institutions <span class="required">*</span></label> 
                                            <select class="form-control mb-3" name="institution">
                                                <option>School</option>
                                                <option>College</option>
                                                <option>University</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Course Applied <span class="required">*</span></label>
                                            <select class="form-control mb-3" name="course">
                                                <option>Bachelor of Science in Software Engineering</option>
                                                <option>Bachelor of Oil,Mininig & Petroleum</option>
                                                <option>Bachelor of Cival Engineering</option>
                                                <option>Bachelor of Business Adminstration</option>
                                                <option>Bachelor of Public Health</option>
                                                <option>Bachelor of Political Science</option>
                                                <option>Masters of Computer Security</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Name of Admitted Institution (s)<span class="required">*</span></label>
                                            <input type="text" name="name_of_institution" placeholder="Name of Institution">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Country <span class="required">*</span></label>
                                            <input type="text" name="abroad_country" placeholder="Country where Instition is Located">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Institution Contact(Email) <span class="required">*</span></label>
                                            <input type="email" name="institution_email" placeholder="">
                                        </div>
                                       </div>
                                     </div>
                                     <p style="font-weight:bold; margin-left: 20px;">III.Parents Information</p>
                                        
                                        <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label>Sponsorship Applied For <span class="required">*</span></label><br>
                                            all alive <input type="radio" name="gender" value="male" checked class="button button2">
                                            one alive<input type="radio" name="gender" value="female" class="button button2">
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mothers Name <span class="required">*</span></label> 
                                            <input type="text" name="mothers_name" placeholder="Name of mother">
                                        </div>
                                        <div class="col-md-4">
                                            <label>NIN Number <span class="required">*</span></label>
                                            <input type="text" name="nin_number" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Job <span class="required">*</span></label>
                                            <input type="text" name="job" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mothers Contact <span class="required">*</span></label>
                                            <input type="text" name="mothers_contact" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Fathers Name <span class="required">*</span></label> 
                                            <input type="text" name="fathers_name" placeholder="Name of mother">
                                        </div>
                                        <div class="col-md-4">
                                            <label>NIN Number <span class="required">*</span></label>
                                            <input type="text" name="fnin_number" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Job <span class="required">*</span></label>
                                            <input type="text" name="fjob" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Fathers' Contact <span class="required">*</span></label>
                                            <input type="text" name="fathers_contact" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Name <span class="required">*</span></label> 
                                            <input type="text" name="ones_name" placeholder="Name of mother">
                                        </div>
                                        <div class="col-md-4">
                                            <label>NIN Number <span class="required">*</span></label>
                                            <input type="text" name="onenin_number" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Job <span class="required">*</span></label>
                                            <input type="text" name="onejob" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Contact <span class="required">*</span></label>
                                            <input type="text" name="one_contact" placeholder="">
                                        </div>
                                       </div>
                                     </div>
                                     <p style="font-weight:bold; margin-left: 20px;">III.Referee Information</p>
                                        
                                     <div class="col-lg-12 col-md-12">
                                     <div class="row">
                                        <div class="col-md-4">
                                            <label>Name of Referee 1 <span class="required">*</span></label>
                                            <input type="text" name="ref1_name" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Contact <span class="required">*</span></label>
                                            <input type="text" name="ref1_contact" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="ref1_address" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Name of Referee 2<span class="required">*</span></label>
                                            <input type="text" name="ref2_name" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Contact <span class="required">*</span></label>
                                            <input type="text" name="ref2_contact" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="ref2_address" placeholder="">
                                        </div>
                                     </div>
                                    </div>
                                        <div class="col-md-12">
                                            <textarea name="message" cols="30" rows="10" placeholder="Write a brief notes why you deserve the sponsorship"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12"><div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label>Put all vital documents to One pdf less than 10mb <span class="required">*</span></label>
                                            <input type="file" name="documents" placeholder="">
                                        </div>
                                        <div class="col-lg-8 col-md-12" style="margin-left:-150px;">
                                            <div class="newsletter-form2">
                                                    <div class="subscribe-form2">
                                                        <input id="mc-email" type="checkbox" name="email" placeholder="" style="height:20px;">
                                                        <button id="mc-submit" style="background-color:#ffffffff; border:0px #fff; color:black;"> I agree that all the Information given in this Form is True.</button>
                                                    </div> 
                                                <!-- mailchimp-alerts Start -->
                                                <div class="mailchimp-alerts text-centre fix">
                                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                                </div>
                                                <!-- mailchimp-alerts end -->
                                            </div>
                                        </div></div></div>
                                     </div>
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="button-default">Apply Now</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Newsletter Area Start-->
                @include('frontlayouts.subscribe')
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                @include('frontlayouts.footer')
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
       @include('frontlayouts.color-switcher')
        <!-- Color Switcher end -->	
        
        
		@include('frontlayouts.javascript')
    </body>
</html>
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
                <!--Event Details Area Start-->
                <div class="event-details-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-12"></div>
                            <div class="col-lg-10 col-md-12">
                                <div class="event-details-content">
                                    <div class="comments">
                                        <h4 class="title">Please This List Displays All the Successful Applicants For Sponsorship </h4>
                                        <div class="single-comment">
                                            <div class="author-image">
                                                <img src="{{ asset('front/img/comment/1.jpg')}}" alt="">
                                            </div>
                                            <div class="comment-text">
                                                <div class="author-info">
                                                    <h4><a href="#">Okello Bonface Ojok</a></h4>
                                                    <span class="reply"><a href="#">Reply</a></span>
                                                    <span class="comment-time">Posted on Jun 12, 2020 |</span>
                                                </div>
                                                <p>Bachelors Degree in Software Engineering Makerere University Kampala-Uganda. 4 Years of Study from 2022-2026 under World Education Sponsorship Funds</p>
                                            </div>
                                        </div>
                                        <div class="single-comment comment-reply">
                                            <div class="author-image">
                                                <!--<img src="{{ asset('front/img/comment/2.jpg')}}" alt="">-->
                                                <i class="fa fa-user" style="font-size: 38px;"></i>
                                            </div>
                                            <div class="comment-text">
                                                <div class="author-info">
                                                    <h4><a href="#">Ministry of Education,Science,Sports & Technology</a></h4>
                                                    <span class="comment-time">Admin </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-comment">
                                            <div class="author-image">
                                                <img src="{{ asset('front/img/comment/3.jpg')}}" alt="">
                                            </div>
                                            <div class="comment-text">
                                                <div class="author-info">
                                                    <h4><a href="#">Namulanzi Scovia</a></h4>
                                                    <span class="reply"><a href="#">Reply</a></span>
                                                    <span class="comment-time">Posted on Jun 12, 2015 |</span>
                                                </div>
                                                <p>Bachelors Degree in Oil,Petroleum & Minining University of Japan Tokyo-Japan. 3 Years of Study from 2022-2025 under Government of Uganda Education Sponsorship Funds</p>
                                            </div>
                                        </div>
                                        <div class="single-comment comment-reply">
                                            <div class="author-image">
                                                <!--<img src="{{ asset('front/img/comment/2.jpg')}}" alt="">-->
                                                <i class="fa fa-user" style="font-size: 38px;"></i>
                                            </div>
                                            <div class="comment-text">
                                                <div class="author-info">
                                                    <h4><a href="#">Ministry of Education,Science,Sports & Technology</a></h4>
                                                    <span class="comment-time">Admin </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-lg-1 col-md-12">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Event Details Area-->
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
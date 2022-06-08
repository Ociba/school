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
                    <!-- Mobile Menu Area end -->    
                </header>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                @include('frontlayouts.breadcrumb')
                <!--End of Breadcrumb Banner Area-->
                <!--Latest News Area Start--> 
                <div class="latest-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Latest News</h3>
                                        <p>There are many variations of passages</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="{{ asset('front/img/latest/1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="{{ asset('front/img/latest/2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="{{ asset('front/img/latest/3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="{{ asset('front/img/latest/4.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Latest News Area-->
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
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
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
                <!--Search Category Start-->
                <div class="search-category">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                                <form action="#" method="post">
                                    <div class="form-container">
                                        <div class="box-select">
                                            <div class="select large">
                                                <select name="category">
                                                    <option>All Categories</option>
                                                    <option>Web Design</option>
                                                    <option>Designing</option>
                                                    <option>Development</option>
                                                    <option>Programming</option>
                                                    <option>Developing</option>
                                                </select>
                                            </div>
                                            <div class="select small">
                                                <select name="date">
                                                    <option>Price</option>
                                                    <option>$10000</option>
                                                    <option>$35000</option>
                                                    <option>$67000</option>
                                                    <option>$82000</option>
                                                    <option>$95000</option>
                                                </select>
                                            </div>
                                            <div class="select medium">
                                                <select name="date">
                                                    <option>Course Type</option>
                                                    <option>Web Design</option>
                                                    <option>Designing</option>
                                                    <option>Development</option>
                                                    <option>Programming</option>
                                                    <option>Developing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button">Search Course</button>
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Search Category-->
                <!--Course Area Start-->
                <div class="course-area section-padding course-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{asset('front/img/course/1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Photoshop CC 2017</a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span>M S Nawaz</span></span>
                                            <span>Date: <span>20.5.15</span></span>
                                        </div>
                                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
        ur,There are many but the mri have suffered alteration in some </p>
                                        <div class="single-item-content">
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>   
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{asset('front/img/course/2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Illustrator CC 2017</a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span>Subas Das</span></span>
                                            <span>Date: <span>20.5.15</span></span>
                                        </div>
                                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
        ur,There are many but the mri have suffered alteration in some </p>
                                        <div class="single-item-content">
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>   
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{asset('front/img/course/3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Indesign CC 2017</a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span>Momin Boss</span></span>
                                            <span>Date: <span>20.5.15</span></span>
                                        </div>
                                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
        ur,There are many but the mri have suffered alteration in some </p>
                                        <div class="single-item-content">
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>   
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{asset('front/img/course/4.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Photoshop CC 2017</a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span>M S Nawaz</span></span>
                                            <span>Date: <span>20.5.15</span></span>
                                        </div>
                                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
        ur,There are many but the mri have suffered alteration in some </p>
                                        <div class="single-item-content">
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>   
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{asset('front/img/course/5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Illustrator CC 2017</a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span>Subas Das</span></span>
                                            <span>Date: <span>20.5.15</span></span>
                                        </div>
                                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
        ur,There are many but the mri have suffered alteration in some </p>
                                        <div class="single-item-content">
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>   
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{asset('front/img/course/6.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Indesign CC 2017</a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span>Momin Boss</span></span>
                                            <span>Date: <span>20.5.15</span></span>
                                        </div>
                                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
        ur,There are many but the mri have suffered alteration in some </p>
                                        <div class="single-item-content">
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>   
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-content">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Course Area-->
                <!--Teachers Area Start-->
                <div class="teachers-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>OUR TEACHERS</h3>
                                        <p>There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-teacher-item">
                                    <div class="single-teacher-image">
                                        <a href="#"><img src="{{asset('front/img/teacher/l-1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-teacher-text">
                                        <h3><a href="#">Louis Smith</a></h3>
                                        <h4>Teacher</h4>
                                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                                        <div class="social-links">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-teacher-item">
                                    <div class="single-teacher-image">
                                        <a href="#"><img src="{{asset('front/img/teacher/l-2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-teacher-text">
                                        <h3><a href="#">Louis Smith</a></h3>
                                        <h4>Teacher</h4>
                                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                                        <div class="social-links">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-teacher-item">
                                    <div class="single-teacher-image">
                                        <a href="#"><img src="{{asset('front/img/teacher/l-3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-teacher-text">
                                        <h3><a href="#">Louis Smith</a></h3>
                                        <h4>Teacher</h4>
                                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                                        <div class="social-links">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-teacher-item">
                                    <div class="single-teacher-image">
                                        <a href="#"><img src="{{asset('front/img/teacher/l-4.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-teacher-text">
                                        <h3><a href="#">Louis Smith</a></h3>
                                        <h4>Teacher</h4>
                                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                                        <div class="social-links">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Teachers Area-->
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
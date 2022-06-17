<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('layouts.css')
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('layouts.preloader')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
           @include('teachingstaff::layouts.teachersnavbar')
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('teachingstaff::layouts.teacherssidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                @include('layouts.breadcrumb')
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">HTML Course </h5>
                                <button onclick="Livewire.emit('openModal', 'classes')" class="btn btn-info  m-l-15 text-white"> Classes</button>
                                <div class="text-end"> <span class="text-muted">Monthly Fees</span>
                                    <h2><sup><i class="ti-arrow-up text-success"></i></sup> $1200</h2>
                                </div>
                                <span class="text-success">20%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Web Development Course</h5>
                                <div class="text-end"> <span class="text-muted">Monthly Fees</span>
                                    <h2><sup><i class="ti-arrow-down text-primary"></i></sup> $5000</h2>
                                </div>
                                <span class="text-primary">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Web Designing Course</h5>
                                <div class="text-end"> <span class="text-muted">Monthly Fees</span>
                                    <h2><sup><i class="ti-arrow-up text-info"></i></sup> $8000</h2>
                                </div>
                                <span class="text-info">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">App Development Course</h5>
                                <div class="text-end"> <span class="text-muted">Yearly Fees</span>
                                    <h2><sup><i class="ti-arrow-up text-inverse"></i></sup> $12000</h2>
                                </div>
                                <span class="text-inverse">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Web Designing</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success text-white btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ios Development</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success text-white btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Android Development</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success text-white btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Web Development</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success text-white btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                @include('layouts.right-modal')
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layouts.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   @include('layouts.javascript')
</body>
</html>

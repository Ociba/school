<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- Custom CSS -->
   <link href="{{ asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('admin/dist/css/pages/error-pages.css')}}" rel="stylesheet">
</head>

<body class="skin-blue fixed-layout" style="background-color:#ff3300;">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>404</h1>
                <h3 class="text-uppercase">Page Not Found !</h3>
                <p class="text-mute m-t-30 m-b-30 text-white" style="color:#ffffff; font-weight:bolder;">YOU SEEM TO BE TRYING TO FIND THIS PAGE</p>
                <a href="/" class="btn btn-warning btn-rounded waves-effect waves-light m-b-40 text-white">Back to home</a> </div>
            
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    @include('layouts.javascript')
</body>
</html>
<script src="{{ asset('admin/dist/js/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/dist/js/waves.html')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admin/dist/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('admin/dist/js/raphael-min.js')}}"></script>
{{--<script src="{{ asset('admin/dist/js/morris.min.js')}}"></script>--}}
<script src="{{ asset('admin/dist/js/jquery.sparkline.min.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{ asset('admin/dist/js/jquery.toast.js')}}"></script>
<script src="{{asset('alpine/min.js')}}"></script>
<script defer src="{{asset('alpine/min2.js')}}"></script>
<link href="{{asset('alpine/tailwind.css')}}" rel="stylesheet">
@livewireScripts
@livewire('livewire-ui-modal')
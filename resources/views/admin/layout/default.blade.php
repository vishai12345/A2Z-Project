<!doctype html>
<html>
    <head>
        <title>Lawister</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ URL::asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"  />
        <link href="{{ URL::asset('public/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/js/plugins/iCheck/custom.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/js/plugins/multiselect/bootstrap-multiselect.css') }}" rel="stylesheet" type="text/css" />
        {{--<link href="{{ URL::asset('public/admin/css/animate.css') }}" rel="stylesheet" type="text/css" />--}}
        <link href="{{ URL::asset('public/admin/css/switch.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/css/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('public/admin/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/admin/css/common.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            @include('admin.layout.header')
            <div class="contents"> @yield('content') </div>
            @include('admin.layout.footer')
        </div>
        <!-- js code here -->
		<script type="text/javascript" src="{{ URL::asset('public/admin/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/admin/js/jquery-2.1.1.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        {{--<script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/peity/jquery.peity.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/inspinia.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/multiselect/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/pace/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/plugins/select2/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/parsley.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/script.js') }}"></script>
    <script type="text/javascript">
$(document).ready(function () {
<?php
$type = (Session::has('success')) ? "success" : "error";
$message = Session::get($type);
if ($type && $message) {
    ?>
        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 2000
            };
            toastr.<?php echo $type; ?>('<?php echo $message; ?>', '<?php echo ($type && $type == 'success') ? "Success" : "Error"; ?>');
        }, 200);
    <?php
}
?>
});
    </script>
</body>
</html>
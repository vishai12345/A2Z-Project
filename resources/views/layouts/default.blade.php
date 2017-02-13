<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>A2Z Tutors</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
<link href="{{ URL::asset('public/css/bootstrap.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/style.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/font-awesome.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/jquery.flexdatalist.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/toastr.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ URL::asset('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/scripts.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/jquery.flexdatalist.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/toastr.min.js') }}?version=1-1"></script>

<script type="text/javascript" src="{{ URL::asset('public/profile/js/jquery.validate.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/profile/js/profileAcc.js') }}?version=1-1"></script>
</head>
<body>
@include('auth.login')

@include('auth.register')

@include('auth.register-student')

@yield('content')

@include('layouts.footer')

</body>
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
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>HR Managment System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="<?php echo e(asset('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"
          type="text/css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('fontsawesome/css/fontawesome-all.css')); ?>">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DateTimePicker-->
    <link rel="stylesheet" href="<?php echo e(asset('pickadate/lib/themes/default.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('pickadate/lib/themes/default.date.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('datepicker/jquery.datetimepicker.css')); ?>">

    <!-- Theme style -->
    <link href="<?php echo e(asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css')); ?>" rel="stylesheet" type="text/css"/>

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
    -->
    <link href="<?php echo e(asset('/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/app-template.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/app_custom.css')); ?>" rel="stylesheet"/>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    
</head>
<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?><!-- where contents will be placed -->


</div><!--end of wrapper class -->


<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</body>

<script>
    $(document).foundation();
</script>
<!-- jQuery 2.1.3 -->
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js")); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo e(asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js")); ?>"
type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js")); ?>"
type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js")); ?>"
type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/fastclick/fastclick.js")); ?>" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.js")); ?>"
type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js")); ?>"
type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js")); ?>"
type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="<?php echo e(asset ("/bower_components/AdminLTE/dist/js/app.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/AdminLTE/dist/js/demo.js")); ?>" type="text/javascript"></script>






<script src="<?php echo e(asset('datepicker/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('datepicker/jquery.datetimepicker.full.js')); ?>"></script>


<script>
    $('#datepicker').datetimepicker(
        {
            format: 'd-m-Y',
            timepicker: false,
            minTime: false
        }
    );
    //    $('.datepicker').pickadate(
    //        {
    //
    //            format: 'dd-mm-yyyy',
    //            formatSubmit: 'dd-mm-yyyy'
    //        }
    //    );
</script>
<script src="<?php echo e(asset('js/site.js')); ?>"></script>
</html>
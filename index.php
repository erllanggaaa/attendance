<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<title>ATTENDANCE APP</title>
<meta name="description" content="Skripsi">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="demo/monarch/assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/icons/glyphicons/glyphicons.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="demo/monarch/assets/helpers/admin-responsive.css">

<!-- JavaScript Tambahan Close Button -->

 <script src="demo/monarch/assets/js/3.2.1.jquery.min.js"></script>
 <script src="demo/monarch/assets/js/popper.min.js"></script>
 <script src="demo/monarch/assets/js/bt.min.js"></script>

    <!-- JS Core -->

    <script type="text/javascript" src="demo/monarch/assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="demo/monarch/assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="demo/monarch/assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="demo/monarch/assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="demo/monarch/assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="demo/monarch/assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="demo/monarch/assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="demo/monarch/assets/js-core/jquery-cookie.js"></script>

    <!--Kode untuk mencegah shorcut keyboard, view source dll.-->
    <script type="text/javascript">
        window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
    </script>
    <script type="text/javascript">
        document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
    </script>



    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>
<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
        background: #fff;
        overflow: hidden;
    }

</style>

<script type="text/javascript" src="demo/monarch/assets/widgets/wow/wow.js"></script>
<script type="text/javascript">
    /* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<img src="demo/monarch/assets/image-resources/blurred-bg/blurred-bg-13.jpg" class="login-img wow fadeIn" alt="">
<div class="center-vertical">
    <div class="center-content row">

    <div class="col-md-3 center-margin">
    <h3 class="text-center pad25B font-white text-transform-upr font-size-23">PILIH LOGIN</h3>
                    <a href="./pegawai">
                    <div class="content-box wow bounceInDown modal-content">
                    <h3 class="content-box-header content-box-header-alt bg-default">
                        <span class="icon-separator">
                            <i class="glyph-icon icon-users"></i>
                        </span>
                        <span class="header-wrapper">
                            LOGIN PEGAWAI
                            <small>Attendance App</small>
                        </span>
                    </h3>
                    </div>
                    </a>
                    
                    <a href="./admin">
                    <div class="content-box wow bounceInDown modal-content">
                    <h3 class="content-box-header content-box-header-alt bg-default">
                        <span class="icon-separator">
                            <i class="glyph-icon icon-users"></i>
                        </span>
                        <span class="header-wrapper">
                            LOGIN ADMIN
                            <small>Attendance App</small>
                        </span>
                    </h3>
                    </div>
                    </a>
        </div>

        
        
        
    </div>
</div>



    <!-- WIDGETS -->

<script type="text/javascript" src="demo/monarch/assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="demo/monarch/assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="demo/monarch/assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="demo/monarch/assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="demo/monarch/assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="demo/monarch/assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="demo/monarch/assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="demo/monarch/assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="demo/monarch/assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="demo/monarch/assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="demo/monarch/assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="demo/monarch/assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="demo/monarch/assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="demo/monarch/assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="demo/monarch/assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="demo/monarch/assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="demo/monarch/assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="demo/monarch/assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="demo/monarch/assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="demo/monarch/assets/widgets/theme-switcher/themeswitcher.js"></script>

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
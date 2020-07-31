<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:11:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/shop/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/shop/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/shop/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="/shop/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="/shop/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/shop/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/shop/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/shop/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/shop/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/shop/css/responsive.css" />

    <title>Kute shop</title>
    <link rel="stylesheet" type="text/css" href="/shop/css/my_style.css" />
</head>
<body class="
    @if (!empty($is_detail))
        {{ 'product-page right-sidebar' }}
    @elseif (!empty($is_home))
        {{ 'home' }}
    @else
        {{ 'home' }}
    @endif
">
<!-- HEADER -->
@include('shop.layouts.header')

@if (!isset($is_detail))
    @include('shop.layouts.slides')
@endif

@yield('content')

<!-- Footer -->
@include('shop.layouts.footer')

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="/shop/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/shop/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/shop/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="/shop/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/shop/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/shop/lib/jquery.countdown/jquery.countdown.min.js"></script>
@if (!empty($is_detail))
    <script type="text/javascript" src="/shop/lib/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="/shop/lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/shop/lib/fancyBox/jquery.fancybox.js"></script>
@endif
<script type="text/javascript" src="/shop/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="/shop/js/theme-script.js"></script>
<script type="text/javascript" src="/shop/js/my-script.js"></script>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:15:06 GMT -->
</html>

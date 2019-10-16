<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
    <head>
        <title>UFPS - Cúcuta</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="Shortcut icon">

        <!-- Web Fonts -->
        <script type="text/javascript" src="js/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


<script type="text/javascript" src="js/bootstrap.min.js"></script>

        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">

        <link type="text/css" rel="stylesheet" href="css/ie8.min.css">

        <link type="text/css" rel="stylesheet" href="css/blocks.min.css">

        <link type="text/css" rel="stylesheet" href="css/plugins.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.min.css">

        <link type="text/css" rel="stylesheet" href="css/app.min.css">
        <link type="text/css" rel="stylesheet" href="css/shop.plugins.min.css">

        <link type="text/css" rel="stylesheet" href="css/shop.blocks.min.css">

        <link type="text/css" rel="stylesheet" href="css/style-switcher.min.css">

        <link type="text/css" rel="stylesheet" href="css/shop.style.min.css">

        <link type="text/css" rel="stylesheet" href="css/header-v6.min.css">

        <link type="text/css" rel="stylesheet" href="css/header-v8.min.css">

        <link type="text/css" rel="stylesheet" href="css/header.min.css">

        <link type="text/css" rel="stylesheet" href="css/footer-v1.min.css">

        <link type="text/css" rel="stylesheet" href="css/animate.min.css">

        <link type="text/css" rel="stylesheet" href="css/line-icons.min.css">

        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">

        <link type="text/css" rel="stylesheet" href="css/horizontal-parallax.min.css">

        <link type="text/css" rel="stylesheet" href="css/layerslider.min.css">

        <link type="text/css" rel="stylesheet" href="css/ured.min.css">

        <link type="text/css" rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

        <link type="text/css" rel="stylesheet" href="css/sky-forms.min.css">

        <link type="text/css" rel="stylesheet" href="css/custom-sky-forms.min.css">

        <link type="text/css" rel="stylesheet" href="css/profile.min.css">

        <link type="text/css" rel="stylesheet" href="css/brand-buttons.min.css">
        <link type="text/css" rel="stylesheet" href="css/brand-buttons-inversed.min.css">

        <link type="text/css" rel="stylesheet" href="css/hover.min.css">
        <link type="text/css" rel="stylesheet" href="css/custom-hover-effects.min.css">
        <link type="text/css" rel="stylesheet" href="css/custom.min.css">
        <link type="text/css" rel="stylesheet" href="css/pgwslider.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

 </head>

   <body class="header-fixed boxed-layout" style="position: relative; min-height: 100%; top: 0px;">
        <div class="wrapper">
            <!--=== Header v6 ===-->


    <!-- Navbar -->
    <!-- Collect the nav links, forms, and oth
    <!-- End Navbar -->
    @include('pagina.contenido.menu')
</div>

     @include('pagina.contenido.slider')

@include('pagina.contenido.horizontal')

<!-- EVENTOS ---------------------->
@include('pagina.contenido.eventos')
<!-- FIN EVENTOS --->

<!-- NOVEDADES -->
@include('pagina.contenido.novedades')
<!-- FIN DESTACADOS -->

<!-- ICONOS REDES SOCIALES -->
<div class="cuadroredes">
    <ul class="social-icons social-icons-color margin-top-10">
        <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Facebook"><a href="https://www.facebook.com/UFPS-C%C3%BAcuta-553833261409690" class="rounded social_facebook"></a>
        </li>
        <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Twitter"><a href="https://twitter.com/UFPSCUCUTA" class="rounded social_twitter"></a></li>
        <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Youtube"><a href="https://www.youtube.com/channel/UCgPz-qqaAk4lbHfr0XH3k2g" class="rounded social_youtube"></a></li>
        <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Instagram">
            <a href="https://www.instagram.com/ufpscucuta/" class="rounded social_instagram"></a></li>
        <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Escuchanos en Vivo"><a href="#" class="rounded social_emisora"></a></li>
    </ul>
</div>
<!-- FIN ICONOS REDES SOCIALES -->

<!-- End Content Part -->
                    </div><!--/wrapper-->
        <!--=== Footer Version 1 ===-->
        <!-- organismos de control -->


@include('pagina.contenido.footer')




        <!--=== End Footer Version 1 ===-->
        <script src="vue-ckeditor5/dist/vue-ckeditor5.js"></script>

		<script type="text/javascript" src="js/pgwslider.min.js"></script>

		<script type="text/javascript" src="js/back-to-top.min.js"></script>

		<script type="text/javascript" src="js/smoothScroll.min.js"></script>

		<script type="text/javascript" src="js/owl.carousel.min.js"></script>

		<script type="text/javascript" src="js/sequence.jquery-min.js"></script>

		<script type="text/javascript" src="js/greensock.js"></script>

        <script type="text/javascript" src="js/layerslider.transitions.js"></script>

        <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>

		<script type="text/javascript" src="js/custom.min.js"></script>

		<script type="text/javascript" src="js/app.min.js"></script>

		<script type="text/javascript" src="js/owl-carousel.min.js"></script>

		<script type="text/javascript" src="js/datepicker.min.js"></script>

		<script type="text/javascript" src="js/validation.min.js"></script>

		<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>

		<script type="text/javascript" src="js/owl-recent-works.min.js"></script>

		<script type="text/javascript" src="js/wow.min.js"></script>

    </body>
</html>

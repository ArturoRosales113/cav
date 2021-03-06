<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('fav.png')}}">
    <title> {{ env('APP_NAME') }} | @yield('page_title') </title>

    <link href="https://mattstow.com/js/ios-orientationchange-fix.min.js"></script>

    <!-- Estilos -->
    @include('frontend.layouts.styles')

    <!-- Estilos personalizados de cada página -->
    @yield('page_styles')

    <!-- Meta -->
    @yield('page_head')
</head>

<body>
    <!--main-panel-->
    <div class="container-fluid d-block" id="main-container">


        <div class="content" id="content">
            @include('frontend.layouts.navbars.navbar' , ['families' => $families])

            @yield('page_banner')

            @yield('content')

            @include('frontend.layouts.footer.footer', ['families' => $families])

            @include('frontend.layouts.slices.message')
        </div>
        <!-- Sidebar -->
        @include('frontend.layouts.slices.sidebarGral')
        @include('frontend.layouts.slices.sidebarProductos')

        <div class="overlay"></div>

    </div>

    @include('frontend.layouts.slices.formsGet')


    <!-- Scripts Generales -->
    @include('frontend.layouts.scripts')

    <!-- Scripts personalizado de la página -->
    @yield('page_scripts')

    @include('sweet::alert')

</body>

</html>
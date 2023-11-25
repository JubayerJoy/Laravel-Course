<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jubayer</title>
    <!-- ===== CSS Files ===== -->
    <link rel="stylesheet" href="{{asset('assets/CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/CSS/skins/color-1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- ===== Style Switcher =====-->
    <link rel="stylesheet" href="{{asset('assets/CSS/skins/color-1.css')}}" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="{{asset('assets/CSS/skins/color-2.css')}}" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="{{asset('assets/CSS/skins/color-3.css')}}" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="{{asset('assets/CSS/skins/color-4.css')}}" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="{{asset('assets/CSS/skins/color-5.css')}}" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="{{asset('assets/CSS/style-switcher.css')}}">

</head>
<body>
{{--Main Container Start--}}
<div class="main-container">

    {{--Aside Start--}}
    @include('Components.side_nav')

    {{--Main Content Start--}}
    <div class="main-content">
        @yield('content')
    </div>

</div>

{{--Style Switcher Start--}}
<div class="style-switcher">
    <div class="style-switcher-toggler s-icon">
        <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon">
        <i class="fas "></i>
    </div>
    <h4>Theme Colors</h4>
    <div class="colors">
        <span class="color-1" onclick="setActiveStyle('color-1')"></span>
        <span class="color-2" onclick="setActiveStyle('color-2')"></span>
        <span class="color-3" onclick="setActiveStyle('color-3')"></span>
        <span class="color-4" onclick="setActiveStyle('color-4')"></span>
        <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
</div>

{{--Footer Section--}}
@include('Components.footer')

    {{--Scripts Files--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/style-switcher.js')}}"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

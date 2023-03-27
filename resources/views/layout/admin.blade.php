<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Enjoysciencecareers</title>

    <!-- Css -->
    <link href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('css/global.css') }}" rel="stylesheet" /> -->
    <link href="{{ asset('css/adminglobal.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/fonticon/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/fonticon/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/fonticon/css/solid.css') }}" rel="stylesheet" />

    <!-- Js -->
    <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

</head>

<body>

    <!-- NAV -->
    @include('navbar.navadmin')
    <!-- NAV -->

    <!-- Body -->
    @yield('body')
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-nav-admin sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
                    <a class="nav-link" aria-current="page" href="{{ url('/admin') }}">
                        <i class="fa-solid fa-house icon"></i>
                        หน้าหลัก
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('admincareerlist')) ? 'active' : '' }}">
                    <a class="nav-link" aria-current="page" href="{{ url('/admincareerlist') }}">
                        <i class="fa-solid fa-briefcase icon"></i>
                        ค้นหาอาชีพ
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-paper-plane icon"></i>
                        ค้นหาประสบการณ์
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-graduation-cap icon"></i>
                        ค้นหาทุน
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-briefcase icon"></i>
                        ค้นหางาน
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-user-tie icon"></i>
                        ค้นหาผู้เชี่ยวชาญ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-user icon"></i>
                        บทบาทผู้ใช้งาน
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-sharp fa-solid fa-award icon"></i>
                        Certificate
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Body -->

    <!-- Footer -->
    <!-- @include('footer.footer') -->
    <!-- Footer -->

    <a id="btnGoTop" class="btnGoTop" onclick="topFunction();">
        <img src="{{ asset('image/icon/top-arrow-w.png') }}" />
    </a>


    <!-- Other Js -->
    <script>
    $(function() {
        $('a').each(function() {
            if ($(this).attr('target') == '_blank') {
                $(this).attr('rel', 'noopener noreferrer');
            }
        })
    });

    //Dropdown Add Clacss
    $(".dropdown").click(function() {
        var active = $(this).hasClass("hover-active");
        $(".dropdown").removeClass("hover-active");
        if (!active) {
            $(this).addClass("hover-active");
        }
    });

    //Menu Search
    //$('.navbar').on('click', '.search-toggle', function (e) {
    //    var selector = $(this).data('selector');

    //    $(selector).toggleClass('show').find('.search-input').focus();
    //    $(this).toggleClass('active');

    //    e.preventDefault();
    //});

    if ('@ViewData["Nav"]' != '') {
        $('.@ViewData["Nav"]').addClass('active');
    }

    $("img").on("error", function() {
        $(this).attr('src', '/image/mockup/800x550.png');
    });

    //$('#formsearch').on('keyup keypress', function (e) {
    //    var keyCode = e.keyCode || e.which;
    //    if (keyCode === 13) {
    //        e.preventDefault();
    //        location.replace("@Url.Action("Search", "Home")?keyword=" + $('#keyword').val());
    //    }
    //});

    //Scroll Top
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("btnGoTop").style.display = "block";
        } else {
            document.getElementById("btnGoTop").style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
</body>

</html>
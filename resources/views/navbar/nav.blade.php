<header>
    <nav class="navbar navbar-expand-xl navbar-toggleable-xl navbar-light fixed-top bg-white border-bottom box-shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="logo"
                    src="{{ asset('image/banner-logo.png') }}" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!----- Menu ----->
            <div class="navbar-collapse collapse d-xl-inline-flex justify-content-between">
                <ul class="navbar-nav flex-grow-1">
                    <!----- Menu-1----->
                    <li class="nav-item {{ request()->is('careerlist', 'careerdetail') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/careerlist') }}">ค้นหาอาชีพ</a>
                    </li>

                    <!----- Menu-2 ----->
                    <li class="nav-item dropdown {{ request()->is('skill','training') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ค้นหาประสบการณ์</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->is('skill') ? 'active' : '' }}"
                                    href="{{ url('/skill') }}">Skill</a></li>
                            <li><a class="dropdown-item {{ request()->is('training') ? 'active' : '' }}"
                                    href="{{ url('/training') }}">Training</a></li>
                        </ul>
                    </li>
                    <!----- Menu-3 ----->
                    <li class="nav-item dropdown {{ request()->is('acdemy','university') ? 'active' : '' }}">
                        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">ค้นหาทุน</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->is('acdemy') ? 'active' : '' }}"
                                    href="{{ url('/acdemy') }}">Career Academy</a></li>
                            <li><a class="dropdown-item {{ request()->is('university') ? 'active' : '' }}"
                                    href="{{ url('/university') }}">มหาวิทยาลัย</a></li>
                        </ul>
                    </li>
                    <!----- Menu-4----->
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">ค้นหางาน</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">หน่วยงานรัฐบาล</a></li>
                            <li><a class="dropdown-item" href="#">หน่วยงานเอกชน</a></li>
                        </ul>
                    </li>
                    <!----- Menu-5----->
                    <li
                        class="nav-item dropdown {{ request()->is('webboard','webboard/topic','idol') ? 'active' : '' }}">
                        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">ค้นหาผู้เชี่ยวชาญ</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->is('webboard','webboard/topic') ? 'active' : '' }}"
                                    href="{{ url('/webboard') }}">ห้องแชท</a></li>
                            <li><a class="dropdown-item {{ request()->is('idol') ? 'active' : '' }}"
                                    href="{{ url('/idol') }}">Idol Lives</a></li>
                        </ul>
                    </li>
                    <!----- Menu-6 ----->
                    <li class="nav-item">
                        <a class="nav-link nav-bt" href="{{ url('/quiz') }}">ค้นหาตัวเอง</a>
                    </li>
                </ul>
            </div>

            <!----- Menu right ----->
            <div class="d-flex menu-right">
                <ul class="ul-nonestyle">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">TH</a> -->
                        <a class="nav-link language" href="#">EN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-login" href="{{ url('/login') }}">เข้าสู่ระบบ</a>
                    </li>

                    <!-- Show After Login -->
                    <li class="dropdown" style="display:none;">
                        <a class="nav-link btn-login profile dropdown-toggle"
                            data-bs-toggle="dropdown"><span>Username</span> <img
                                src="{{ asset('image/mockup/profile.png') }}" /></a>
                        <ul class="dropdown-menu dropdown-menu-login">
                            <li style="display:none;">
                                <a class="dropdown-item-profile">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="{{ asset('image/mockup/profile.png') }}" alt=""
                                                    class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">Level.1</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div><a class="dropdown-item-profile" href="{{ url('/profile') }}"><i
                                            class="fa-solid fa-user me-2"></i>Profile</a></div>
                            </li>
                            <li>
                                <div><a class="dropdown-item-profile" href="{{ url('/profile') }}"><i
                                            class="fa-solid fa-pen me-2"></i>หน้าบอร์ดของฉัน</a></div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item-profile" href="{{ url('/logout') }}"><i
                                        class="fa-solid fa-clock-rotate-left me-2"></i>ประวัติการโพสต์</a></li>
                            <li><a class="dropdown-item-profile" href="{{ url('/logout') }}"><i
                                        class="fa-solid fa-right-from-bracket me-2"></i>ออกจากระบบ</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

@extends('layout.main')
@section('body')
<link href="{{ asset('lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/home.css') }}" rel="stylesheet" />

<!-----Start Slide---->
<div class="head-banner">
    <div class="owl-carousel owl-theme head-banner-slide">

        <div class="item">
            <a href="#"><img src="{{ asset('image/banner/banner-head.png') }}" class="img-100 lazyload" /></a>
        </div>
        <div class="item">
            <a href="#"><img src="{{ asset('image/mockup/1920x820.png') }}" class="img-100 lazyload" /></a>
        </div>
        <div class="item">
            <a href="#"><img src="{{ asset('image/banner/banner-head.png') }}" class="img-100 lazyload" /></a>
        </div>

    </div>
</div>
<!----- End Slide---->


<!----- Section-quiz ----->
<section class="section-quiz" style="background-image:url('../image/background/bg-contact-sec1.png');">
    <div class="container-fuild">
        <div class="row">
            <div class="col-xl-12 text-center border-quiz">
                <h2 class="">ถ้าคุณพร้อมแล้ว เริ่มต้นค้นหาอาชีพไปกับเรา</h2>
                <p>ให้เราเป็นส่วนหนึ่งในการค้นหาอาชีพฝันของคุณ</p>
                <a href="{{ url('/quiz') }}" class="btn btn-theme">ทำแบบทดสอบได้เลย</a>
            </div>
        </div>
    </div>
</section>


<!----- Section-2 career ----->
<section class="section-career">
    <div class="container-fuild frame-padding">
        <!----- row text head career ----->
        <div class="row">
            <div class="col-xl-12 text-center  line-head">
                <h3 class="text-head-career">อาชีพ</h3>
                <a href="{{ url('/careerlist') }}" class="float-end btn-text">ดูอาชีพทั้งหมด <img class="img-icon" alt="..." src="{{ asset('image/icon/right-arrow-g.png') }}" /> </a>
            </div>
        </div>
        <!----- row card career ----->
        <div class="row mt-3">

            @foreach($data['category_careers'] as $value)
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 mb-3">
                <a href="{{ url('/careerlist/')}}">
                    <div class="card text-center ">
                        <img class="img-fluid" alt="..." src="{{ url($value->category_career_picture) }}" />
                        <div class="card-body">
                            <h4>
                                {{$value->category_career_name}}
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach



        </div>
    </div>
</section>

<!----- section-experience ----->
<section img class="section-experience">
    <div class="container-fuild frame-padding">
        <!----- row text head search experience ----->
        <div style="position: relative;">
            <img class="img-head" src="{{ asset('image/mockup/head.png') }}" />
            <h2 class="text-head">ค้นหาประสบการณ์</h2>
        </div>

        <!----- row card career search experience ----->
        <div class="row mt-5">
            <div class="text-center ">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <a href="#">
                            <div class="card-career">
                                <img class="img-fluid" src="{{ asset('image/mockup/skills.png') }}" />
                                <h4>Skills</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="#">
                            <div class="card-career">
                                <img class="img-fluid" src="{{ asset('image/mockup/training.png') }}" />
                                <h4>Training</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!----- Section-scholarship ----->
<section class="section-scholarship">
    <div class="container-fuild">
        <!----- row text head scholarship ----->
        <div class="row">
            <div class="col-xl-12 frame-padding">
                <div class="row align-items-center">
                    <div class="col-xl-10 line-head">
                        <div class="image-container text-center">
                            <img class="iconyellow" src="{{ asset('image/icon/iconyellow.png') }}" />
                            <h3 class="text-head-scholarship">ทุนการศึกษา</h3>
                        </div>
                    </div>
                    <div class="col-xl-2 text-end">
                        <a href="#" class="btn-text">ดูทั้งหมด <img class="img-icon" alt="..." src="{{ asset('image/icon/right-arrow-g.png') }}" /> </a>
                    </div>
                </div>
            </div>
        </div>
        <!----- row text head scholarship ----->

        <!----- row card career scholarship ----->
        <div class="row">
            <div class="content-slide col-lg-11 col-md-11 px-5 mx-auto">
                <div class="owl-carousel content-carousel owl-theme">

                    <!-----Stert item---->
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/scholarship.png') }}">
                                    <h5>ชื่อทุนการศึกษา 1</h5>
                                    <p>ชื่อสถาบันให้ทุน</h7>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/scholarship.png') }}">
                                    <h5>ชื่อทุนการศึกษา 1</h5>
                                    <p>ชื่อสถาบันให้ทุน</h7>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/scholarship.png') }}">
                                    <h5>ชื่อทุนการศึกษา 1</h5>
                                    <p>ชื่อสถาบันให้ทุน</h7>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/scholarship.png') }}">
                                    <h5>ชื่อทุนการศึกษา 1</h5>
                                    <p>ชื่อสถาบันให้ทุน</h7>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/scholarship.png') }}">
                                    <h5>ชื่อทุนการศึกษา 1</h5>
                                    <p>ชื่อสถาบันให้ทุน</h7>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-----End item---->

                </div>
            </div>
        </div>

    </div>
</section>

<!----- section-job ----->
<section class="section-job">
    <div class="container-fuild">
        <!----- row text search career  ----->
        <div class="row">
            <div class="col-xl-12 frame-padding">
                <div class="row align-items-center">
                    <div class="col-xl-10 line-head">
                        <div class="image-container text-center">
                            <img class="iconyellow" src="{{ asset('image/icon/iconyellow.png') }}" />
                            <h3 class="text-head-scholarship">ค้นหางาน</h3>
                        </div>
                    </div>
                    <div class="col-xl-2 text-end">
                        <a href="#" class="btn-text">ดูทั้งหมด <img class="img-icon" alt="..." src="{{ asset('image/icon/right-arrow-g.png') }}" /> </a>
                    </div>
                </div>
            </div>
        </div>

        <!----- row card search career ----->
        <div class="row">
            <div class="content-slide col-lg-11 col-md-11 px-5 mx-auto">
                <div class="owl-carousel content-carousel owl-theme">

                    <!-----Stert item---->
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/jobsearch.png') }}">
                                    <h5>ชื่อตำแหน่งงาน 3</h5>
                                    <p>ชื่อบริษัท</p>

                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/jobsearch.png') }}">
                                    <h5>ชื่อตำแหน่งงาน 3</h5>
                                    <p>ชื่อบริษัท</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/jobsearch.png') }}">
                                    <h5>ชื่อตำแหน่งงาน 3</h5>
                                    <p>ชื่อบริษัท</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/jobsearch.png') }}">
                                    <h5>ชื่อตำแหน่งงาน 3</h5>
                                    <p>ชื่อบริษัท</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/jobsearch.png') }}">
                                    <h5>ชื่อตำแหน่งงาน 3</h5>
                                    <p>ชื่อบริษัท</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-----End item---->
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xl-12 text-center ">
                <img class="img-ft" src="{{ asset('image/mockup/imglow.png') }}" />
            </div>
        </div>

    </div>
    </div>
</section>



<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    //---- HeadBanner Slide
    $(function() {
        $('.head-banner-slide').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            margin: 0,
            nav: true,
            slideSpeed: 5000,
            autoplayTimeout: 8000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: ["<img style='height:19px;' src='../image/icon/left-arrow-w.png' />", "<img style='height:19px;' src='../image/icon/right-arrow-w.png' />"]
        });
    })

    //---- Content-carousel
    $(document).ready(function() {
        var owl = $('.content-carousel');
        owl.owlCarousel({
            //margin: 10,
            loop: true,
            autoplay: true,
            nav: true,
            smartSpeed: 3000,
            autoplayTimeout: 8000,
            navText: ["<img style='height:22px;' src='../image/icon/left-or.png' />", "<img style='height:22px;' src='../image/icon/right-or.png' />"],
            responsive: {
                0: {
                    items: 1,
                },
                700: {
                    items: 2,
                },
                900: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        })
        //owl.on('mousewheel', '.owl-stage', function (e) {
        //    if (e.deltaY>0) {
        //        owl.trigger('next.owl');
        //    } else {
        //        owl.trigger('prev.owl');
        //    }
        //    e.preventDefault();
        //});
    })

    
</script>
@endsection
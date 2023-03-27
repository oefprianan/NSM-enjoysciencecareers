@extends('layout.main')
@section('body')
<link href="{{ asset('lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/careerdetails.css') }}" />

@foreach($data['careers_detail_main'] as $value)
<!----- Section banner----->
<section class="section-banner" style="background-image:url('../{{$value->career_detail_cover}}')">
    <div class="row">
        <div class="col-xl-12">
            <h1>{{$value->career_name_th}}</h1>
        </div>
    </div>
</section>

<!----- Section Visual Note----->
<section class="section-visualnote">
    <div class="container-md">
        <div class="row">
            <div class="col-lg-10 col-md-11 col-sm-10 m-auto">
                <div class="img-frame">
                    <img src="{{ asset($value->career_detail_visual_note) }}" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>


<!----- Section Description----->
<section class="section-description">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2> {{$value->career_detail_salary}} </h2>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h3>ลักษณะงาน</h3>
                <p class="mt-3">{{$value->career_detail_job_description}}
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset($value->career_detail_character) }}" class="character" />
            </div>
        </div>

    </div>
</section>



<div class="body-bg">
    <!----- Section Role----->
    <section class="section-role">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-11 col-sm-12 mx-auto">
                    <div class="row">
                        <div class="col-xl-12 image-head" style="position: relative;">
                            <img class="img-head" src="{{ asset('image/mockup/head.png') }}" />
                            <h3 class="text-head">หน้าที่รับผิดชอบ</h3>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <ul>
                                @foreach($value->responsibility as $val)
                                <li>
                                    <div class="circle"></div>
                                    <p>{{$val->career_detail_responsibility}}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!----- Section Educate----->
    <section class="section-educate">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-11 col-sm-12 mx-auto">
                    <div class="row">
                        <div class="col-xl-12 image-head" style="position: relative;">
                            <img class="img-head" src="{{ asset('image/mockup/head.png') }}" />
                            <h3 class="text-head">สาขาวิชาที่เรียน</h3>
                        </div>
                    </div>


                    <!-- <div class="row mt-3">
                        <div class="col-xl-12">
                            <h5>ปริญญาตรี</h5>
                            <h5>ระดับอุดมศึกษา</h5>
                            <ul>
                                <li>
                                    <div class="circle"></div>
                                    <p><strong>คณะวิศวกรรมศาสตร์</strong><br>ภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์</p>
                                </li>
                                <li>
                                    <div class="circle"></div>
                                    <p><strong>คณะวิศวกรรมศาสตร์</strong><br>ภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์ </p>
                                </li>
                                <li>
                                    <div class="circle"></div>
                                    <p><strong>คณะวิทยาการสารสนเทศ</strong><br>ภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์ </p>
                                </li>
                                <li>
                                    <div class="circle"></div>
                                    <p><strong>คณะเทคโนโลยีสารสนเทศและการสื่อสาร</strong><br>ภาค/ สาขาวิชา
                                        วิทยาการคอมพิวเตอร์<br>ภาค/สาขาวิชา วิศวกรรมซอฟต์แวร</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <h5>ระดับอาชีวศึกษา</h5>
                            <ul>
                                <li>
                                    <div class="circle"></div>
                                    <p>สาขาเทคโนโลยีคอมพิวเตอร์</p>
                                </li>
                                <li>
                                    <div class="circle"></div>
                                    <p>สาขางานคอมพิวเตอร์ ฮาร์ดแวร์</p>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    @foreach($value->education as $val)
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            @switch($val->career_detail_education_id)
                            @case('1')<h5>ปริญญาเอก</h5>
                            <h5>ระดับอุดมศึกษา</h5>
                            @break
                            @case('2')<h5>ปริญญาโท</h5>
                            <h5>ระดับอุดมศึกษา</h5>
                            @break
                            @case('3')<h5>ปริญญาตรี</h5>
                            <h5>ระดับอุดมศึกษา</h5>
                            @break
                            @case('4')<h5>ระดับอาชีวศึกษา</h5>
                            @break
                            @endswitch

                            <ul>
                                <li>
                                    <div class="circle"></div>
                                    <p>@if(!empty($val->career_detail_education_faculty))
                                        <strong>{{$val->career_detail_education_faculty}}</strong><br>
                                        @endif
                                        {{$val->career_detail_education_major}}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!----- Section-other----->
    <section ion class="section-other">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="border-text mx-auto">
                    <h3>สามารถทำอาชีพอะไรได้อีกบ้าง</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-11 mx-auto">
                <div class="row mt-4">
                    @foreach($value->career_resemble as $val)
                    <div class="col-xl-4 col-md-6 list">
                        <div class="circle"></div>
                        {{$val->career_detail_career_resemble}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>

</div>

<!----- section careerdetails----->
<section class="section-careerdetails img-left">
    <div class="row">
        <div class="border-img">
            <img src="{{ asset('image/careerdetail/pic1-2.png') }}" />
        </div>
        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>ทำงานเกี่ยวข้องกับเครื่องมืออะไรบ้าง</h3>
                </div>
                <div class="col-xl-12 mt-2 ps-xl-4 ps-0">
                    <p><?= str_replace('|', '<br> ', $value->career_detail_tools) ?> </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-careerdetails img-right">
    <div class="row">

        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>Hard skills</h3>
                </div>
                <div class="col-xl-12 mt-2 ps-xl-4 ps-0">
                    <p>
                        <?= str_replace('|', '<br> ', $value->career_detail_hard_skills) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="border-img">
            <img src="{{ asset('image/careerdetail/pic2.png') }}" />
        </div>

    </div>
</section>

<section class="section-careerdetails img-left">
    <div class="row">
        <div class="border-img">
            <img src="{{ asset('image/careerdetail/pic3.png') }}" />
        </div>
        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>Soft skills</h3>
                </div>
                <div class="col-xl-12 mt-2 ps-xl-4 ps-0">
                    <p>
                        <?= str_replace('|', '<br> ', $value->career_detail_soft_skills) ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-careerdetails img-right">
    <div class="row">
        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>คุณลักษณะนิสัยส่วนบุคคล</h3>
                </div>
                <div class="col-xl-12 mt-2 ps-xl-4 ps-0">
                    <p><?= str_replace('|', '<br> ', $value->career_detail_characteristic) ?></p>
                </div>
            </div>
        </div>
        <div class="border-img">
            <img src="{{ asset('image/careerdetail/pic4.png') }}" />
        </div>
    </div>
</section>

<section class="section-careerdetails work-place img-left">
    <div class="row">
        <div class="border-img">
            <img class="img-size-sec4" src="{{ asset('image/careerdetail/pic5.png') }}" />
        </div>
        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>สถานที่ทำงาน</h3>
                </div>

                @foreach($value->work_place as $val)
                <div class="col-xl-6 mt-3 ps-xl-4 ps-0">
                    @switch($val->career_detail_work_place_id)
                    @case('1')<h5>หน่วยงานเอกชน</h5>
                    @break
                    @case('2')<h5>หน่วยงานรัฐบาล</h5>
                    @break
                    @endswitch
                    <p><span class="circle"></span> {{$val->career_detail_work_place}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-careerdetails img-right">
    <div class="row">
        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>สาขาอาชีพอื่น ๆ ที่ต้องทำงานร่วม</h3>
                </div>
                <div class="col-xl-12 mt-2 ps-xl-4 ps-0">
                    <p>
                    <p><?= str_replace('|', '<br> ', $value->career_detail_work_together) ?> </p>
                    </p>
                </div>
            </div>
        </div>
        <div class="border-img">
            <img class="img-size-sec4" src="{{ asset('image/careerdetail/pic6.png') }}" />
        </div>
    </div>
</section>

<section class="section-careerdetails img-left">
    <div class="row">
        <div class="border-img">
            <img class="img-size-sec4-5" src="{{ asset('image/careerdetail/pic7.png') }}" />
        </div>
        <div class="content-farme">
            <div class="row">
                <div class="col-xl-12">
                    <h3>ความก้าวหน้าในสายงาน</h3>
                </div>
                <div class="col-xl-12 mt-2">
                    <p>{{$value->career_detail_progress}} </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!----- Section-VDO----->
<section class="section-vdo">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
                <iframe width="560" height="315" src="{{$value->career_detail_vdo}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!----- Section-Link----->
<section class="section-link" style="background-image:url('../image/background/bg-contact-sec1.png');">
    <div class="row">
        <div class="col-xl-12 text-center">
            <a class="btn btn-theme" href="#">
                ทำแบบทดสอบ <img src="{{ asset('image/icon/click.png') }}">
            </a>
        </div>
    </div>

</section>


<!----- Section Content ----->
<section class="section-content">
    <div class="container-lg">
        <div class="row">
            <div class="col-11">
                <h3>
                    อาชีพอื่นๆ
                </h3>
            </div>
        </div>
        <!----- row card career scholarship ----->
        <div class="row">
            <div class="content-slide col-lg-12 col-md-12 px-5 mx-auto">
                <div class="owl-carousel content-carousel owl-theme">

                    <!-----Stert item---->
                    <div class="item px-2 text-center">
                        <a href="{{ url('/careerdetail') }}">
                            <div class="card">
                                <img src="{{ asset('image/cartoon/card-img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-text">นักพัฒนาซอฟต์แวร์<br>(Software Developer)</h5>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="item px-2 text-center">
                        <a href="{{ url('/careerdetail') }}">
                            <div class="card">
                                <img src="{{ asset('image/cartoon/card-img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-text">นักพัฒนาซอฟต์แวร์<br>(Software Developer)</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item px-2 text-center">
                        <a href="{{ url('/careerdetail') }}">
                            <div class="card">
                                <img src="{{ asset('image/cartoon/card-img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-text">นักพัฒนาซอฟต์แวร์<br>(Software Developer)</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item px-2 text-center">
                        <a href="{{ url('/careerdetail') }}">
                            <div class="card">
                                <img src="{{ asset('image/cartoon/card-img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-text">นักพัฒนาซอฟต์แวร์<br>(Software Developer)</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item px-2 text-center">
                        <a href="{{ url('/careerdetail') }}">
                            <div class="card">
                                <img src="{{ asset('image/cartoon/card-img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-text">นักพัฒนาซอฟต์แวร์<br>(Software Developer)</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-----End item---->

                </div>
            </div>
        </div>

    </div>
</section>

@endforeach


<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
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
            navText: ["<img style='height:22px;' src='../image/icon/left-or.png' />",
                "<img style='height:22px;' src='../image/icon/right-or.png' />"
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                750: {
                    items: 3,
                },
                1220: {
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
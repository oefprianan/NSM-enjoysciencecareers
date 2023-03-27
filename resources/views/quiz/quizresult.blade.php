@extends('layout.main')
@section('body')

<link href="{{ asset('lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/quizresult.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/fonticon/css/fontawesome.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/fonticon/css/brands.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/fonticon/css/solid.css') }}" rel="stylesheet" />

<!----- Section-1 head ----->
<section class="section-banner" style="background-image: url('../image/background/bg-contact-sec1.png');">
    <div class="container-fuild">
        <div class="row mt-1">
            <div class="col-xl-12 text-center">
                <h2>ผลการทดสอบ<img src="{{ asset('image/quiz/quizresultlogo.png') }}" /></h2>
            </div>
        </div>

    </div>
</section>


<!----- Section-chart ----->
<section class="section-result-test">
    <div class="container-fuild frame-padding">
        <div class="row cardresult-border">
            <div class="col-xl-6 col-lg-12 col-md-12 my-auto mx-auto">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 mx-auto">
                <div class="cardresult">
                    <ul class="">
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/natural.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10 ">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>ธรรมชาติ<br>(Naturalistic)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['1']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/language.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>ภาษา<br>(Verbal-linguistic)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['8']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/logic.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>ตรรกะและคณิตศาสตร์<br>(Logical-mathematical)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['7']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/visual.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>มิติสัมพันธ์<br>(Visual-spatial)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['6']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/movement.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>ร่างกายและการเคลื่อนไหว<br>(Body-kinesthetic)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['5']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/music.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>ดนตรี<br>(Musical-rhythmic-andharmonic)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['4']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/emotion.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>ความเข้าใจตนเอง<br>(Intrapersonal)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['2']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-4 pb-1">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('image/quiz/interpersonal.png') }}" />
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <div class="row justify-content-between ">
                                        <div class="col-lg-9 col-md-9 text-result">
                                            <h5>มนุษย์สัมพันธ์<br>(Interpersonal)</h5>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="fw-semibold">{{$data['result_scores']['3']['total']}} คะแนน</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<!----- Section-career ----->
<section img class="section-experience">
    <div class="container-fuild frame-padding">
        <!----- row text head search experience ----->
        <div style="position: relative;">
            <img class="img-head" src="{{ asset('image/mockup/head.png') }}" />
            <h2 class="text-head">อาชีพที่เหมาะสม</h2>
        </div>

        <!----- row card career search experience ----->
        <div class="row">
            <div class="col-xl-12 text-center mt-4 mb-4 line-head">
                <a href="{{ url('/careerlist') }}" class="float-end btn-text">ดูอาชีพทั้งหมด<img class="img-icon" alt="..." src="{{ asset('image/icon/right-arrow-g.png') }}" /> </a>
            </div>
        </div>
        <!----- row card career scholarship ----->
        <div class="row">
            <div class="content-slide col-lg-11 col-md-11 px-5 mx-auto">
                <div class="owl-carousel content-carousel owl-theme">

                    <!-----Stert item---->
                    @foreach($data['result_careers'] as $value)
                    <a href="#">
                        <div class="item px-2">
                            <div class="col-lg-12 col-md-12 item-card-scholarship">
                                <div class="card-career">
                                    <img class="img-fluid" src="{{ asset('image/mockup/image2.png') }}">
                                    <div class="row">
                                        <div class="col-xl-12 mt-2">
                                            <h5>{{$value->career_name_th}}</h5>
                                        </div>
                                        <div class="col-xl-12">
                                            <p class="btn btn-outline-secondary">{{$value->category_career_name}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                  
                    <!-----End item---->

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12 text-center">
            <a class="btn btn-quiz" href="{{ url('/quizpage') }}">
                ดาวน์โหลดผลการทดสอบ
                <i class="fa-solid fa-download"></i>
            </a>
        </div>
    </div>
</section>

<!----- Section-send-result----->
<section class="section-send-result" style="background-image: url('../image/background/bg-contact-sec1.png');">
    <div class="container-fuild">
        <div class="row mt-1">
            <div class="col-xl-12 text-center">
                <h2>ส่งผลการทดสอบทางอีเมล</h2>
            </div>
        </div>
        <div class="row">
            <div class="text-center  mt-3 mx-auto box-search">
                <input class="form-control" type="text" placeholder="อีเมล" />
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mt-5 text-center">
                <a class="btn btn-quiz" href="{{ url('/quizpage') }}">
                    ส่งอีเมล
                    <i class="fa-solid fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </div>
</section>








<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/chart/chart.js')}}"></script>
<script>
    const ctx = document.getElementById('myChart');

    const data = {
        labels: [
            'ธรรมชาติ',
            'ภาษา',
            'ตรรกะและคณิตศาสตร์',
            'มิติสัมพันธ์',
            'ร่างกายและการเคลื่อนไหว',
            'ดนตรี',
            'ความเข้าใจตนเอง',
            'มนุษย์สัมพันธ์'
        ],
        datasets: [{
            label: 'ผลการทดสอบ',
            data: ["{{$data['result_scores']['1']['total']}}",
                "{{$data['result_scores']['8']['total']}}",
                "{{$data['result_scores']['7']['total']}}",
                "{{$data['result_scores']['6']['total']}}",
                "{{$data['result_scores']['5']['total']}}",
                "{{$data['result_scores']['4']['total']}}",
                "{{$data['result_scores']['2']['total']}}",
                "{{$data['result_scores']['3']['total']}}"
            ],
            fill: true,
            backgroundColor: 'rgba(13, 110, 253, 0.4)',
            borderColor: 'rgb(13, 110, 253)',
            pointBackgroundColor: 'rgb(235, 135, 77)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)'
        }]
    };

    //Chart.defaults.font.size = 16;
    new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
            scales: {
                r: {
                    pointLabels: {
                        display: true,
                        //   centerPointLabels: true,
                        font: {
                            size: 15,
                            family: "'Kanit-Regular', sans-serif"
                        }
                    },
                    angleLines: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 15
                }
            },
            elements: {
                line: {
                    borderWidth: 1
                }
            }
        },
    });

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
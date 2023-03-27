@extends('layout.main')
@section('body')
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet" />

    <!----- Section-1 head ----->
    <section class="section-banner" style="background-image: url('../image/background/background-qiuz.png');">
        <div class="container-fuild">
            <div class="row mt-1">
                <div class="col-xl-12 text-center">
                    <h2>ค้นหาอาชีพ <img src="{{ asset('image/quiz/quizlogo.png') }}" /></h2>
                </div>
            </div>

        </div>
    </section>

    <!----- Section-content ----->
    <section class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/natural.png') }}" />
                        <h5>ธรรมชาติ<br>(Naturalistic)</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/language.png') }}" />
                        <h5>ภาษา<br>(Verbal-linguistic)</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/logic.png') }}" />
                        <h5>ตรรกะและคณิตศาสตร์<br>(Logical-mathematical)</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/visual.png') }}" />
                        <h5>มิติสัมพันธ์<br>(Visual-spatial)</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/movement.png') }}" />
                        <h5>ร่างกายและการเคลื่อนไหว<br>(Body-kinesthetic)</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/music.png') }}" />
                        <h5>
                            ดนตรี<br>(Musical-rhythmic-andharmonic)
                        </h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/emotion.png') }}" />
                        <h5>ความเข้าใจตนเอง<br>(Intrapersonal)</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 d-flex">
                    <div class="border text-center">
                        <img src="{{ asset('image/quiz/interpersonal.png') }}" />
                        <h5>มนุษย์สัมพันธ์<br>(Interpersonal)</h5>
                    </div>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col-xl-12 text-center">
                    <a class="btn btn-quiz" href="{{ url('/quizpage') }}">
                        ทำแบบทดสอบกันเลย !
                        <img src="{{ asset('image/icon/right-arrow-g.png') }}" />
                    </a>
                </div>
            </div>
        </div>

        </div>

    </section>
@endsection

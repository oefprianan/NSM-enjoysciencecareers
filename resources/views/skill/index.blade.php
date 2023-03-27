@extends('layout.main')
@section('body')
<link rel="stylesheet" href="{{ asset('css/experience.css') }}" />
<link href="{{ asset('lib/tab-responsive/tab-responsive.css') }}" rel="stylesheet" />

<section class="-SBG">
    <div class="container">
        <div class="row mt-4">
            <div class="col-xl-7 col-lg-7 d-flex justify-content-start">
                <h3 class="-FH">
                    Skill
                </h3>
            </div>
            <div class="col-xl-5 col-lg-5 d-flex justify-content-end">
                <div class="input-group">
                    <input type="search" class="form-control  -BDR" placeholder="ค้นหา...">
                    <div class="input-group-append"> &nbsp;
                        <button type="button" class="btn -BSearch"> <img src="{{ asset('image/icon/search-normal.svg') }}" class="img-fluid" /></button>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-2 mb-1">
            <div class="col-12 text-end p-0">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end m-0 ">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <img src="{{ asset('image/icon/arrow-left.svg') }}" class="img-fluid" />
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <img src="{{ asset('image/icon/arrow-right.svg') }}" class="img-fluid" /></a> </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6 p-0">
                <div class="-iTemONe">
                    <img class="d-block w-100 h-100" src="{{ asset('image/mockup/TestOne.png') }}">
                    <div class="-iTemCaption">
                        <div class=" -F pe-4 ps-4">
                            <h5 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h5>
                            <p class="-FSab">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                        </div>
                        <div class="d-flex justify-content-end align-items-center pe-4 ps-4">
                            <button type="button" class="btn -BTag">#วิศวะกร</button> &nbsp;
                            <smalldate class="text-muted ps-2 pe-2"><img class="-imgICon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                            <smalldate class="text-muted"><img class="-imgICon" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 -RFS">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                        <div class="-iTemONe">
                            <img class="d-block w-100 h-100" src="{{ asset('image/mockup/TestTwo.png') }}">
                            <div class="-iTemCaptionSM">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-end align-items-center pe-4 ps-4">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button> &nbsp;
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                        <div class="-iTemONe">
                            <img class="d-block w-100 h-100" src="{{ asset('image/mockup/TestThree.png') }}">
                            <div class="-iTemCaptionSM">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-end align-items-center pe-4 ps-4">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button> &nbsp;
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                        <div class="-iTemONe">
                            <img class="d-block w-100 h-100" src="{{ asset('image/mockup/TestFour.png') }}">
                            <div class="-iTemCaptionSM">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-end align-items-center pe-4 ps-4">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button> &nbsp;
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                        <div class="-iTemONe">
                            <img class="d-block w-100 h-100" src="{{ asset('image/mockup/TestFive.png') }}">
                            <div class="-iTemCaptionSM">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-end align-items-center pe-4 ps-4">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button> &nbsp;
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3 p-1">
                <a href="{{ url('/detail') }}">
                    <div class="card -Card mb-4">
                        <img class="-imgCard d-block w-100" src="{{ asset('image/mockup/TestSix.png') }}" />
                        <div class="-CardContent">
                            <div class="-">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button>
                                </div>
                                <hr class="-Dashed">
                                <div class="d-flex justify-content-star align-items-center ps-2 ">
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3 p-1">
                <a href="{{ url('/detail') }}">
                    <div class="card -Card mb-4">
                        <img class="-imgCard d-block w-100" src="{{ asset('image/mockup/TestSix.png') }}" />
                        <div class="-CardContent">
                            <div class="-">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button>
                                </div>
                                <hr class="-Dashed">
                                <div class="d-flex justify-content-star align-items-center ps-2 ">
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3 p-1">
                <a href="{{ url('/detail') }}">
                    <div class="card -Card mb-4">
                        <img class="-imgCard d-block w-100" src="{{ asset('image/mockup/TestSix.png') }}" />
                        <div class="-CardContent">
                            <div class="-">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button>
                                </div>
                                <hr class="-Dashed">
                                <div class="d-flex justify-content-star align-items-center ps-2 ">
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3 p-1">
                <a href="{{ url('/detail') }}">
                    <div class="card -Card mb-4">
                        <img class="-imgCard d-block w-100" src="{{ asset('image/mockup/TestSix.png') }}" />
                        <div class="-CardContent">
                            <div class="-">
                                <div class=" -F pe-2 ps-2">
                                    <h6 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h6>
                                    <p class="-FSabSM m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                </div>
                                <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                    <button type="button" class="btn -BTagSM">#วิศวะกร</button>
                                </div>
                                <hr class="-Dashed">
                                <div class="d-flex justify-content-star align-items-center ps-2 ">
                                    <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                    <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('lib/tab-responsive/tab-responsive.js') }}"></script>
@endsection
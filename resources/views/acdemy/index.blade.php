@extends('layout.main')
@section('body')
<link rel="stylesheet" href="{{ asset('css/experience.css') }}" />
<link href="{{ asset('lib/tab-responsive/tab-responsive.css') }}" rel="stylesheet" />

<section class="-SBG">
    <div class="container">
        <div class="row mt-4">
            <div class="col-xl-7 col-lg-7 d-flex justify-content-start">
                <h3 class="-FH">
                    Career Academy
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

        <div class="row mt-2">
            <div class="col-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="digital-tab" data-bs-toggle="pill" data-bs-target="#digital" type="button" role="tab" aria-controls="digital" aria-selected="true">Digital IT &
                            Media</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="food-tab" data-bs-toggle="pill" data-bs-target="#food" type="button" role="tab" aria-controls="food" aria-selected="false">Food &
                            Agriculture</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="logistics-tab" data-bs-toggle="pill" data-bs-target="#logistics" type="button" role="tab" aria-controls="logistics" aria-selected="false">Logistics</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="weather-tab" data-bs-toggle="pill" data-bs-target="#weather" type="button" role="tab" aria-controls="weather" aria-selected="false">Weather &
                            Environment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="healthcare-tab" data-bs-toggle="pill" data-bs-target="#healthcare" type="button" role="tab" aria-controls="healthcare" aria-selected="false">Healthcare &
                            Medical</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="digital" role="tabpanel" aria-labelledby="digital-tab">

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
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- SUB ONE -->
                    <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
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
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- SUB ONE -->
                    <!-- SUB TWO -->
                    <div class="tab-pane fade" id="logistics" role="tabpanel" aria-labelledby="logistics-tab">
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
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- SUB TWO -->
                    <!-- SUB THREE -->
                    <div class="tab-pane fade" id="weather" role="tabpanel" aria-labelledby="weather-tab">
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
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- SUB THREE -->
                    <!-- SUB FOUR -->
                    <div class="tab-pane fade" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">
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
                            <div class="col-12 p-0">
                                <a href="{{ url('/detail') }}">
                                    <div class="card -Card mb-2">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="-imgCardA d-block w-100 h-100 p-3" src="{{ asset('image/mockup/TestSix.png') }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="-CardContentA">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class=" -F pe-2 ps-2">
                                                                <h4 class="m-0 -HCut">มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2565</h4>
                                                                <p class="-FSabA m-0">เตรียมพบกับงานมหกรรมครั้งยิ่งใหญ่อีกครั้ง!! กับ งานมหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติประจำปี 2565</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <img class="-imgCardPT d-blockp-3 me-2" src="{{ asset('image/mockup/TestSeven.png') }}" />
                                                                        <div class="-">
                                                                            <p class="-FSab m-0">ขื่อมหาวิทยาลัย</p>
                                                                            <p class="-FSab m-0">หน่วยงาน</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-star align-items-center ps-2 mt-2">
                                                                        <button type="button" class="btn -BTag">#วิศวะกร</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex justify-content-end align-items-center pe-2 ">
                                                                        <smalldate class="text-muted ps-2 pe-2"><img class="-imgIConSM" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate> &nbsp;
                                                                        <smalldate class="text-muted"><img class="-imgIConSM" src="{{ asset('image/icon/eye-g.png') }}"> 300</smalldate>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- SUB FOUR -->
                </div>
            </div>
        </div>
    </div>
</section>



<!--------------------------
    End Function Tab
-------------------------->
<script src="{{ asset('lib/tab-responsive/tab-responsive.js') }}"></script>
@endsection

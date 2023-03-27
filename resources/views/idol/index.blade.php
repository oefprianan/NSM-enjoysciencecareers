@extends('layout.main')
@section('body')
<link rel="stylesheet" href="{{ asset('css/idol.css') }}" />
<link href="{{ asset('lib/tab-responsive/tab-responsive.css') }}" rel="stylesheet" />

<!----- Section-1 head----->
<section class="section-banner" style="background-image: url('../image/background/bg-contact-sec1.png');">
    <div class="container-fuild">
        <div class="row mt-1">
            <div class="col-xl-12 text-center">
                <h2>Idol Lives</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="text-center  mx-auto box-search">
                <input class="form-control" type="text" placeholder="ค้นหาอาชีพ" />
                <button type="submit" class="btn"> <img style="height:22px;" src="{{ asset('image/icon/search-g.png') }}" /> </button>
            </div>
        </div>
    </div>
</section>



<!--------------------------
    Start Function Tab
-------------------------->
<section class="section-content">
    <div class="container-fuild">

        <div class="row">
            <div class="content-tab col-lg-11 col-md-11 mx-auto">

               <!-----Tab menu---->
               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="digital-tab" data-bs-toggle="pill" data-bs-target="#digital"
                            type="button" role="tab" aria-controls="digital" aria-selected="true">Digital IT &
                            Media</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="food-tab" data-bs-toggle="pill" data-bs-target="#food"
                            type="button" role="tab" aria-controls="food" aria-selected="false">Food &
                            Agriculture</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="logistics-tab" data-bs-toggle="pill" data-bs-target="#logistics"
                            type="button" role="tab" aria-controls="logistics" aria-selected="false">Logistics</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="weather-tab" data-bs-toggle="pill" data-bs-target="#weather"
                            type="button" role="tab" aria-controls="weather" aria-selected="false">Weather &
                            Environment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="healthcare-tab" data-bs-toggle="pill" data-bs-target="#healthcare"
                            type="button" role="tab" aria-controls="healthcare" aria-selected="false">Healthcare &
                            Medical</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="energy-tab" data-bs-toggle="pill" data-bs-target="#energy"
                            type="button" role="tab" aria-controls="energy" aria-selected="false">Energy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="materials-tab" data-bs-toggle="pill" data-bs-target="#materials"
                            type="button" role="tab" aria-controls="materials" aria-selected="false">Materials</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="other-tab" data-bs-toggle="pill" data-bs-target="#other"
                            type="button" role="tab" aria-controls="other" aria-selected="false">Other</button>
                    </li>
                    <!-----Tab show all---->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button"
                            role="tab" aria-controls="all" aria-selected="false">All</button>
                    </li>
                    <!-----Tab show all---->
                </ul>


                <div class="tab-content" id="pills-tabContent">

                    <!-----Start Tab Digital---->
                    <div class="tab-pane fade show active" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                        
                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>
                                    Digital IT & Media
                                </h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">
                            
                            <!----- item1-8 ----->                                           
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="https://via.placeholder.com/920x1200" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> 
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> 
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                   
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="https://via.placeholder.com/920x1200" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> 
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> 
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>        
                                    
                        </div>
                                                                       
                    </div>

                    <!-----Start Tab Food---->
                    <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
                        
                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>
                                    Food & Agriculture
                                </h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>
 
                    </div>

                    <!-----Start Tab logistic---->
                    <div class="tab-pane fade" id="logistics" role="tabpanel" aria-labelledby="logistics-tab">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>
                                    Logistics
                                </h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>
                   
                    </div>

                    <!-----Start Tab Weather---->
                    <div class="tab-pane fade" id="weather" role="tabpanel" aria-labelledby="weather-tab">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>
                                    Weather & Environment
                                </h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>

                    </div>

                    <!-----Start Tab Healthcare & Medical---->
                    <div class="tab-pane fade" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>
                                    Healthcare & Medical
                                </h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>

                    </div>

                    <!-----Start Tab Energy---->
                    <div class="tab-pane fade" id="energy" role="tabpanel" aria-labelledby="energy-tab">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>Energy</h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>

                    </div>

                    <!-----Start Tab Materials---->
                    <div class="tab-pane fade" id="materials" role="tabpanel" aria-labelledby="materials-tab">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>Materials</h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>

                    </div>

                    <!-----Start Tab Other---->
                    <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>Other</h3>
                            </div>
                        </div>

                        <!-----Filter---->
                        <div class="row mt-3">
                            <div class="filter">
                                <div class="form-check-content ">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักพัฒนาซอฟต์แวร์</span>
                                    </label>
                                </div>
                                <div class="form-check-content">
                                    <label>
                                        <input type="checkbox" name="" />
                                        <span>#นักการตลาดดิจิตอล</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">                                      
                            <!----- item 1-8 ----->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                     
                        </div>

                    </div>

                    <!-----Start Tab Show All ---->
                    <div class="tab-pane" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <h3>
                                    Search Text
                                </h3>
                            </div>
                        </div>

                        <!-----Pagination---->
                        <div class="row mt-3">
                            <div class="col-xl-12 text-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true"> < </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> > </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-----Item list---->
                        <div class="row mt-3">
                            <!-----Item 1-12---->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                <a href="{{ url('/detail') }}">
                                    <div class="card mb-4 box-shadow">
                                        <img class="img-fluid" src="{{ asset('image/mockup/image1.png') }}" />
                                        <div class="card-body-content">
                                            <h5 class="card-text text-start">ชื่อห้องIdol Lives</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted">Username</p>
                                                <p class="text-muted"><img class="img-icon" src="{{ asset('image/icon/eye-g.png') }}"> 300</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <smalldate class="text-muted"><img class="img-icon" src="{{ asset('image/icon/calendar-g.png') }}"> DD/MM/YYYY</smalldate>
                                                <a href="#" class="btn btn-outline-secondary">#นักพัฒนาซอฟต์แวร์</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

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

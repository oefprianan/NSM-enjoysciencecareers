@extends('layout.main')
@section('body')
<link rel="stylesheet" href="{{ asset('css/webboard.css') }}" />

<!----- Section-1 head----->
<section class="section-banner" style="background-image: url('../image/background/bg-contact-sec1.png');">
    <div class="container-fuild">
        <div class="row mt-1">
            <div class="col-xl-12 text-center">
                <h2>Webboard</h2>
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
            <div class=" col-lg-11 col-md-11 content-tab px-5 mx-auto">
                ทดสอบ
            </div> 
        </div> 

    </div>
</section>
<!--------------------------
    End Function Tab
-------------------------->
@endsection

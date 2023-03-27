@extends('layout.main')
@section('body')


<link href="{{ asset('css/contact.css') }}" rel="stylesheet" />

<!-----Section-1 information contact---->
<section class="section-1-contact">
    <div class="row">
        <div class="col-xl-12 text-start">
            <div class="contact-head">
                    <h2>ติดต่อเรา</h2>
                <p>องค์การพิพิธภัณฑ์วิทยาศาสตร์แห่งชาติกระทรวงการอุดมศึกษา วิทยาศาสตร์วิจัยและนวัตกรรม</p>
            </div>
        </div>
    </div>
    <div class="container-fuild card-contact-sec1">
        <div class="row">
            <div class="col-xl-3 text-center item-contact">
                <div class="card-contact">
                    <h4>ที่อยู่</h4>
                    <p>39 หมู่ 3 ต.คลองห้า อ.คลองหลวง จ.ปทุมธานี 12120 </p>
                </div>
            </div>
            <div class="col-xl-3 text-center item-contact">
                <div class="card-contact">
                    <h4>อีเมล</h4>
                    <p>info@nsm.or.th</p>
                </div>
            </div>
            <div class="col-xl-3 text-center item-contact">
                <div class="card-contact">
                    <h4>เบอร์โทร</h4>
                    <p>
                        02577-9999 <br />
                        แฟกซ์ 02577-9900
                    </p>
                </div>
            </div>
            <div class="col-xl-3 text-center item-contact">
                <div class="card-contact">
                    <h4>ช่องทางติดตาม</h4>
                    <div class="contact-icon">
                        <a href="https://www.facebook.com/NSMThailand/">
                            
                            <img class="img-qiuz" src="{{ asset('image/icon/contact-icon-facebook.png') }}" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-----Section-2 location contact---->
<section class="section-2-contact">
    <div class="container-fuild">
        <div class="col-xl-12 text-start">
            <h2>LOCATION</h2>
        </div>
        <div class="col-xl-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.4845137512325!2d100.71515261483387!3d14.048542390155951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d82074e472fc3%3A0x2057b9a1ce9f4bc2!2sNational%20Science%20Museum!5e0!3m2!1sen!2sth!4v1676538678968!5m2!1sen!2sth" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-----Section-3 form contact---->
<section class="section-3-contact contact-form-bg">
    <div class="full-width container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-3">
                <img src="{{ asset('image/background/bg-contact-img-sec4.png') }}"/>
            </div>
            <div class="col-xl-6 col-lg-6 form-contact">
                <h4>แบบฟอร์มส่งเรื่องติดต่อ</h4>
                <form>
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">ชื่อ</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">อีเมล</label>
                        <input type="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">เรื่องที่ต้องการติดต่อ</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">รายละเอียด</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-form">ส่งข้อความ</button>
                </form>
            </div>
        </div>
    </div>
</section>





@endsection
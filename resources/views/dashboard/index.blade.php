@extends('layout.login')
@section('body')

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/flatpickr/theme.css') }}" rel="stylesheet" />
<script src="{{ asset('lib/flatpickr/flatpickr.min.js') }}"></script>


<!-----Section start profile  ---->
<section class="section-dashboard">
    <div class="container-fuild">

        <div class="card-profile">
            <div class="row gy-5">
                <div class="col-xl-3 col-lg-3 ">
                    <div class="card-profile-left ">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a href="{{url('/profile')}}">
                                <button class="nav-link active" type="button">ข้อมูลส่วนตัว</button>
                            </a>
                            <a href="{{url('/dashboard')}}">
                                <button class="nav-link" type="button">แดชบอร์ด</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 ">
                    <div class="card-profile-right">
                        <div class="c-card">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="user-profile__image"><img
                                                    src="{{ asset('image/mockup/profile.png') }}" class="profile-image">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <h4>level.1</h4>
                                            <h5>Username</h5>
                                        </div>
                                        <!-- <div class="col-xl-6">
                                            <div class="user-profile__image"><img
                                                    src="{{ asset('image/mockup/profile.png') }}" class="profile-image">
                                                testtest
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-xl-6">testtest</div> -->
                                    </div>
                                </div>
                                <div class="col-xl-4">กระทู้</div>
                                <div class="col-xl-4">ใบประกาศนียบัตร</div>
                            </div>
                        </div>

                        <!-- <div class="row">
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
                                        02577-9999 <br>
                                        แฟกซ์ 02577-9900
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-3 text-center item-contact">
                                <div class="card-contact">
                                    <h4>ช่องทางติดตาม</h4>
                                    <div class="contact-icon">
                                        <a href="https://www.facebook.com/NSMThailand/">

                                            <img class="img-qiuz"
                                                src="http://127.0.0.1:8000/image/icon/contact-icon-facebook.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-4">ใบประกาศนียบัตร</h4>
                    <div class="c-card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="user-profile__image"><img
                                                src="{{ asset('image/mockup/profile.png') }}" class="profile-image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">username</div>
                                </div>
                            </div>
                            <div class="col-xl-6">name certificate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-----Section end profile ---->
<script>
//----Date Picker ---
$('.flatpickr').attr('maxlength', 10);
$('.flatpickr').attr('placeholder', 'DD/MM/YYYY');
$('.flatpickr').attr('autocomplete', 'off');
$('.flatpickr').flatpickr({
    dateFormat: "d/m/Y",
    minDate: "1/1/1900",
    maxDate: "1/1/2300",
    disableMobile: "true",
    allowInput: "true"
});
$('.flatpickr').toArray().forEach(function(field) {
    new Cleave(field, {
        date: true,
        dateMin: '1900-01-01',
        dateMax: '2300-01-01',
        delimiter: '/',
        datePattern: ['d', 'm', 'Y']
    });
});
</script>

@endsection

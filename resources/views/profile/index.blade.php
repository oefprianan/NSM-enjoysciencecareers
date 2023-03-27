@extends('layout.login')
@section('body')

<link href="{{ asset('css/profile.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/flatpickr/theme.css') }}" rel="stylesheet" />
<script src="{{ asset('lib/flatpickr/flatpickr.min.js') }}"></script>


<!-----Section start profile  ---->
<section class="section-profile">
    <div class="container-fuild">
        <div class="card-profile">
            <div class="row gy-5">
                <div class="col-xl-3 col-lg-3 ">
                    <div class="card-profile-left ">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a href="{{url('/profile')}}">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">ข้อมูลส่วนตัว</button>
                            </a>
                            <a href="{{url('/dashboard')}}">
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">แดชบอร์ด</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 ">
                    <div class="card-profile-right">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <h4 class="text-head-profile">ข้อมูลส่วนตัว</h4>
                                <div class="card-inner-profile">
                                    <div class="border-image-profile">
                                        <button type="button" class="btn-image-profile">
                                            <div class="image-profile "></div>
                                            <div label="Change image" class="icon-profile ">
                                                <i class="fa-solid fa-camera text-icon-profile"></i>
                                            </div>
                                        </button>
                                        <div style="display: none;"></div>
                                    </div>
                                    <div class="">
                                        <label class="form-label">ชื่อบัญชีผู้ใช้</label>
                                        <input type="text" class="form-control" placeholder="ชื่อบัญชีผู้ใช้"
                                            value="User Name" disabled readonly>
                                    </div>

                                    <form>
                                        <div class="row mb-3 mt-4">
                                            <div class="col-xl-6">
                                                <label class="form-label">ชื่อจริง</label>
                                                <input type="text" class="form-control" placeholder="ชื่อจริง">
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-label">นามสกุล</label>
                                                <input type="text" class="form-control" placeholder="นามสกุล">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-xl-6">
                                                <label class="form-label">วันเกิด</label>
                                                <input type="text" class="form-control flatpickr" placeholder="วันเกิด">
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-label">อีเมล</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label">เพศ</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">หญิง</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">ชาย</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                    <label class="form-check-label" for="inlineRadio3">อื่นๆ</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                                    <label class="form-check-label"
                                                        for="inlineRadio4">ไม่ต้องการระบุ</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-xl-6">
                                                <label class="form-label">เบอร์โทร</label>
                                                <input type="tel" class="form-control" placeholder="เบอร์โทร">
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-label">สถานะ</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>เลือกสถานะ</option>
                                                    <option value="1">นักเรียน/นักศึกษา</option>
                                                    <option value="2">คุณครู</option>
                                                    <option value="3">ผู้ปกครอง</option>
                                                    <option value="4">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">ระดับการศึกษา</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>เลือกระดับการศึกษา</option>
                                                <option value="1">ประถมศึกษา</option>
                                                <option value="2">มัธยมศึกษาตอนต้น</option>
                                                <option value="3">มัธยมศึกษาตอนปลาย</option>
                                                <option value="4">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                                                <option value="5">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                                                <option value="6">ปริญญาตรี</option>
                                                <option value="7">ปริญญาโท</option>
                                                <option value="8">ปริญญาเอก</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">ชื่อหน่วยงาน</label>
                                            <input type="text" class="form-control" placeholder="ชื่อหน่วยงาน">
                                        </div>

                                        <div class="text-center">
                                            <a type="button" class="btn btn-primary ">บันทึก</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">...</div> -->

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

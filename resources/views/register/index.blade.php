@extends('layout.login')
@section('body')

<link href="{{ asset('css/register.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/flatpickr/theme.css') }}" rel="stylesheet" />
<script src="{{ asset('lib/flatpickr/flatpickr.min.js') }}"></script>


<!-----Section start login  ---->
<section class="section-resgister">
    <div class="container-fuild">
        <div class="form-register">
            <h2 class="text-center mb-4">สมัครสมาชิก</h2>
            <form>
                <div class="row">
                    <div class="col-xl-6 card-register-1">
                        <div class="mb-3">
                            <label class="form-label">ชื่อบัญชีผู้ใช้</label>
                            <input type="text" class="form-control" placeholder="ชื่อบัญชีผู้ใช้">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">อีเมล</label>
                            <input type="email" class="form-control" placeholder="อีเมล">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" placeholder="******">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" placeholder="******">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" placeholder="0899999999">
                        </div>

                    </div>
                    <div class="col-xl-6 card-register-2">
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <label class="form-label">ชื่อจริง</label>
                                <input type="text" class="form-control" placeholder="ชื่อจริง">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">นามสกุล</label>
                                <input type="text" class="form-control" placeholder="นามสกุล">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">วันเกิด</label>
                            <input type="text" class="form-control flatpickr" placeholder="วันเกิด">
                        </div>

                        <div>
                            <label class="form-label">เพศ</label>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">หญิง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">ชาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">อื่นๆ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">ไม่ต้องการระบุ</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สถานะ</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เลือกสถานะ</option>
                                <option value="1">นักเรียน/นักศึกษา</option>
                                <option value="2">คุณครู</option>
                                <option value="3">ผู้ปกครอง</option>
                                <option value="4">อื่นๆ</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">ระดับการศึกษา</label>
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
                            <label class="form-label required">ชื่อหน่วยงาน</label>
                            <input type="text" class="form-control" placeholder="เช่น โรงเรียนหอหวัง">
                        </div>
                    </div>
                </div>
                <div class="form-check mt-4 text-center register-text-link ">
                    <label class="form-check-label" for="flexCheckChecked">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        คุณยอมรับ เงื่อนไขการใช้บริการ และนโยบายความเป็นส่วนตัว
                    </label>
                </div>
                <div class="mt-3 card-btn-resgister">
                    <a type="button" class="btn btn-primary " href="{{ url('/regissuccess') }}">ลงทะเบียน</a>
                </div>

            </form>

        </div>
    </div>
</section>
<!-----Section end login ---->


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
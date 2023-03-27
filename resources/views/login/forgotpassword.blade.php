@extends('layout.login')
@section('body')

<link href="{{ asset('css/login.css') }}" rel="stylesheet" />


<!-----Section start login  ---->
<section class="section-login">
    <div class="container-fuild">
        <div class="form-signin">
            <h2 class="text-center">ลืมรหัสผ่านหรือไม่?</h2>
            <div class="login-text-link-2 "><span class="login-text-span">โปรดกรอกอีเมลของคุณด้านล่าง
                    ระบบจะส่งรหัสผ่านไปยังอีเมลที่ได้ลงทะเบียนไว้</span></div>
            <form>
                <div class="mt-4 mb-4">
                    <!-- <label class="form-label">อีเมล</label> -->
                    <input type="email" class="form-control" placeholder="อีเมล">
                </div>
                <div class="text-center btn-forgotpassword">
                    <a type="submit" class="btn btn-primary" href="#">ส่ง</a>
                </div>
            </form>
        </div>
    </div>
</section>

<!-----Section end login ---->


@endsection
@extends('layout.login')
@section('body')

<link href="{{ asset('css/login.css') }}" rel="stylesheet" />


<!-----Section start login  ---->
<section class="section-login">
    <div class="container-fuild">
        <div class="form-signin">
            <h2 class="text-center">เข้าสู่ระบบ</h2>
            <form>
                <div class="mb-3">
                    <label class="form-label">อีเมล</label>
                    <input type="email" class="form-control" placeholder="อีเมล">
                </div>
                <div class="mb-3">
                    <label class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control" placeholder="******">
                </div>
                <div class="mb-3 login-text-link"><a href="{{ url('/forgotpassword') }}"
                        class="login-text-click">คลิกที่นี่
                    </a>ถ้าหากคุณลืมรหัสผ่าน</div>
                <div>
                    <a type="submit" class="btn btn-primary" href="#">เข้าสู่ระบบ</a>
                </div>
            </form>
            <div class="line-login login-dividing-text">หรือ</div>
            <div>
                <a href="" class="btn-login-icon">
                    <img src="{{ asset('image/icon/login-google.png') }}"
                        class="btn-login-text">เข้าสู่ระบบด้วยกูเกิล</a>
                <a href="" class="btn-login-icon">
                    <img src="{{ asset('image/icon/login-facebook.png') }}"
                        class="btn-login-text">เข้าสู่ระบบด้วยเฟซบุ๊ก</a>
            </div>
            <div class="login-text-link-2 "><span class="login-text-span">ยังไม่เป็นสมาชิก?</span><a
                    class="login-text-click" href="{{ url('/register') }}">คลิกเพื่อสมัครสมาชิก</a></div>
        </div>
    </div>
</section>

<!-----Section end login ---->


@endsection
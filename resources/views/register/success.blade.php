@extends('layout.login')
@section('body')

<link href="{{ asset('css/register.css') }}" rel="stylesheet" />


<!-----Section start login  ---->
<section class="section-resgister">
    <div class="container-fuild">
        <div class="form-regis-success">
            <form>
                <div class="text-center icon-regissuccess">
                    <i class="fa-regular fa-circle-check"></i>
                </div>
                <h2 class="text-center mb-4">ลงทะเบียนสำเร็จ</h2>
                <div class="mt-3 card-btn-resgister">
                    <a type="button" class="btn btn-primary " href="{{ url('/login') }}">เข้าสู่ระบบ</a>
                </div>

            </form>

        </div>
    </div>
</section>
<!-----Section end login ---->


@endsection
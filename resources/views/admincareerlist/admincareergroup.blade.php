@extends('layout.admin')
@section('body')

<link href="{{ asset('css/admincareerlist.css') }}" rel="stylesheet" />

<!-- <nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('image/logo.png') }}" alt="logo">
            </span>

            <div class="text header-text">
                <span class="name">Admin NSM</span>
                <span class="profession">Management</span>
            </div>
        </div>

        <i class="fa-sharp fa-solid fa-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
            <i class="fa-sharp fa-solid fa-magnifying-glass icon"></i>
                <input type="search" placeholder="Search...">
            </li>
            <ul class="menu-links">
                <li class="nav-link-admin">
                    <a href="{{ url('/admin') }}">
                        <i class="fa-sharp fa-solid fa-house icon"></i>
                        <span class="text nav-text">หน้าหลัก</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-solid fa-briefcase icon"></i>
                        <span class="text nav-text">ค้นหาอาชีพ</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-solid fa-paper-plane icon"></i>
                        <span class="text nav-text">ค้นหาประสบการณ์</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-solid fa-graduation-cap icon"></i>
                        <span class="text nav-text">ค้นหาทุน</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-sharp fa-solid fa-briefcase icon"></i>
                        <span class="text nav-text">ค้นหางาน</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-solid fa-user-tie icon"></i>
                        <span class="text nav-text">ค้นหาผู้เชี่ยวชาญ</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-solid fa-users icon"></i>
                        <span class="text nav-text">บทบาทผู้ใช้งาน</span>
                    </a>
                </li>
                <li class="nav-link-admin">
                    <a href="#">
                    <i class="fa-solid fa-certificate icon"></i>
                        <span class="text nav-text">Certificate</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4">
            <h1 class="fs-4"><span class="bg-white text rounded shadow px-2 me-2">NSM</span><span
                    class="text">Admin</span></h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </button>
        </div>

        <ul class="nav nav-pills flex-column mb-auto list-unstyled px-2" id="pills-tab" role="tablist">
            <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>หน้าหลัก</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-briefcase"></i>ค้นหาอาชีพ</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-paper-plane"></i>ค้นหาประสบการณ์</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-graduation-cap"></i>ค้นหาทุน</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-briefcase"></i>ค้นหางาน</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user-tie"></i>ค้นหาผู้เชี่ยวชาญ</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-users"></i>บทบาทผู้ใช้งาน</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-certificate"></i>Certificate</a></li>
        </ul>
        <hr class="h-color mx-2">
    </div>
    <div class="content">
    <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
    </div>
</div> -->


<!-----Section Start admin careerlist ---->
<section class="section-nav-admin">
    <div class="container-fluid">
        <div class="row">
            <!----- Start sidebar nav admin careerlist---->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-nav-admin sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
                            <a class="nav-link" aria-current="page" href="{{ url('/admin') }}">
                                <i class="fa-solid fa-house icon"></i>
                                หน้าหลัก
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->is('admincareerlist')) ? 'active' : '' }}">
                            <a class="nav-link" aria-current="page" href="{{ url('/admincareerlist') }}">
                                <i class="fa-solid fa-briefcase icon"></i>
                                ค้นหาอาชีพ
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-paper-plane icon"></i>
                                ค้นหาประสบการณ์
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-graduation-cap icon"></i>
                                ค้นหาทุน
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-briefcase icon"></i>
                                ค้นหางาน
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user-tie icon"></i>
                                ค้นหาผู้เชี่ยวชาญ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user icon"></i>
                                บทบาทผู้ใช้งาน
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-sharp fa-solid fa-award icon"></i>
                                Certificate
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-----End sidebar nav admin careerlist---->

            <!-----Start body main admin careerlist---->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-----Start header text admin careerlist---->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3>ค้นหาอาชีพ</h3>
                </div>
                <!-----End header text admin careerlist---->

                <!-----Section-1 start admin careerlist ---->
                <section class="section-1-admincareerlist mt-3 mb-3">
                    <div class="card-body">
                        <div>
                            <!-----Section-1 start tab ---->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">กลุ่มอาชีพ</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">อาชีพ</button>
                                </li>
                            </ul>
                            <!-----Section-1 end tab ---->

                            <div class="tab-content" id="pills-tabContent">
                                <!-----Start tab-1 ---->
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <!-- Button start add modal -->
                                    <div class="d-flex justify-content-end mb-5  ">
                                        <!--Start search item -->
                                        <input class="form-control search-career-admin me-1 " type="search"
                                            placeholder="Search" aria-label="Search" style=" width: 20%;">
                                        <button class="btn btn-search-career" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <!--End search item -->
                                        <!-- Button  add item -->
                                        <a>
                                        <button type="button" class="btn btn-primary-admin ms-4" data-bs-toggle="modal"
                                            data-bs-target="#addcareerModal-1">
                                            <i class="fa-solid fa-plus"></i>
                                            เพิ่มกลุ่มอาชีพ
                                        </button>
                                        </a>
                                        <!-- Start-Modal -->
                                        <div class="modal fade text-start" id="addcareerModal-1" tabindex="-1"
                                            aria-labelledby="careerModalLabel-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="careerModalLabel-1">
                                                            สร้างกลุ่มอาชีพ</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="text-head" class="">ภาพcharacter</label>
                                                        <div class="text-center">
                                                            <img src="{{ asset('image/mockup/800x550.png') }}"
                                                                alt="user-avatar" height="100" width="100"
                                                                id="uploadedAvatar">
                                                        </div>
                                                        <div class="text-center">
                                                            <label for="upload" class="btn btn-primary-admin mt-4 mb-4"
                                                                tabindex="0">
                                                                <span>อัพโหลดรูปภาพ</span>
                                                                <input type="file" id="upload"
                                                                    class="account-file-input" hidden=""
                                                                    accept="image/png, image/jpeg">
                                                            </label>
                                                        </div>
                                                        <label for="basic-url" class="form-label">ชื่อกลุ่มอาชีพ</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" id="basic-url"
                                                                aria-describedby="basic-addon3">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="col-md-12 text-center">
                                                            <button type="button" class="btn btn-success-footer"
                                                                data-bs-dismiss="modal">สร้าง</button>
                                                            <button type="button"
                                                                class="btn btn-cancel-footer">ยกเลิก</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-Modal -->
                                    </div>
                                    <!-- Button end add modal -->

                                    <!--* Item card fixed show 8 item *-->
                                    <!-- Start-item-card -->
                                    <div>
                                        <!--item-card-1-->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/800x550.png') }}" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5 class="mb-2">Digital IT & Media</h5>
                                                        <small class="text-muted ">แก้ไขล่าสุด</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            แก้ไข
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="text-head"
                                                                            class="">ภาพcharacter</label>
                                                                        <div class="text-center">
                                                                            <img src="{{ asset('image/mockup/800x550.png') }}"
                                                                                alt="user-avatar" height="100"
                                                                                width="100" id="uploadedAvatar">
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <label for="upload"
                                                                                class="btn btn-primary-admin mt-4 mb-4"
                                                                                tabindex="0">
                                                                                <span>อัพโหลดรูปภาพ</span>
                                                                                <input type="file" id="upload"
                                                                                    class="account-file-input" hidden=""
                                                                                    accept="image/png, image/jpeg">
                                                                            </label>
                                                                        </div>
                                                                        <label for="basic-url"
                                                                            class="form-label">ชื่อกลุ่มอาชีพ</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer-edit">
                                                                        <div class="col-md-12 text-center">
                                                                            <button type="button"
                                                                                class="btn btn-success-footer"
                                                                                data-bs-dismiss="modal">บันทึก</button>
                                                                            <button type="button"
                                                                                class="btn btn-cancel-footer">ยกเลิก</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Button delete modal -->
                                                        <button type="button" class="btn btn-danger-admin"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="exampleModal-2" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel-2">ลบ</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <p>คุณต้องการลบใช่หรือไม่</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer-delete">
                                                                        <div class="col-md-12 text-center">
                                                                            <button type="button"
                                                                                class="btn btn-success-footer"
                                                                                data-bs-dismiss="modal">ตกลง</button>
                                                                            <button type="button"
                                                                                class="btn btn-cancel-footer">ยกเลิก</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!--item-card-1-->
                                        <!--item-card-2-->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/800x550.png') }}" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5 class="mb-2">Food & Agriculture</h5>
                                                        <small class="text-muted ">แก้ไขล่าสุด</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            แก้ไข
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="text-head"
                                                                            class="">ภาพcharacter</label>
                                                                        <div class="text-center">
                                                                            <img src="{{ asset('image/mockup/800x550.png') }}"
                                                                                alt="user-avatar" height="100"
                                                                                width="100" id="uploadedAvatar">
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <label for="upload"
                                                                                class="btn btn-primary-admin mt-4 mb-4"
                                                                                tabindex="0">
                                                                                <span>อัพโหลดรูปภาพ</span>
                                                                                <input type="file" id="upload"
                                                                                    class="account-file-input" hidden=""
                                                                                    accept="image/png, image/jpeg">
                                                                            </label>
                                                                        </div>
                                                                        <label for="basic-url"
                                                                            class="form-label">ชื่อกลุ่มอาชีพ</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer-edit">
                                                                        <div class="col-md-12 text-center">
                                                                            <button type="button"
                                                                                class="btn btn-success-footer"
                                                                                data-bs-dismiss="modal">บันทึก</button>
                                                                            <button type="button"
                                                                                class="btn btn-cancel-footer">ยกเลิก</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Button delete modal -->
                                                        <button type="button" class="btn btn-danger-admin"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="exampleModal-2" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel-2">ลบ</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <p>คุณต้องการลบใช่หรือไม่</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer-delete">
                                                                        <div class="col-md-12 text-center">
                                                                            <button type="button"
                                                                                class="btn btn-success-footer"
                                                                                data-bs-dismiss="modal">ตกลง</button>
                                                                            <button type="button"
                                                                                class="btn btn-cancel-footer">ยกเลิก</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!--item-card-2-->

                                    </div>
                                    <!-- End-item-card -->

                                    <!-- Start-pagination -->
                                    <div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- End-pagination -->

                                </div>
                                <!-----End tab-1 ---->

                               

                            </div>
                        </div>
                    </div>
                </section>
                <!-----Section-1 end admin careerlist  ---->


            </main>
            <!-----End body main admin careerlist---->

        </div>
    </div>
</section>

<!-----Section End admin careerlist---->




@endsection
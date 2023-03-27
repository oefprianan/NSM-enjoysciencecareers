@extends('layout.admin')
@section('body')

<!-- <link href="{{ asset('css/adminglobal.css') }}" rel="stylesheet" /> -->



<!-----Section Start Home admin---->

<section class="section-nav-admin">
    <div class="container-fluid">
        <div class="row">
            <!-----Section-1 nav admin---->
            <!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-nav-admin sidebar collapse">
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
            </nav> -->

            <!-----Section-2 Start body main admin---->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3>หน้าหลัก</h3>
                </div>

                <!-----Section-1 admin home tab ---->
                <section class="section-1-admin mt-3 mb-3">
                    <div class="card-body">
                        <div>
                            <!-----Section-1 start tab ---->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">ภาพสไลด์</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Footer</button>
                                </li>
                            </ul>
                            <!-----Section-1 end tab ---->
                            <!-----Section-1 Start text head card ---->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="d-flex justify-content-between mb-5">
                                        <!-----Section-2 End text head card ---->
                                        <p>(ขนาดที่แนะนำ 1920x860 px)</p>
                                        <!-----Section-2 Start button add ---->
                                        <!-- Button add modal -->
                                        <a>
                                            <button type="button" class="btn btn-primary-admin " data-bs-toggle="modal"
                                                data-bs-target="#addslideModal">
                                                <i class="fa-solid fa-plus"></i>
                                                เพิ่มภาพ
                                            </button>
                                        </a>
                                    </div>
                                    <!-----Section-2 End button add ---->

                                    <!-----Section-2 Start Edit slide picture-1 ---->
                                    <div class="carditem">
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/1920x820.png') }}" />
                                                </div>
                                                <div
                                                    class=" text-card d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-2">Link</h6>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="text-head"
                                                                            class="required mb-3">ภาพสไลด์</label>
                                                                        (ขนาดที่แนะนำ 1920x860 px)
                                                                        <div class="text-center">
                                                                            <img src="{{ asset('image/mockup/1920x820.png') }}"
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
                                                                        <label for="basic-url" class="form-label">Link
                                                                            URL</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                placeholder="https://www.google.com/"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <div>
                                                                            <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13
                                                                                มีนาคม 2566</p>
                                                                            <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                                            <h5>คุณต้องการลบใช่หรือไม่</h5>
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
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/1920x820.png') }}" />
                                                </div>
                                                <div
                                                    class=" text-card d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-2">Link</h6>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="text-head"
                                                                            class="required mb-3">ภาพสไลด์</label>
                                                                        (ขนาดที่แนะนำ 1920x860 px)
                                                                        <div class="text-center">
                                                                            <img src="{{ asset('image/mockup/1920x820.png') }}"
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
                                                                        <label for="basic-url" class="form-label">Link
                                                                            URL</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                placeholder="https://www.google.com/"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <div>
                                                                            <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13
                                                                                มีนาคม 2566</p>
                                                                            <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                                            <h5>คุณต้องการลบใช่หรือไม่</h5>
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
                                        <!-- <hr class="m-0"> -->
                                        <!-----Section-2 End Edit slide picture-1 ---->
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <!-----Section-3 Start body admin footer inner---->
                                    <!-----Section-3 Start text head card ---->
                                    <div class="d-flex justify-content-end mb-5 ">

                                        <!-----Section-3 Start button add ---->
                                        <!-- Button add modal -->
                                        <a>
                                            <button type="button" class="btn btn-primary-admin" data-bs-toggle="modal"
                                                data-bs-target="#addfooterModal">
                                                <i class="fa-solid fa-plus"></i>
                                                เพิ่มFooter
                                            </button>
                                        </a>
                                        <!-- add Modal -->
                                        <div class="modal fade text-start" id="addfooterModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">สร้างFooter
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="basic-url" class="form-label">ข้อความ</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" id="basic-url"
                                                                aria-describedby="basic-addon3">
                                                        </div>
                                                        <label for="basic-url" class="form-label">Link URL</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" id="basic-url"
                                                                aria-describedby="basic-addon3"
                                                                placeholder="https://www.google.com/">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer-edit">
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
                                    </div>
                                    <!-----Section-3 End button add ---->

                                    <!-----Section-3 start card ---->
                                    <div class="carditem">
                                        <!-----Section-3 Start Edit footer-1 ---->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5>หน้าหลัก</h5>
                                                        <h6 class="mb-2">Link</h6>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal" data-bs-target="#editfooterModal-1">
                                                            <i class="fa-solid fa-pen-to-square"></i>

                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="editfooterModal-1" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered ">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            แก้ไข
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="basic-url"
                                                                            class="form-label">ข้อความ</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <label for="basic-url" class="form-label">Link
                                                                            URL</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                placeholder="https://www.google.com/"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13
                                                                            มีนาคม 2566</p>
                                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deletefooterModal-1">
                                                            <i class="fa-solid fa-trash"></i>

                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="deletefooterModal-1" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="deletefooterModal-1">ลบ</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <h5>คุณต้องการลบใช่หรือไม่</h5>
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
                                        <!-----Section-3 End Edit footer-1 ---->

                                        <!-----Section-3 Start Edit footer-2 ---->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5>ติดต่อเรา</h5>
                                                        <h6 class="mb-2">Link</h6>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal" data-bs-target="#editfooterModal-2">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="editfooterModal-2" tabindex="-1"
                                                            aria-labelledby="footer-two-ModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered ">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="footer-two-ModalLabel">แก้ไข
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="basic-url"
                                                                            class="form-label">ข้อความ</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <label for="basic-url" class="form-label">Link
                                                                            URL</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                placeholder="https://www.google.com/"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13
                                                                            มีนาคม 2566</p>
                                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deletefooterModal-2">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="deletefooterModal-2" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="deletefooterModal-2">ลบ</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <h5>คุณต้องการลบใช่หรือไม่</h5>
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
                                        <!-----Section-3 End Edit footer-2 ---->

                                        <!-----Section-3 Start Edit footer-3 ---->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5>ค้นหาทุน</h5>
                                                        <h6 class="mb-2">Link</h6>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal" data-bs-target="#editfooterModal-2">
                                                            <i class="fa-solid fa-pen-to-square"></i>

                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="editfooterModal-2" tabindex="-1"
                                                            aria-labelledby="footer-two-ModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered ">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="footer-two-ModalLabel">แก้ไข
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label for="basic-url"
                                                                            class="form-label">ข้อความ</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <label for="basic-url" class="form-label">Link
                                                                            URL</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="basic-url"
                                                                                placeholder="https://www.google.com/"
                                                                                aria-describedby="basic-addon3">
                                                                        </div>
                                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13
                                                                            มีนาคม 2566</p>
                                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
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
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deletefooterModal-2">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="deletefooterModal-2" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="deletefooterModal-2">ลบ</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <h5>คุณต้องการลบใช่หรือไม่</h5>
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
                                        <!-----Section-3 End Edit footer-3 ---->
                                    </div>


                                    <!-----Section-3 End body admin footer inner---->

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-----Section-2 End tab1 ---->

                <!-----Section-3 start footer ---->


                <!-----Section-2 End body admin inner---->
            </main>
            <!-----Section End body mian admin---->
        </div>
    </div>

    <!-----Section End Home admin---->
    <!-- add Modal -->
    <div class="modal fade text-start" id="addslideModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">สร้างภาพสไลด์
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="text-head" class="required mb-3">ภาพสไลด์</label>
                            (ขนาดที่แนะนำ 1920x860 px)
                            <div class="text-center">
                                <img src="{{ asset('image/mockup/1920x820.png') }}" alt="user-avatar" height="100"
                                    width="100" id="uploadedAvatar">
                            </div>
                            <div class="text-center">
                                <label for="upload" class="btn btn-primary-admin mt-4 mb-4" tabindex="0">
                                    <span>อัพโหลดรูปภาพ</span>
                                    <input type="file" id="upload" class="account-file-input" hidden=""
                                        accept="image/png, image/jpeg">
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <label for="basic-url" class="form-label">Link URL</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="basic-url"
                                    placeholder="https://www.google.com/" aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer-edit">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-success-footer" data-bs-dismiss="modal">สร้าง</button>
                        <button type="button" class="btn btn-cancel-footer">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
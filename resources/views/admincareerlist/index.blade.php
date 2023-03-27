@extends('layout.admin')
@section('body')

<link href="{{ asset('css/admincareerlist.css') }}" rel="stylesheet" />


<!-----Section Start admin careerlist ---->
<section class="section-nav-admin">
    <div class="container-fluid">
        <div class="row">
            <!-----Start body main admin careerlist---->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-----Start header text admin careerlist---->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3>ค้นหาอาชีพ</h3>
                </div>
                <!-----End header text admin careerlist---->

                <!-----Section-1 start admin careerlist ---->
                <section class="section-1-admin mt-3 mb-3">
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
                                            <button type="button" class="btn btn-primary-admin ms-4"
                                                data-bs-toggle="modal" data-bs-target="#addcareerModal-1">
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
                                    <div class="carditem">
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

                                <!-----Start tab-2 ---->
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <!-- Button start add item -->
                                    <div class="d-flex justify-content-end mb-5 ">
                                        <!--Start search item -->
                                        <input class="form-control search-career-admin me-1 " type="search"
                                            placeholder="Search" aria-label="Search" style=" width: 20%;">
                                        <button class="btn btn-search-career" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <!--End search item -->
                                        <a href="{{ url('/admincareerdetail') }}">
                                            <button type="button" class="btn btn-primary-admin ms-4">
                                                <i class="fa-solid fa-plus"></i>
                                                เพิ่มอาชีพ
                                            </button>
                                        </a>

                                    </div>
                                    <!-- Button end add item -->

                                    <!--* Item card fixed show 8 item *-->
                                    <!-- Start-item-card -->
                                    <div class="carditem">
                                        <!--item-card-1-->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/800x550.png') }}" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5 class="mb-2">นักพัฒนาซอฟต์แวร์</h5>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#career-edit-Modal-1">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="career-edit-Modal-1" tabindex="-1"
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
                                                                            class="">ภาพหน้าปก</label>
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
                                                            data-bs-target="#career-delete-Modal-1">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="career-delete-Modal-1" tabindex="-1"
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
                                                        <h5 class="mb-2">นักการตลาดดิจิตอล</h5>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#career-edit-Modal-1">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="career-edit-Modal-1" tabindex="-1"
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
                                                                            class="">ภาพหน้าปก</label>
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
                                                            data-bs-target="#career-delete-Modal-1">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="career-delete-Modal-1" tabindex="-1"
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
                                        <!--item-card-2-->

                                        <!--item-card-3-->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/800x550.png') }}" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5 class="mb-2">นักออกแบบและสร้างภาพเคลื่อนไหว</h5>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#career-edit-Modal-1">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="career-edit-Modal-1" tabindex="-1"
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
                                                                            class="">ภาพหน้าปก</label>
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
                                                            data-bs-target="#career-delete-Modal-1">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="career-delete-Modal-1" tabindex="-1"
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
                                        <!--item-card-3-->

                                        <!--item-card-4-->
                                        <ul class="p-0 mt-4">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="{{ asset('image/mockup/800x550.png') }}" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h5 class="mb-2">นักวิทยาศาสตร์ข้อมูล</h5>
                                                        <p class="text-muted">แก้ไขล่าสุดเมื่อ: 13 มีนาคม 2566</p>
                                                        <p class="text-muted">ผู้บันทึก: Jimin</p>
                                                    </div>
                                                    <div class="user-progress">
                                                        <!-- Button edit modal -->
                                                        <button type="button" class="btn btn-success-admin"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#career-edit-Modal-1">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="career-edit-Modal-1" tabindex="-1"
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
                                                                            class="">ภาพหน้าปก</label>
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
                                                            data-bs-target="#career-delete-Modal-1">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <!-- delete Modal -->
                                                        <div class="modal fade" id="career-delete-Modal-1" tabindex="-1"
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
                                        <!--item-card-4-->
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
                                <!-----End tab-2 ---->

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
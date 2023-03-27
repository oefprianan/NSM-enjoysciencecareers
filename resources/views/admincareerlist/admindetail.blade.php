@extends('layout.admindetail')
@section('body')

<link href="{{ asset('css/admindetail.css') }}" rel="stylesheet" />



<!-----Section Start admin careerlist ---->
<section class="section-nav-admin">
    <div class="container-fluid">
        <div class="row">
            <!----- Start sidebar nav admin careerlist---->

            <!-----End sidebar nav admin careerlist---->

            <!-----Start body main admin careerlist---->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <!-----Start header text admin careerlist---->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h4>สร้าง/แก้ไข</h4>
                    <a href="{{ url('/admincareerlist') }}">
                        <button type="button" class="btn btn-primary-admin ms-4">
                            <i class="fa-solid fa-arrow-left-long"></i>
                            กลับหน้ารายการ
                        </button>
                    </a>
                </div>
                <!-----End header text admin careerlist---->

                <!-----Section-1 start admin careerlist ---->
                <section class="section-1-admincareerlist mt-3 mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="d-flex align-items-start">
                                    <div class="nav col-lg-3 flex-column nav-pills tab-item-modal me-5" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <!--tab-Modal-1-->
                                        <button class="nav-link active" id="v-pills-career-1-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-1" type="button" role="tab"
                                            aria-controls="v-pills-career-1" aria-selected="true">ข้อมูลอาชีพ</button>
                                        <!--tab-Modal-2-->
                                        <button class="nav-link" id="v-pills-career-2-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-2" type="button" role="tab"
                                            aria-controls="v-pills-career-2"
                                            aria-selected="false">หน้าที่รับผิดชอบ</button>
                                        <!--tab-Modal-3-->
                                        <button class="nav-link" id="v-pills-career-3-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-3" type="button" role="tab"
                                            aria-controls="v-pills-career-3"
                                            aria-selected="false">สาขาวิชาที่เรียน</button>
                                        <!--tab-Modal-4-->
                                        <button class="nav-link" id="v-pills-career-4-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-4" type="button" role="tab"
                                            aria-controls="v-pills-career-4"
                                            aria-selected="false">สามารถทำอาชีพอะไรได้อีกบ้าง</button>
                                        <!--tab-Modal-5-->
                                        <button class="nav-link" id="v-pills-career-5-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-5" type="button" role="tab"
                                            aria-controls="v-pills-career-5"
                                            aria-selected="false">ทำงานเกี่ยวข้องกับเครื่องมืออะไรบ้าง</button>
                                        <!--tab-Modal-6-->
                                        <button class="nav-link" id="v-pills-career-6-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-6" type="button" role="tab"
                                            aria-controls="v-pills-career-6" aria-selected="false">Hard skills</button>
                                        <!--tab-Modal-7-->
                                        <button class="nav-link" id="v-pills-career-7-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-7" type="button" role="tab"
                                            aria-controls="v-pills-career-7" aria-selected="false">Soft skills</button>
                                        <!--tab-Modal-8-->
                                        <button class="nav-link" id="v-pills-career-8-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-8" type="button" role="tab"
                                            aria-controls="v-pills-career-8"
                                            aria-selected="false">คุณลักษณะนิสัยส่วนบุคคล</button>
                                        <!--tab-Modal-9-->
                                        <button class="nav-link" id="v-pills-career-9-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-9" type="button" role="tab"
                                            aria-controls="v-pills-career-9" aria-selected="false">สถานที่ทำงาน</button>
                                        <!--tab-Modal-10-->
                                        <button class="nav-link" id="v-pills-career-10-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-10" type="button" role="tab"
                                            aria-controls="v-pills-career-10"
                                            aria-selected="false">สาขาอาชีพอื่นๆที่ต้องทำงานร่วม</button>
                                        <!--tab-Modal-11-->
                                        <button class="nav-link" id="v-pills-career-11-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-career-11" type="button" role="tab"
                                            aria-controls="v-pills-career-11"
                                            aria-selected="false">ความก้าวหน้าในสายงานและอื่นๆ</button>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent" style="width: 100%;">
                                        <!--content-Modal-1-->
                                        <div class="tab-pane fade show active" id="v-pills-career-1" role="tabpanel"
                                            aria-labelledby="v-pills-career-1-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>ข้อมูลอาชีพ</h4>
                                            </div>
                                            <div class="text-start mb-4">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="inputCareerName"
                                                            class="form-label">ชื่ออาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="ชื่ออาชีพ"
                                                            aria-label="ชื่ออาชีพ">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="inputState" class="form-label">กลุ่มอาชีพ</label>
                                                        <select id="inputState" class="form-select">
                                                            <option selected>
                                                                Choose...</option>
                                                            <option>Digital IT &
                                                                Media</option>
                                                            <option>Food &
                                                                Agriculture</option>
                                                            <option>Materials,
                                                                Design &
                                                                Manufacturing
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <div class="row ">
                                                    <!--picture-Modal-1 -->
                                                    <div class="col-lg-4">
                                                        <div class="text-start mb-3">
                                                            <label for="text-head" class="">ภาพcharacter</label>
                                                        </div>
                                                        <img src="{{ asset('image/mockup/800x550.png') }}"
                                                            alt="user-avatar" height="100" width="100"
                                                            id="uploadedAvatar">
                                                        <div>
                                                            <label for="upload" class="btn btn-primary-admin mt-4 mb-4"
                                                                tabindex="0">
                                                                <span>อัพโหลดรูปภาพ</span>
                                                                <input type="file" id="upload"
                                                                    class="account-file-input" hidden=""
                                                                    accept="image/png, image/jpeg">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--picture-Modal-2 -->
                                                    <div class="col-lg-4">
                                                        <div class="text-start mb-3">
                                                            <label for="text-head" class="">ภาพหน้าปก</label>
                                                        </div>
                                                        <img src="{{ asset('image/mockup/800x550.png') }}"
                                                            alt="user-avatar" height="100" width="100"
                                                            id="uploadedAvatar">
                                                        <div>
                                                            <label for="upload" class="btn btn-primary-admin mt-4 mb-4"
                                                                tabindex="0">
                                                                <span>อัพโหลดรูปภาพ</span>
                                                                <input type="file" id="upload"
                                                                    class="account-file-input" hidden=""
                                                                    accept="image/png, image/jpeg">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--picture-Modal-3-->
                                                    <div class="col-lg-4">
                                                        <div class="text-start mb-3">
                                                            <label for="text-head" class="">ภาพ
                                                                Visual</label>
                                                        </div>
                                                        <img src="{{ asset('image/mockup/800x550.png') }}"
                                                            alt="user-avatar" height="100" width="100"
                                                            id="uploadedAvatar">
                                                        <div>
                                                            <label for="upload" class="btn btn-primary-admin mt-4 mb-4"
                                                                tabindex="0">
                                                                <span>อัพโหลดรูปภาพ</span>
                                                                <input type="file" id="upload"
                                                                    class="account-file-input" hidden=""
                                                                    accept="image/png, image/jpeg">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--textbox-Modal-1-->
                                                <div class="text-start mt-3 mb-3">
                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <label for="salaryDescriptionTextarea" class="form-label">
                                                                รายละเอียดเงินเดือน
                                                            </label>
                                                            <textarea class="form-control"
                                                                id="salaryDescriptionTextarea" rows="3"></textarea>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="jobDescriptionTextarea" class="form-label">
                                                                ลักษณะงาน
                                                            </label>
                                                            <textarea class="form-control" id="jobDescriptionTextarea"
                                                                rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--content-Modal-2-->
                                        <div class="tab-pane fade" id="v-pills-career-2" role="tabpanel"
                                            aria-labelledby="v-pills-career-2-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>หน้าที่รับผิดชอบ</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มหน้าที่
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        หน้าที่1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="หน้าที่รับผิดชอบ"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        หน้าที่2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="หน้าที่รับผิดชอบ"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                        </div>
                                        <!--content-Modal-3-->
                                        <div class="tab-pane fade" id="v-pills-career-3" role="tabpanel"
                                            aria-labelledby="v-pills-career-3-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>สาขาวิชาที่เรียน</h4>
                                            </div>
                                            <!--Major-item-1-->
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                                                <h5>ระดับอุดมศึกษา</h5>
                                                <button type="button" class="btn btn-primary-admin ms-4"
                                                    data-bs-toggle="modal" data-bs-target="#career-detail-add">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มคณะ
                                                </button>
                                                <!-- edit Modal -->
                                                <div class="modal fade" id="career-detail-add" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true"
                                                    style="background: rgb(172 172 178 / 22%)">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    สร้างคณะ
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div>
                                                                    <label for="inputMajor" class="form-label">
                                                                        <h5>คณะ
                                                                        </h5>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="ชื่อคณะ" aria-label="ชื่อคณะ">
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3">
                                                                    <h5>สาขา
                                                                    </h5>
                                                                    <button type="button"
                                                                        class="btn btn-primary-admin ms-4">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                        เพิ่มสาขา
                                                                    </button>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <!--item-card-1-->
                                                                    <ul class="p-0 mt-4 ">
                                                                        <li class="d-flex mb-4 pb-1">
                                                                            <div
                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                <div class="me-2 major-tab">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="majorText"
                                                                                        placeholder="ชื่อสาขา">
                                                                                </div>
                                                                                <div class="user-progress">
                                                                                    <!-- Button edit modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-success-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                    </button>
                                                                                    <!-- Button delete modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-danger-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <!--item-card-1-->
                                                                    <!--item-card-2-->
                                                                    <ul class="p-0 mt-4 ">
                                                                        <li class="d-flex mb-4 pb-1">
                                                                            <div
                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                <div class="me-2 major-tab">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="majorText"
                                                                                        placeholder="ชื่อสาขา">
                                                                                </div>
                                                                                <div class="user-progress">
                                                                                    <!-- Button edit modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-success-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                    </button>
                                                                                    <!-- Button delete modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-danger-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <!--item-card-2-->
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
                                            <!--item-card-1-->
                                            <div>
                                                <ul class="p-0 mt-4">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2">
                                                                <h6 class="mb-2">
                                                                    คณะวิศวกรรมศาสตร์
                                                                </h6>
                                                                <h6 class="mb-2">
                                                                    สาขาวิชา
                                                                    วิศวกรรมซอฟต์แวร์
                                                                </h6>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#career-detail-edit">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- edit Modal -->
                                                                <div class="modal fade" id="career-detail-edit"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                    style="background: rgb(172 172 178 / 22%)">
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    แก้ไข
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div>
                                                                                    <label for="inputMajor"
                                                                                        class="form-label">
                                                                                        <h5>คณะ
                                                                                        </h5>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="ชื่อคณะ"
                                                                                        aria-label="ชื่อคณะ">
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3">
                                                                                    <h5>สาขา
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn btn-primary-admin ms-4">
                                                                                        <i class="fa-solid fa-plus"></i>
                                                                                        เพิ่มสาขา
                                                                                    </button>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <!--item-card-1-->
                                                                                    <ul class="p-0 mt-4 ">
                                                                                        <li class="d-flex mb-4 pb-1">
                                                                                            <div
                                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                                <div
                                                                                                    class="me-2 major-tab">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        id="majorText"
                                                                                                        placeholder="ชื่อสาขา">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="user-progress">
                                                                                                    <!-- Button edit modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-success-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                                    </button>
                                                                                                    <!-- Button delete modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-danger-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-trash"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!--item-card-1-->
                                                                                    <!--item-card-2-->
                                                                                    <ul class="p-0 mt-4 ">
                                                                                        <li class="d-flex mb-4 pb-1">
                                                                                            <div
                                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                                <div
                                                                                                    class="me-2 major-tab">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        id="majorText"
                                                                                                        placeholder="ชื่อสาขา">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="user-progress">
                                                                                                    <!-- Button edit modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-success-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                                    </button>
                                                                                                    <!-- Button delete modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-danger-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-trash"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!--item-card-2-->
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
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#career-detail-delete">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                                <!-- delete Modal -->
                                                                <div class="modal fade" id="career-detail-delete"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                    style="background: rgb(172 172 178 / 22%)">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel-2">
                                                                                    ลบ
                                                                                </h5>
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
                                            </div>
                                            <!--item-card-1-->

                                            <!--Major-item-2-->
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                                                <h5>ระดับอาชีวศึกษา</h5>
                                                <button type="button" class="btn btn-primary-admin ms-4"
                                                    data-bs-toggle="modal" data-bs-target="#career-detail-add-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มสาขา
                                                </button>
                                                <!-- edit Modal -->
                                                <div class="modal fade" id="career-detail-add-2" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true"
                                                    style="background: rgb(172 172 178 / 22%)">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    สร้างสาขา
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div
                                                                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 mt-3">
                                                                    <h5>สาขา
                                                                    </h5>
                                                                    <button type="button"
                                                                        class="btn btn-primary-admin ms-4">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                        เพิ่มสาขา
                                                                    </button>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <!--item-card-1-->
                                                                    <ul class="p-0 mt-4 ">
                                                                        <li class="d-flex mb-4 pb-1">
                                                                            <div
                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                <div class="me-2 major-tab">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="majorText"
                                                                                        placeholder="ชื่อสาขา">
                                                                                </div>
                                                                                <div class="user-progress">
                                                                                    <!-- Button edit modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-success-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                    </button>
                                                                                    <!-- Button delete modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-danger-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <!--item-card-1-->
                                                                    <!--item-card-2-->
                                                                    <ul class="p-0 mt-4 ">
                                                                        <li class="d-flex mb-4 pb-1">
                                                                            <div
                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                <div class="me-2 major-tab">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="majorText"
                                                                                        placeholder="ชื่อสาขา">
                                                                                </div>
                                                                                <div class="user-progress">
                                                                                    <!-- Button edit modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-success-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                    </button>
                                                                                    <!-- Button delete modal -->
                                                                                    <button type="button"
                                                                                        class="btn btn-danger-admin">
                                                                                        <i
                                                                                            class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <!--item-card-2-->
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

                                            <!--item-card-2-->
                                            <div>
                                                <ul class="p-0 mt-4">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2">
                                                                <h6 class="mb-2">
                                                                    สาขาเทคโนโลยีคอมพิวเตอร์
                                                                </h6>
                                                                <h6 class="mb-2">
                                                                    สาขางานคอมพิวเตอร์ ฮาร์ดแวร์
                                                                </h6>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#career-detail-edit-2">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- edit Modal -->
                                                                <div class="modal fade" id="career-detail-edit-2"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                    style="background: rgb(172 172 178 / 22%)">
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    แก้ไข
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div
                                                                                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                                                                                    <h5>สาขา
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn btn-primary-admin ms-4">
                                                                                        <i class="fa-solid fa-plus"></i>
                                                                                        เพิ่มสาขา
                                                                                    </button>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <!--item-card-1-->
                                                                                    <ul class="p-0 mt-4 ">
                                                                                        <li class="d-flex mb-4 pb-1">
                                                                                            <div
                                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                                <div
                                                                                                    class="me-2 major-tab">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        id="majorText"
                                                                                                        placeholder="ชื่อสาขา">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="user-progress">
                                                                                                    <!-- Button edit modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-success-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                                    </button>
                                                                                                    <!-- Button delete modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-danger-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-trash"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!--item-card-1-->
                                                                                    <!--item-card-2-->
                                                                                    <ul class="p-0 mt-4 ">
                                                                                        <li class="d-flex mb-4 pb-1">
                                                                                            <div
                                                                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                                                                <div
                                                                                                    class="me-2 major-tab">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        id="majorText"
                                                                                                        placeholder="ชื่อสาขา">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="user-progress">
                                                                                                    <!-- Button edit modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-success-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-pen-to-square"></i>
                                                                                                    </button>
                                                                                                    <!-- Button delete modal -->
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-danger-admin">
                                                                                                        <i
                                                                                                            class="fa-solid fa-trash"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!--item-card-2-->
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
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#career-detail-delete-2">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                                <!-- delete Modal -->
                                                                <div class="modal fade" id="career-detail-delete-2"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                    style="background: rgb(172 172 178 / 22%)">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel-2">
                                                                                    ลบ
                                                                                </h5>
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
                                            </div>
                                            <!--item-card-2-->
                                        </div>

                                        <!--content-Modal-4-->
                                        <div class="tab-pane fade" id="v-pills-career-4" role="tabpanel"
                                            aria-labelledby="v-pills-career-4-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>สามารถทำอาชีพอะไรได้อีกบ้าง</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มอาชีพ
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        อาชีพ1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="อาชีพที่ทำได้"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        อาชีพ2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="อาชีพที่ทำได้"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                        </div>
                                        <!--content-Modal-5-->
                                        <div class="tab-pane fade" id="v-pills-career-5" role="tabpanel"
                                            aria-labelledby="v-pills-career-5-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>ทำงานเกี่ยวข้องกับเครื่องมืออะไรบ้าง</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มเครื่องมือ
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        อุปกรณ์1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="เครื่องมือ"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        อุปกรณ์2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="เครื่องมือ"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                        </div>
                                        <!--content-Modal-6-->
                                        <div class="tab-pane fade" id="v-pills-career-6" role="tabpanel"
                                            aria-labelledby="v-pills-career-6-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>Hard skills</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มskills
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        skill 1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="skill" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        skill 2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="skill" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                        </div>
                                        <!--content-Modal-7-->
                                        <div class="tab-pane fade" id="v-pills-career-7" role="tabpanel"
                                            aria-labelledby="v-pills-career-7-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>Soft skills</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มskills
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        skill 1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="skill" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        skill 2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="skill" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                        </div>
                                        <!--content-Modal-8-->
                                        <div class="tab-pane fade" id="v-pills-career-8" role="tabpanel"
                                            aria-labelledby="v-pills-career-8-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>คุณลักษณะนิสัยส่วนบุคคล</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มลักษณะ
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        ลักษณะ1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="ลักษณะนิสัย"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        ลักษณะ2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="ลักษณะนิสัย"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                        </div>
                                        <!--content-Modal-9-->
                                        <div class="tab-pane fade" id="v-pills-career-9" role="tabpanel"
                                            aria-labelledby="v-pills-career-9-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>สถานที่ทำงาน</h4>
                                            </div>
                                            <!--Major-item-1-->
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                                                <h5>หน่วยงานรัฐบาล</h5>
                                                <button type="button" class="btn btn-primary-admin ms-4"
                                                    data-bs-toggle="modal" data-bs-target="#work-detail-add">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มที่ทำงาน
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        สถานที่1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="สถานที่ทำงาน"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        สถานที่2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="สถานที่ทำงาน"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>
                                            <!--Major-item-1-->
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                                                <h5>หน่วยงานเอกชน</h5>
                                                <button type="button" class="btn btn-primary-admin ms-4"
                                                    data-bs-toggle="modal" data-bs-target="#work-detail-add">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มที่ทำงาน
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        สถานที่1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="สถานที่ทำงาน"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        สถานที่2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="สถานที่ทำงาน"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->

                                            </div>


                                        </div>
                                        <!--content-Modal-10-->
                                        <div class="tab-pane fade" id="v-pills-career-10" role="tabpanel"
                                            aria-labelledby="v-pills-career-10-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>สาขาอาชีพอื่น ๆ ที่ต้องทำงานร่วม</h4>
                                                <button type="button" class="btn btn-primary-admin ms-4">
                                                    <i class="fa-solid fa-plus"></i>
                                                    เพิ่มอาชีพ
                                                </button>
                                            </div>
                                            <div>
                                                <!--item-card-1-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        อาชีพ1
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="อาชีพที่ต้องทำงานด้วย"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-1-->

                                                <!--item-card-2-->
                                                <ul class="p-0 mt-4 ">
                                                    <li class="d-flex mb-4 pb-1">
                                                        <div
                                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                            <div class="me-2 responsibility-tab">
                                                                <div class="row mb-3">
                                                                    <label for="responsibilityTextarea"
                                                                        class="col-lg-2 form-label">
                                                                        อาชีพ2
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control"
                                                                            id="responsibilityTextarea"
                                                                            placeholder="อาชีพที่ต้องทำงานด้วย"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-progress">
                                                                <!-- Button edit modal -->
                                                                <button type="button" class="btn btn-success-admin">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <!-- Button delete modal -->
                                                                <button type="button" class="btn btn-danger-admin">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--item-card-2-->
                                            </div>
                                        </div>
                                        <!--content-Modal-11-->
                                        <div class="tab-pane fade" id="v-pills-career-11" role="tabpanel"
                                            aria-labelledby="v-pills-career-11-tab">
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                                <h4>ความก้าวหน้าในสายงาน</h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="jobDescriptionTextarea"
                                                    rows="3"></textarea>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3 border-bottom">
                                                <h4>Embed Video</h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="jobDescriptionTextarea" rows="3"
                                                    placeholder=""><iframe width="560" height="315" src="https://www.youtube.com/embed/ILgSuWv9qwg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                </textarea>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3 border-bottom">
                                                <h4>Link แบบทดสอบ</h4>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <input type="text" class="form-control"
                                                    placeholder="https://www.google.com/">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-----Section-1 end admin careerlist  ---->
                <div class="fixed-bottom shadow-lg">
                    <div class="row">
                        <div class="text-center ">
                            <a href="{{ url('/admincareerlist') }}">
                                <button type="button" class="btn btn-success-footer ms-1">
                                    บันทึก
                                </button>
                            </a>
                            <a href="{{ url('/admincareerlist') }}">
                                <button type="button" class="btn btn-primary-admin ms-1">
                                    เผยแพร่
                                </button>
                            </a>
                            <a href="{{ url('/admincareerlist') }}">
                                <button type="button" class="btn btn-cancel-footer ms-1">
                                    ย้อนกลับ
                                </button>
                            </a>
                            <a href="{{ url('/admincareerlist') }}">
                                <button type="button" class="btn btn-cancel-footer ms-1">
                                    ยกเลิก
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
            <!-----End body main admin careerlist---->
        </div>
    </div>
</section>
<!-----Section End admin careerlist---->




@endsection
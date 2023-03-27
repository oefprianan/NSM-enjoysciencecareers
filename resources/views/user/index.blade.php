@extends('layout.admin')
@section('body')
<link rel="stylesheet" href="{{ asset('lib/tagator/fm.tagator.jquery.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/tagator.css') }}"/>
<script src="{{ asset('lib/tagator/fm.tagator.jquery.js') }}"></script>

<!-----Section Start User ---->
<section class="section-nav-admin">
    <div class="container-fluid">
        <div class="row">
    
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-----Header---->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3>ผู้ใช้งานระบบ</h3>
                </div>

                <!----- Card Body ---->
                <div class="card-body">
                    
                    <!-- Button Group -->
                    <div class="d-flex justify-content-end mb-3">
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
                                เพิ่มผู้ใช้งาน
                            </button>
                        </a>
                    </div>

                    <!--Start Table -->
                    <div class="table-wrapper">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th width="10%"></th>
                                    <th width="20%">Username</th>
                                    <th width="25%">ชื่อ-นามสกุล</th>
                                    <th width="20%">สิทธิ์การใช้งานระบบ</th>
                                    <th width="25%">อีเมล</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="user-progress">
                                            <!-- Button edit modal -->
                                            <button type="button" class="btn btn-success-admin" data-bs-toggle="modal" data-bs-target="#addcareerModal-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <!-- Button delete modal -->
                                            <button type="button" class="btn btn-danger-admin" data-bs-toggle="modal" data-bs-target="#deletefooterModal-1">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>SystemAdmin</td>
                                    <td>นายทดสอบ ทดสอบ</td>
                                    <td>ผู้ดูแลระบบ</td>
                                    <td>system_admin@mail.com</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="user-progress">
                                            <!-- Button edit modal -->
                                            <button type="button" class="btn btn-success-admin" data-bs-toggle="modal" data-bs-target="#addcareerModal-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <!-- Button delete modal -->
                                            <button type="button" class="btn btn-danger-admin" data-bs-toggle="modal" data-bs-target="#deletefooterModal-1">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>SystemAdmin</td>
                                    <td>นายทดสอบ ทดสอบ</td>
                                    <td>ผู้ดูแลระบบ</td>
                                    <td>system_admin@mail.com</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="user-progress">
                                            <!-- Button edit modal -->
                                            <button type="button" class="btn btn-success-admin" data-bs-toggle="modal" data-bs-target="#addcareerModal-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <!-- Button delete modal -->
                                            <button type="button" class="btn btn-danger-admin" data-bs-toggle="modal" data-bs-target="#addcareerModal-1">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>SystemAdmin</td>
                                    <td>นายทดสอบ ทดสอบ</td>
                                    <td>ผู้ดูแลระบบ</td>
                                    <td>system_admin@mail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--End Table -->
                            
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mb-3">
                        <nav aria-label="Page navigation">
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

                </div>

            </div>
            <!-----End body main admin careerlist---->

        </div>
    </div>
</section>
<!-----Section End User---->


<!-- Start-Modal -->
<div class="modal fade text-start" id="addcareerModal-1" tabindex="-1"
    aria-labelledby="careerModalLabel-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="careerModalLabel-1">
                    เพิ่ม/แก้ไขข้อมูลผู้ใช้งาน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="basic-url" class="form-label">ชื่อ-นามสกุล</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="basic-url" class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="basic-url" class="form-label">Username</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="basic-url" class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="basic-url" class="form-label">สิทธิ์การใช้งาน</label>
                        <div class="input-group mb-3">
                            <input type="text" class="tagator form-control" data-tagator-use-dimmer="true" data-tagator-autocomplete="['ผู้ดูแลระบบ', 'ผู้เยี่ยมชม', 'ผู้เขียนคอนเทนต์']">
                        </div>
                    </div>
                    <div class="col-md-12 text-end">
                        <button type="button" class="btn btn-danger-admin" data-bs-toggle="modal" data-bs-target="#deletefooterModal-1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-success-footer"
                        data-bs-dismiss="modal">บันทึก</button>
                    <button type="button"
                        class="btn btn-cancel-footer" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End-Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="deletefooterModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletefooterModal-1">ลบ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center my-5">
                    <h5>คุณต้องการลบข้อมูลผู้ใช้งาน 'นายทดสอบ ทดสอบ' ใช่หรือไม่</h5>
                </div>
            </div>
            <div class="modal-footer-delete">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-success-footer" data-bs-dismiss="modal">ตกลง</button>
                    <button type="button" class="btn btn-cancel-footer" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
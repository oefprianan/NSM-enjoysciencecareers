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
                    <h3>สิทธิ์การใช้งาน</h3>
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
                            <a class="btn btn-primary-admin ms-4" href="{{ url('/roledetail') }}">
                                <i class="fa-solid fa-plus"></i>
                                เพิ่มสิทธิ์
                            </a>
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
                                            <a class="btn btn-success-admin" href="{{ url('/roledetail') }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
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
                                             <a class="btn btn-success-admin" href="{{ url('/roledetail') }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
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
                                            <a class="btn btn-success-admin" href="{{ url('/roledetail') }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
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
                    <h5>คุณต้องการลบสิทธ์ 'xxx' ใช่หรือไม่</h5>
                </div>
            </div>
            <div class="modal-footer-delete">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-success-footer" data-bs-dismiss="modal">ตกลง</button>
                    <button type="button" class="btn btn-cancel-footer">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
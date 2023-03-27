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
                    <h3>เพิ่ม/แก้ไขสิทธิ์การใช้งาน</h3>
                </div>

                <!----- Card Body ---->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">ชื่อสิทธิ์</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="basic-url"
                                    aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="col-md-12">
                            xxx
                        </div>
                        <div class="col-md-12 text-end">
                           <!-- Button delete modal -->
                           <button type="button" class="btn btn-danger-admin" data-bs-toggle="modal" data-bs-target="#deletefooterModal-1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-----End Card Body--->

            <div class="fixed-bottom shadow-lg">
                <div class="row">
                    <div class="text-center ">                          
                        <button type="button" class="btn btn-success-footer ms-1" data-bs-toggle="modal" data-bs-target="#alertModal">
                            บันทึก
                        </button>
                        <a href="{{ url('/role') }}" class="btn btn-cancel-footer ms-1">
                            ย้อนกลับ
                        </a>                          
                    </div>
                </div>
            </div>

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
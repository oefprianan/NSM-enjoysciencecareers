@extends('layout.admin')
@section('body')
<link rel="stylesheet" href="{{ asset('lib/tagator/fm.tagator.jquery.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/tagator.css') }}"/>
<script src="{{ asset('lib/tagator/fm.tagator.jquery.js') }}"></script>
<style>
    table tbody tr {
        cursor: pointer;
    }
    table tbody tr:hover {
        color: var(--primary-color-admin);
    }
</style>
<!-----Section Start User ---->
<section class="section-nav-admin">
    <div class="container-fluid">
        <div class="row">
    
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-----Header---->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3>ประวัติการใช้งาน</h3>
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
                    </div>

                    <!--Start Table -->
                    <div class="table-wrapper">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th width="20%">xx</th>
                                    <th width="25%">xx</th>
                                    <th width="20%">xx</th>
                                    <th width="25%">xx</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-bs-toggle="modal" data-bs-target="#detailModal">
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#detailModal">                                   
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#detailModal">                                  
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
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
<div class="modal fade text-start" id="detailModal" tabindex="-1"
    aria-labelledby="careerModalLabel-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="careerModalLabel-1">
                    รายละเอียด</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        xxx
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="col-md-12 text-center">
                    <button type="button"
                        class="btn btn-cancel-footer" data-bs-dismiss="modal" aria-label="Close">ปิด</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End-Modal -->
@endsection
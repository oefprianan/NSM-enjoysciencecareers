@extends('layout.main')
@section('body')
    <link href="{{ asset('css/careerlist.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/tab-responsive/tab-responsive.css') }}" rel="stylesheet" />

    <!----- Section-1 head----->
    <section class="section-banner" style="background-image: url('../image/background/background-career.png');">
        <div class="container-fuild">
            <div class="row mt-1">
                <div class="col-xl-12 text-center">
                    <h2>ค้นหาอาชีพ <img src="{{ asset('image/icon/search.png') }}" /></h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="text-center  mx-auto box-search">
                    <input class="form-control" type="text" pla ceholder="ค้นหาอาชีพ" />
                    <button type="submit" class="btn"> <img style="height:22px;"
                            src="{{ asset('image/icon/search-g.png') }}" /> </button>
                </div>
            </div>
        </div>
    </section>


    <!----- Section-2 body----->
    <section class="section-content">
        <div class="container-fuild">

            <div class="row">
                <div class="content-tab col-lg-11 col-md-11 col-sm-12 mx-auto">

                    <!-----Tab menu---->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <!-----Tab show all---->
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link" name="All" value="">All</button>
                        </li>
                        <!-----Tab show select---->
                        @foreach ($data['category_careers'] as $value)
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" name="{{ $value->category_career_name }}"
                                    value="{{ $value->category_career_id }}">{{ $value->category_career_name }}</button>
                            </li>
                        @endforeach


                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <!-----Title---->
                        <div class="row mt-5">
                            <div class="col-xl-12" id="catagory_show">
                                <h3>All</h3>
                            </div>
                        </div>
                        <!-----Pagination---->
                        <!-- <div class="row text-end mt-3">
                                <div class="col-xl-12">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                    < </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> > </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->

                        <div class="row text-center mt-3" id="show">
                            @foreach ($data['careers_detail_main'] as $value)
                                <div class="col-xl-3 col-md-4 col-sm-6 col-12 mb-3">
                                    <a href="{{ url('/careerdetail/' . $value->career_detail_main_id) }}">
                                        <div class="card">
                                            <img src="{{ asset($value->career_detail_character) }}" class="img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-text"> {{ $value->career_name_th }}<br>
                                                    {{ $value->career_name_en }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="{{ asset('lib/tab-responsive/tab-responsive.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("button").click(function() {

                var category_career_id = $(this).val();
                var category_career_name = this.name;

                document.getElementById("catagory_show").innerHTML = '<h3>' + category_career_name +
                    '</h3>';
                fetch_data();

                function fetch_data() {
                    $.ajax({
                        url: "{{ route('Careerlist.index.action') }}",
                        method: 'GET',
                        data: {
                            category_career_id: category_career_id,
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(data.query_dat);
                            $('#show').html(data.query_data);
                        }
                    })
                }

            });
        });
    </script>
@endsection

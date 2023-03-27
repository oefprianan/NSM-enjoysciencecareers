@extends('layout.main')
@section('body')
<style>
    <?php for ($t = 9; $t <= 40; $t++) {
        echo "#test$t{
            display: none;}
        ";
    }; ?>
</style>
<link href="{{ asset('css/quizpage.css') }}" rel="stylesheet" />

<!----- Section-1 head ----->
<section class="section-banner" style="background-image: url('../image/background/background-qiuz.png');">
    <div class="container-fuild">
        <div class="row mt-1">

            <div class="d-flex text-center justify-content-center align-items-center">
                <h2>ค้นหาอาชีพ</h2>
                <div class="circle-wrap">
                    <div class="circle p1">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                        </div>
                        <div class="inside-circle" id="inside-circle"> 1 / 5 </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--- Section-2 body----->
<section class="section-content ">

    <div class="container-md">
        <div class="row">
            <div class="mx-auto choice-quiz">
                <form name="form_quiz" id="form_quiz" method="post" action="{{ route('quiz.quizpage.result') }}">
                    @csrf
                    <div class="row">

                        @foreach($data['quiz'] as $value)
                        <div class="col-12 box-quiz" id="test{{ $loop->index + 1 }}">
                            <label>{{ $loop->index + 1 }}. {{ $value->quiz_name}}</label>
                            <ul class="ul-nonestyle">
                                <li>
                                    <input type="radio" name="{{$value->type_score_name_en}}[choice{{ $value->quiz_id}}]" class="choice_all" value="0" id="c{{ $value->quiz_id}}-level0">
                                    <label for="c{{ $value->quiz_id}}-level0" class="choice text-center">
                                        <img src="{{ asset('image/quiz/level0.png') }}" />
                                        <span>ไม่ตรงเลย</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="{{$value->type_score_name_en}}[choice{{ $value->quiz_id}}]" class="choice_all" value="1" id="c{{ $value->quiz_id}}-level1">
                                    <label for="c{{ $value->quiz_id}}-level1" class="choice text-center">
                                        <img src="{{ asset('image/quiz/level1.png') }}" />
                                        <span>ตรงบางส่วน</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="{{$value->type_score_name_en}}[choice{{ $value->quiz_id}}]" class="choice_all" value="2" id="c{{ $value->quiz_id}}-level2">
                                    <label for="c{{ $value->quiz_id}}-level2" class="choice text-center">
                                        <img src="{{ asset('image/quiz/level2.png') }}" />
                                        <span>ค่อนข้างตรง</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="{{$value->type_score_name_en}}[choice{{ $value->quiz_id}}]" class="choice_all" value="3" id="c{{ $value->quiz_id}}-level3">
                                    <label for="c{{ $value->quiz_id}}-level3" class="choice text-center">
                                        <img src="{{ asset('image/quiz/level3.png') }}" />
                                        <span>ตรงมาก</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                        <div class="text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 text-center">
                                        <button type="submit" class="btn btn-quiz mt-3" id="btn-submit" disabled>ตรวจสอบคะแนน</button>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div>
                                            <!-- <button type="button" class="btn btn-quiz" href="{{ url('/quizresult') }}" style="width:207px; padding: 10px 0px;" id="BackPage"> ย้อนกลับ <img src="{{ asset('image/icon/left-arrow-g.png') }}" /></button> -->
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-quiz" href="{{ url('/quizresult') }}" style="width:207px; padding: 10px 0px;" id="NextPage" disabled> ถัดไป <img src="{{ asset('image/icon/right-arrow-g.png') }}" /></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>



<script>
    // $("#BackPage").hide();
    let clicks = 1;

    $(document).ready(function() {
        $("#NextPage").click(function() {
            clicks += 1;
            if (clicks == 1) {
                document.getElementById("NextPage").disabled = true;
                for (let i = 1; i < 9; i++) {
                    $("#test" + i).show();
                }
                for (let i = 9; i < 41; i++) {
                    $("#test" + i).hide();
                }
            } else if (clicks == 2) {
                // $("#BackPage").show();
                $('.circle').addClass('p2');
                document.getElementById('inside-circle').innerHTML = '2 / 5';
                document.getElementById("NextPage").disabled = true;
                for (let i = 1; i < 9; i++) {
                    $("#test" + i).hide();
                }
                for (let i = 9; i < 17; i++) {
                    $("#test" + i).show();
                }
                for (let i = 17; i < 41; i++) {
                    $("#test" + i).hide();
                }
            } else if (clicks == 3) {
                $('.circle').addClass('p3');
                document.getElementById('inside-circle').innerHTML = '3 / 5';
                document.getElementById("NextPage").disabled = true;
                for (let i = 1; i < 17; i++) {
                    $("#test" + i).hide();
                }
                for (let i = 17; i < 25; i++) {
                    $("#test" + i).show();
                }
                for (let i = 25; i < 41; i++) {
                    $("#test" + i).hide();
                }
            } else if (clicks == 4) {
                $('.circle').addClass('p4');
                document.getElementById('inside-circle').innerHTML = '4 / 5';
                document.getElementById("NextPage").disabled = true;
                for (let i = 1; i < 25; i++) {
                    $("#test" + i).hide();
                }
                for (let i = 25; i < 33; i++) {
                    $("#test" + i).show();
                }
                for (let i = 33; i < 41; i++) {
                    $("#test" + i).hide();
                }
            } else if (clicks == 5) {
                $("#btn-submit").show();
                $('.circle').addClass('p5');
                document.getElementById('inside-circle').innerHTML = '5 / 5';
                for (let i = 1; i < 33; i++) {
                    $("#test" + i).hide();
                }
                for (let i = 33; i < 41; i++) {
                    $("#NextPage").hide();
                    $("#test" + i).show();
                }
            }
        });
        // $("#BackPage").click(function() {
        //     clicks -= 1;
        //     if (clicks == 1) {
        //         $("#NextPage").show();
        //         $("#BackPage").hide();
        //         for (let i = 1; i < 9; i++) {
        //             $("#test" + i).show();
        //         }
        //         for (let i = 9; i < 41; i++) {
        //             $("#test" + i).hide();
        //         }
        //     } else if (clicks == 2) {
        //         for (let i = 1; i < 9; i++) {
        //             $("#test" + i).hide();
        //         }
        //         for (let i = 9; i < 17; i++) {
        //             $("#test" + i).show();
        //         }
        //         for (let i = 17; i < 41; i++) {
        //             $("#test" + i).hide();
        //         }
        //     } else if (clicks == 3) {
        //         for (let i = 1; i < 17; i++) {
        //             $("#test" + i).hide();
        //         }
        //         for (let i = 17; i < 25; i++) {
        //             $("#test" + i).show();
        //         }
        //         for (let i = 25; i < 41; i++) {
        //             $("#test" + i).hide();
        //         }
        //     } else if (clicks == 4) {
        //         $("#NextPage").show();
        //         for (let i = 1; i < 25; i++) {
        //             $("#test" + i).hide();
        //         }
        //         for (let i = 25; i < 33; i++) {
        //             $("#test" + i).show();
        //         }
        //         for (let i = 33; i < 41; i++) {
        //             $("#test" + i).hide();
        //         }
        //     } else if (clicks == 5) {
        //         for (let i = 1; i < 33; i++) {
        //             $("#test" + i).hide();
        //         }
        //         for (let i = 33; i < 41; i++) {
        //             $("#test" + i).show();
        //         }
        //     }
        // });


    });




    $("#btn-submit").hide();
    let count_choice = $(".choice_all");
    count_choice.on("change", function() {
        let checkedCount = $('.choice_all:checked').length;
        if (checkedCount == 8) {
            document.getElementById("NextPage").disabled = false;
        }
        if (checkedCount == 16) {
            document.getElementById("NextPage").disabled = false;
        }
        if (checkedCount == 24) {
            document.getElementById("NextPage").disabled = false;
        }
        if (checkedCount == 32) {
            document.getElementById("NextPage").disabled = false;
        }
        if (checkedCount == 40) {
            document.getElementById("NextPage").disabled = false;
            document.getElementById("btn-submit").disabled = false;
            // $("#btn-submit").show();
            $("#NextPage").hide();
            // $("#BackPage").hide();

        }
    });
</script>
@endsection
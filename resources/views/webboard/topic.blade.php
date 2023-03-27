@extends('layout.main')
@section('body')
<link rel="stylesheet" href="{{ asset('css/webboard.css') }}" />

<!-- Lib Text Editor -->
<link rel="stylesheet" href="{{ asset('lib/quilleditor/quill.snow.css') }}" />
<link rel="stylesheet" href="{{ asset('css/quill.css') }}" />
<script src="{{ asset('lib/quilleditor/quill.min.js') }}"></script>


<!----- Section-1 head----->
<section class="section-banner" style="background-image: url('../image/background/bg-contact-sec1.png');">
    <div class="container-fuild">
        <div class="row mt-1">
            <div class="col-xl-12 text-center">
                <h2>ชื่อเรื่อง</h2>
            </div>
        </div>
    </div>
</section>

<!--------------------------
    Start Content
-------------------------->
<section class="section-content">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 border-bottom pb-5">
                
                    ทดสอบ

            </div> 
        </div> 

    </div>
</section>
<!--------------------------
    End Content
-------------------------->

<!--------------------------
    Start Conment
-------------------------->
<section class="section-comment">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 mx-auto">   
                <div class="comment-box mt-2">  
                
                    <h5>แสดงความคิดเห็น</h5> 
                       
                    <!----- Start Editor ---->
                    <div id="standalone-container">
                        <div id="toolbar-container">
                        <span class="ql-formats">
                            <!-- <select class="ql-font"></select> -->
                            <select class="ql-size"></select>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-strike"></button>
                        </span>
                        <span class="ql-formats">
                            <select class="ql-color"></select>
                            <select class="ql-background"></select>
                        </span>
                        <!-- <span class="ql-formats">
                            <button class="ql-script" value="sub"></button>
                            <button class="ql-script" value="super"></button>
                        </span> -->
                        <span class="ql-formats">
                            <!-- <button class="ql-header" value="1"></button> -->
                            <button class="ql-header" value="2"></button>
                            <button class="ql-blockquote"></button>
                            <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-list" value="ordered"></button>
                            <button class="ql-list" value="bullet"></button>
                            <!-- <button class="ql-indent" value="-1"></button>
                            <button class="ql-indent" value="+1"></button> -->
                        </span>
                        <span class="ql-formats">
                            <!-- <button class="ql-direction" value="rtl"></button> -->
                            <select class="ql-align"></select>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-link"></button>
                            <button class="ql-image"></button>
                            <button class="ql-video"></button>
                            <!-- <button class="ql-formula"></button> -->
                        </span>
                        <!-- <span class="ql-formats">
                            <button class="ql-clean"></button>
                        </span> -->
                        </div>
                        <div id="editor-container"></div>
                    </div>
                    <!----- End Editor ------>

                    <!----- Button ---->
                    <div class="row my-2 px-2">
                        <div class="col-md-8">
                            <!----- Account Profile ---->                
                            <div class="profile pt-2">
                                <img class="img-icon me-2" src="{{ asset('image/mockup/profile.png') }}" />
                                <span>Username</span>                         
                            </div>
                        </div>
                        <div class="col-md-4 text-end">
                            <button class="btn btn-theme" style="min-width:100px;"> โพสต์ </button>
                        </div>
                    </div>    

                </div>
            </div> 
        </div> 


        <!-- Coment List    -->
        <div class="row mt-4">
            <div class="col-lg-10 mx-auto">
                <ul class="ul-nonestyle">
                    
                    <!----- Item 1 ---->
                    <li class="comment-box mb-2">
                        
                        <!----- Account Profile ---->                
                        <div class="profile mb-3">
                            <img class="img-icon me-2" src="{{ asset('image/mockup/profile.png') }}" />
                            <span>Username</span>    
                            <smalldate class="text-muted ms-3"> DD/MM/YYYY เวลา MM:HH</smalldate>                     
                        </div>
                
                        <!----- Start Text ---->
                        <div class="row mb-3">
                            <div class="col-12">

                                    ส่วนแสดงข้อความจาก Editor

                            </div>
                        </div>
                        <!----- End Text ------>

                        <div class="row py-1 border-top comment-footer">
                            <div class="col-6">
                                <button class="btn btn-text mx-1">ถูกใจ</button>  
                                <button class="btn btn-text mx-1">ตอบกลับ</button>                        
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-white">แจ้งลบ</button>                            
                            </div>
                        </div>
                    </li>

                    <!----- Item 2 ---->
                    <li class="comment-box mb-2">                       
                        <!----- Account Profile ---->                
                        <div class="profile mb-3">
                            <img class="img-icon me-2" src="{{ asset('image/mockup/profile.png') }}" />
                            <span>Username</span>    
                            <smalldate class="text-muted ms-3"> DD/MM/YYYY เวลา MM:HH</smalldate>                     
                        </div>
                        <!----- Start Text ---->
                        <div class="row mb-3">
                            <div class="col-12">

                                    ส่วนแสดงข้อความจาก Editor

                            </div>
                        </div>
                        <!----- End Text ------>
                        <div class="row py-1 border-top comment-footer">
                            <div class="col-6">
                                <button class="btn btn-text mx-1">ถูกใจ</button>  
                                <button class="btn btn-text mx-1">ตอบกลับ</button>                        
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-white">แจ้งลบ</button>                            
                            </div>
                        </div>
                    </li>

                    
                </ul>
                
            </div> 

            <div class="col-12 mt-5 text-center">
                <a href="#" class="btn-text"> แสดงเพิ่ม &nbsp <i class="fa-solid fa-angle-down"></i></a>
            </div>
        </div>

    </div>
</section>
<!--------------------------
    End Conment
-------------------------->

<!-- Text Editor -->
<script>
  var quill = new Quill('#editor-container', {
    modules: {
      formula: true,
      syntax: true,
      toolbar: '#toolbar-container'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });
</script>

@endsection

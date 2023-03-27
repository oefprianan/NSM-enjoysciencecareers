<header>
   <nav class="navbar navbar-expand-xl navbar-toggleable-xl navbar-light fixed-top bg-white border-bottom box-shadow">
       <div class="container-fluid">
       <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fa-user-astronaut me-2"></i>NSM Management</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"  aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <!-- <button class="navbar-toggler position-absolute d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->


          <!----- Menu right ----->
          <div class="d-flex menu-right">
                <ul class="ul-nonestyle">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">TH</a> -->
                        <a class="nav-link language" href="#">EN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-login" href="{{ url('/login') }}">ออกจากระบบ</a>
                    </li>
                </ul> 
            </div>
       </div>
   </nav>
</header>



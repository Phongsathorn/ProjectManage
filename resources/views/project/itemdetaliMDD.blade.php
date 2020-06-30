<!DOCTYPE html>
<html class="img-down">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <!-- Open Graph Meta-->
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <!-- import icon -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- font Athiti -->
        <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@400;500;600&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <title>ICTSTORE</title>

        <style>
           .user-size {
                width: 23%;
                margin-top: -3px;
                margin-right: 30px;
                margin-left: 30px;
                padding-bottom: -10%;
           }

           .content{
                margin-top: 8px;
           }

           .search-left{
                margin-left: 50px;
           }

           .top {
                margin-top: 5px;
           }

           .btn-login {
                height: 43px;
                margin-left: -20px;
                background-color: white;
                border-radius: 5px;
           }

           .name-scle{
                font-size: 16px;
                color: #FFFFFF;
                -ms-flex-item-align: center;
                    align-self: center;
                margin-top: -30px;
                margin-left: 90px;
           }

           .span-i-user {
                font-size: 33px; 
                color: none; 
                margin-left: -85px;
                margin-top:-1.5px;
                margin-right: -7px;
           }
           
           .text-mage {
               font-size:17px;
               margin-left: 40px;
               padding:3px;
               margin-top:-35px;
           }

           
           body {
               background-image: url("img/background-MDD.jpg");
               height: 100%; 
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
           }

           html {
               background-image: url("img/background-body-left.jpg");
               height: 100%; 
               background-position: center 550px;
               background-repeat: no-repeat;
               background-size: cover;
           }

        </style>
    </head>
    <body class="img-top">
    <div class="app sidebar-mini " >
        <header class="app-header">
            <!-- font Athiti -->
            <a href="homeMDD" class="app-header__logo font-Athiti" >ICTSTORE</a> 
            <!-- main.css-->
            <ul class="app-nav">
                <li class="app-search search-left">
                    <input class="app-search__input" type="search" placeholder="ค้นหาวิจัย โครงงาน วิทยานิพน">
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>
                <nav class="app-navmenu" >    
                    <li class="active1 menulink fontlink" ><a href="homeBD">หน้าเเรก</a></li>
                    <li class="active2 menulink fontlink"><a href="SearchAdvance">ค้นหาเเบบละเอียด</a></li>
                    <li class="active3 menulink fontlink"><a href="#">เกี่ยวกับ</a></li>
                    <li class="active4 menulink fontlink"><a href="#">ติดต่อ</a></li>
                </nav>
                <div class="navbar-dark layoutaccout ">
                    <ul class="navbar-nav ml-auto ml-md-0">
                        
                        @guest
                            @if (Route::has('login'))
                                <div class="front nav-item" style="margin-top: px;">
                                        <a class="text-item"  id="userDropdown" href="{{route ('login')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button class="btn-login btn btn-outline-primary"><i class="fas fa-user-circle span-i-user"></i><div class="text-mage">เข้าสู่ระบบ</div></button></a>
                                            <div class="dropdown-menu dropdown-menu-right" style="margin-top: 13px;" aria-labelledby="userDropdown">
                                                <ul class="navbar-nav ml-auto">
                                                    <div class="account-dropdown js-dropdown">
                                                        <div class="info clearfix">
                                                     
                                                            <h3><div class="card-header">{{ __('เข้าสู่ระบบ') }}</div></h3>
                                                            <div class="">
                                                                <form method="POST" action="{{ route('login') }}">
                                                                    @csrf

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6">
                                                                            <input id="username" type="username" class="form-control @error('email') is-invalid @enderror" style="width: 210px;height: 40px;margin-left:31px;" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="ชื่อผู้ใช้ของคุณ">

                                                                            @error('username')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6">
                                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="width: 210px; height: 40px;margin-left:31px;" name="password" required autocomplete="current-password" placeholder="รหัสผ่านของคุณ">

                                                                            @error('password')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6 offset-md-4">
                                                                            <div class="form-check" style="margin-left:-71px;">
                                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                                <label class="form-check-label" style="color: black;" for="remember">
                                                                                    {{ __('จดจำฉันไว้') }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group row mb-0">
                                                        
                                                                        
                                                                        <div class="col-md-8 offset-md-4">
                                                                            @if (Route::has('password.request'))
                                                                                <a class="btn btn-link btn-re" style="margin-top:-10px; margin-left: 5px; " href="{{ route('password.request') }}">
                                                                                    {{ __('ลืมรหัสผ่านใช่หรือไม่?') }}
                                                                                </a>
                                                                            @endif
                                                                            <button type="submit" class="btn btn-primary" style="width: 210px; margin-left:-70px; " >
                                                                                ล็อกอิน
                                                                            </button>

                                                                            <div style="margin-left:-65px; margin-top: 10px;">คุณยังไม่มีบัญชี?</div> <a type="submit" class="btn btn-link btn-layouts" style="margin-left:30px;margin-top:-47px;" href="{{ route('register') }}">สร้างบัญชี</a>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                </div>
                            @endif
                                
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link " id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="user-area col-sm-5 user-avatar rounded-circle user-size" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="User Avatar">
                                        <div class="name-scle dropdown-toggle">{{ Auth::user()->name }}</div> 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <ul class="navbar-nav ml-auto">
                                            <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <center><div class="image">
                                                    <a href="profile">
                                                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="" class="user-avatar rounded-circle"/>
                                                    </a>
                                                </div></center>
                                                <div class="content">
                                                    <h5 class="name">
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            
                                            <a href="profile" class="top dropdown-item"><i class="zmdi zmdi-account"></i>โปรไฟล์</a>
                                                
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('ออกจากระบบ') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                    </li>
                        @endguest
                                        
                    </ul>
                </div>
                <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
        </header>
            <div class="app-sidebar__overlay" data-toggle="sidebar" aria-label="Hide Sidebar"></div>
                <!-- app-sidebar css ของ main.css ส่วนของ เเท็บ ซ้ายมือ -->
                <aside class="app-sidebar">
                    <ul class="app-menu">
                        <li>
                            <div id="layoutSidenav">
                                <div id="layoutSidenav_nav">
                                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                        <div class="sb-sidenav-menu">
                                            <div class="nav">
                                                <div class="font-Athiti">
                                                    <a href="homeBD"><button type="button" class="btn-control btn-default btn-outline-primary "  style="font-size:18px;">ปริญญาตรี</button></a> 
                                                    <a href="homeMDD"><button type="button" class="btn-control btn-default btn-outline-primary " style="font-size:18px;">ปริญญาเอก โท </button></a>
                                                </div><br>
                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                                        >  เว็บ
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                    </a>
                                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                                <a class="nav-link" href="wed">ทั้งหมด</a>
                                                                <a class="nav-link" href="#">ติดตาม</a>
                                                                <a class="nav-link" href="#">ดูเเละสุขภาพ</a>
                                                                <a class="nav-link" href="#">ไร่สวน</a>
                                                            </nav>
                                                    </div>

                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                                        >เว็บ&เว็บแอปพลิเคชั่น
                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                    </a>
                                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav ">
                                                            <a class="nav-link" href="wedapp">ทั้งหมด</a>
                                                            <a class="nav-link" href="#">ติดตาม</a>
                                                            <a class="nav-link" href="#">ดูเเละสุขภาพ</a>
                                                            <a class="nav-link" href="#">ไร่สวน</a>
                                                        </nav>
                                                    </div>
                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                                        >แอปพลิเคชั่น
                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                                    ></a>
                                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav">
                                                            <a class="nav-link" href="app">ทั้งหมด</a>
                                                            <a class="nav-link" href="#">ติดตาม</a>
                                                            <a class="nav-link" href="#">ดูเเละสุขภาพ</a>
                                                            <a class="nav-link" href="#">ไร่สวน</a>
                                                        </nav>
                                                    </div>
                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                                        >เกม
                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                                    ></a>
                                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav">
                                                            <a class="nav-link" href="game">ทั้งหมด</a>
                                                            <a class="nav-link" href="#">ผจญภัย</a>
                                                            <a class="nav-link" href="#">ยุทธศาสตร์</a>
                                                            <a class="nav-link" href="#">ปริศนา</a>
                                                            <a class="nav-link" href="#">กีฬา</a>
                                                            <a class="nav-link" href="#">เเอ็กชัน</a>
                                                        </nav>
                                                    </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </li>
                    <style>
                        hr {
                            display: block;
                            unicode-bidi: isolate;
                            margin-inline-start: auto;
                            margin-inline-end: auto;
                            overflow: hidden;
                            border-style: inset;
                            border-width: 2px;
                            }
                    </style>
                    <p><hr></p>
                    
                    <div class="layoutlogre">
                        @if (Route::has('login'))
                            <div class="links front">
                                @auth
                                    <a href="addproject" class="view">สร้างผลงาน</a><br>
                                @else
                                    
                                @endauth
                            
                            </div>
                        @endif
                    </div>
                    </li>
                </ul>
                    
                </aside>

               
                    <!-- img item project -->
                <div class="rowcolumn">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <!-- detailitem -->
                                <div class="D-text D-layout">
                                    <label for="text">ชื่อเรื่อง :</label><br>
                                    <label for="text">ชื่อเรื่องภาษาอังกฤษ :</label><br>
                                    <label for="text">เจ้าของผลงาน :</label><br>
                                    <label for="text">ที่ปรึกษา :</label><br>
                                    <label for="text">หมวดหมู่ :</label><br>
                                    <label for="text">ประเภทเอกสาร :</label><br>
                                    <label for="text">คำสำคัญ :</label><br>
                                    <label for="text" class="">บทคัดย่อ :</label><br>
                                    <div class="a-top-layout">
                                        <p>ดาวน์โหลดไฟล์ข้อมูล<a href="" class="a-layout">คลิก</a></p>
                                    </div>
                                </div>
                                
                                        
                            </div>
                        </div>
                    </div>
                </div>

                
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
    </div>
        <!-- Modal -->
    </body>
</html>
    
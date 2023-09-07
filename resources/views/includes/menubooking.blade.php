<header>

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
                    <span></span>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                    <div class="header-top-right">
                        <div class="content">
                        <a href="{{url('/')}}">ระบบจองคิวประชาสัมพันธ์</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <div class="header-logo-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-9">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{ asset('assets/images/logo.png') }}" alt="TSU"></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mainmenu-area pull-right">
                                <div class="mainmenu hidden-sm hidden-xs">
                                    <nav>
                                        <ul id="nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('pagebooking')}}"><i class="fa-solid fa-house-user"></i> หน้าหลัก</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('booking')}}"><i class="fa-regular fa-calendar-plus"></i> จองคิว</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('record')}}"><i class="fa-regular fa-calendar-check"></i> ประวัติการจอง</a>
                                            </li> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i></i>ผู้ใช้  |  {{$data->name}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('signout')}}"><i class="fa-solid fa-right-to-bracket"></i> ออกจากระบบ</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="class="col-lg-12 col-md-12 col-sm-12"></div>
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('about')}}">เกี่ยวกับเรา</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('service')}}">บริการ</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('contact')}}">ติดต่อเรา</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                    </div>
                </div>
            </div>

<script src="https://kit.fontawesome.com/c7df321ca6.js" crossorigin="anonymous"></script>

</header>
    
    
  <!--   <div class="test">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">MyBlog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">เกี่ยวกับเรา</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('service')}}">บริการ</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">ติดต่อเรา</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ</a>
                        </li>
        
                    </ul>
                </div>
            </div>
        </nav>
    </div>

   <div class="header-logo-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href=""></a>
                </div>
            </div>  
            <div class="col-md-9">
                <nav>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">เกี่ยวกับเรา</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('service')}}">บริการ</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">ติดต่อเรา</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ</a>
                        </li>
        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</header>






   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">เกี่ยวกับเรา</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('service')}}">บริการ</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">ติดต่อเรา</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ</a>
                </li>

            </ul>
        </div>
    </div>
</nav>-->
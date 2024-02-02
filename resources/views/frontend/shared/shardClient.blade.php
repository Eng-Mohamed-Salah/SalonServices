<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/asstesClient') }}/imag/M-.png">
    <!--  Bootstrap v4.6.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  owl.carousel v2.3.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('frontend/asstesClient') }}/fonts/Droid.Arabic.Kufi_DownloadSoftware.iR_.ttf">
    <link rel="stylesheet" href="{{ asset('frontend/asstesClient') }}/fonts/centric-space-centric-space-svg-400.otf">
    <link rel="stylesheet" href="{{ asset('frontend/asstesClient') }}/css/owl.carousel.css">

    <!--  font Awesome -->
    <link href="{{ asset('frontend/asstesClient') }}/fonts/all.min.css" rel="stylesheet">

    <!--  Style css -->
    <link href="{{ asset('frontend/asstesClient') }}/css/shared.css" rel="stylesheet">
    @yield('style')

    <title>@yield('title')</title>
</head>

<body dir="rtl">


    <!--=============== LOADING ===============-->
    <!-- <section dir="ltr" id="loadingOverlay" class="loading-up">
        <div class='loader loader1'>
            <div>
                <div>
                    <div>
                        <div>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End -->

    <!--=============== SIDEBAR ===============-->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-container">
            <div class="logo text-start">
                <span class="toggle-sidebar"><i class="fa-solid fa-arrow-right fa-lg"></i></span>
            </div>
            <div class="logo d-flex align-items-center flex-column">
                <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="" class="sidebar__logo-text">
                <span>هادى ربيع</span>
            </div>
            <div class="sidebar-content">
                <h3 class="sidebar-title">
                    <span>الصفحات</span>
                </h3>
                <div class="sidebar-list">
                    <a href="{{ route('home') }}" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-house"></i>
                        <span class="sidebar-link-name">الرئيسية</span>
                    </a>

                    <a href="{{ route('servies-page') }}" class="sidebar-link {{ Request::is('servies-page') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <span class="sidebar-link-name">الخدمات</span>
                    </a>

                    <a href="#packge" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-coins"></i>
                        <span class="sidebar-link-name">الباقات</span>
                    </a>

                    <a href="profile.html" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-heart"></i>
                        <span class="sidebar-link-name">المفضلة</span>
                    </a>

                    <a href="profile.html" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="sidebar-link-name">الطلبات</span>
                    </a>

                    <a href="{{ route('dashboard') }}" class="sidebar-link {{ Request::is('admin/dashboard') ? 'active-link' : ''  }} ">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="sidebar-link-name">وحدة التحكم</span>
                    </a>

                </div>

                <h3 class="sidebar-title">
                    <span>معلوماتنا</span>
                </h3>

                <div class="sidebar-list">
                    <a href="{{ route('about-us') }}" class="sidebar-link {{ Request::is('about-us') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-square-phone"></i>
                        <span class="sidebar-link-name">تواصل</span>
                    </a>
                    <a href="privacy-policy.html" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-lock"></i>
                        <span class="sidebar-link-name">سياسة الخصوصية</span>
                    </a>
                </div>

                <h3 class="sidebar-title">
                    <span>التسجيل</span>
                </h3>

                <div class="sidebar-list">
                    <a href="sign-in.html" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }}">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        <span class="sidebar-link-name"> تسجيل دخول</span>
                    </a>
                    <a href="register.html" class="sidebar-link {{ Request::is('/') ? 'active-link' : ''  }} ">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="sidebar-link-name"> انشاء حساب </span>
                    </a>
                </div>
            </div>

        </div>
    </aside>
    <!-- End -->

    <!--=============== NAVBAR ===============-->
    <nav id="navbar">
        <div class="container position-relative">
            <div class="rowNav">
                <!-- icons -->
                <div class="iconsnav">

                    <!-- user -->
                    <!-- <a class="nav-user d-none d-lg-flex ml-3" href="login.html">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="user">
                    </a> -->
                    <!-- menu -->
                    <!-- <button class="icon toggle-sidebar ml-3 d-lg-none ml-4 p-0">
                        <img src="./{{ asset('frontend/asstesClient') }}/imag/menu.png" alt="">
                    </button> -->
                    <!-- order -->
                    <!-- <a href="profile.html" class="icon mx-3 d-none d-lg-flex">
                        <img src="./{{ asset('frontend/asstesClient') }}/imag/cart.svg" alt="">
                    </a> -->
                    <!-- wish list -->
                    <!-- <a href="profile.html" class="icon mx-3 d-none d-lg-flex">
                        <img src="./{{ asset('frontend/asstesClient') }}/imag/heart.svg" alt="">
                    </a> -->
                    <!-- notifaction -->
                    <!-- <button class="notification-ui_icon icon mx-3" id="notification-button">
                        <i class="fa-regular fa-bell fa-lg"></i>
                        <span class="unread-notification">51</span>
                    </button> -->

                    <!-- </div> -->
                    <!-- toogle Sign in Sign up -->
                    <a class="signIn" href="sign-in.html">تسجيل</a>
                    <a class="signUp mx-3" href="register.html">انشاء حساب</a>
                </div>
                <!-- content nav -->
                <ul class="item-nav d-none d-lg-flex">
                    <li><a class="{{ Request::is('admin/dashboard') ? 'activeNavBar' : ''  }}"  href="{{ route('dashboard') }}">وحدة التحكم</a></li>
                    <li><a  class="{{ Request::is('/') ? 'activeNavBar' : ''  }}" href="#packge">الباقات</a></li>
                    <li><a  class="{{ Request::is('about-us') ? 'activeNavBar' : ''  }}" href="{{ route('about-us') }}">التواصل</a></li>
                    <li><a class="{{ Request::is('servies-page') ? 'activeNavBar' : ''  }}" href="{{ route('servies-page') }}">الخدمات</a></li>
                    <li><a class="{{ Request::is('/') ? 'activeNavBar' : ''  }}" href="{{ route('home') }}">الرئيسية</a></li>
                </ul>
                <!-- logo -->
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('frontend/asstesClient') }}/imag/Masar.png" alt="logo">
                </a>
            </div>
            <div class="dropdown-menu notification-ui_dd" id="notification-modal">
                <div class="notification-ui_dd-header">
                    <h4 class="text-center">اشعارات</h4>
                </div>
                <div class="notification-ui_dd-content">
                    <div class="notification-list notification-list--unread">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list notification-list--unread">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/ltXdE4K.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                    <div class="notification-list">
                        <div class="notification-list_img">
                            <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                        </div>
                        <div class="notification-list_detail">
                            <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                            <p class="text-p"><small>منذ 10 دقائق</small></p>
                        </div>

                    </div>
                </div>
                <div class="notification-ui_dd-footer">
                    <a href="#" class="btn btn-gold  justify-content-center btn-block w-100">View All</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End  -->
    @yield('content')

    @yield('modal')

    <!--=============== FOOTER ===============-->
    <footer class="section footer-section footer-section-03">

        <div class="container">
            <!-- Footer Widget Wrap Start -->
            <div class="footer-widget-wrap">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <a class="logo" href="index.html"><img src="{{ asset('frontend/asstesClient') }}/imag/Masar.png" alt="Logo"></a>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">التواصل</h4>

                            <div class="widget-info">
                                <p class="text-color">نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                                    تعريفى نص تعريفى نص </p>
                                <div class="footer-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">مواعيد العمل</h4>

                            <div class="widget-link">
                                <ul class="link">
                                    <li class="text-color">السبت <a href="#">03:00</a></li>
                                    <li class="text-color">الاحد <a href="#">03:00</a></li>
                                    <li class="text-color">الاثنين <a href="#">03:00</a></li>
                                    <li class="text-color">الثلاثاء <a href="#">03:00</a></li>
                                    <li class="text-color">الاربعاء <a href="#">03:00</a></li>
                                    <li class="text-color">الخميس <a href="#">03:00</a></li>
                                    <li class="text-color">الجمعه <a href="#" class="text-danger">مغلق</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">روابط السريعة</h4>

                            <div class="widget-link">
                                <ul class="link">
                                    <li><a href="index.html">الصفحة الرئيسية</a></li>
                                    <li><a href="service.html">الخدمات</a></li>
                                    <li><a href="privacy-policy.html">سياسة الخصوصية</a></li>
                                    <li><a href="about-us.html">معلوماتنا</a></li>
                                </ul>
                                <ul>
                                    <li class="d-flex mt-3">
                                        <div class="info-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="#" class="px-3">الامارات</a></span>
                                        </div>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <div class="info-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="#" class="px-3">+20 1030804922</a></span>
                                        </div>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <div class="info-icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="info-text">
                                            <span> <a href="#" class="px-3">test@gmail.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget-about">
                            <h4 class="footer-widget-title">مميزاتنا</h4>
                            <p>نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص </p>
                            <a href="service.html" class="btn-gold" style="padding-left: 25px;">
                                <span class="back"><img src="{{ asset('frontend/asstesClient') }}/imag/back.png"></span>
                                حجز الان
                            </a>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                </div>
            </div>
            <!-- Footer Widget Wrap End -->
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright-area">
            <div class="container">
                <div class="footer-copyright-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <!-- Footer Copyright Text Start -->
                            <div class="copyright-text text-center">
                                <p>جميع الحقوق محفوظه لدى الشركة © 2024 </p>
                            </div>
                            <!-- Footer Copyright Text End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- End -->


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!--  font awesome -->
    <script src="{{ asset('frontend/asstesClient') }}/fonts/all.min.js"></script>

    <!-- carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('frontend/asstesClient') }}/js/owl.carousel.min.js"></script>

    <!-- Js Index Java Script -->
    <script src="{{ asset('frontend/asstesClient') }}/js/shared.js"></script>

    @yield('script')

</body>

</html>

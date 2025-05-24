@extends('frontend.include.header_script')

@section('title', 'مقدمة')
  
@section('css')

@endsection


<body class="min-vh-100 d-flex align-items-center">
    <div class="container-fluid intro-bg-container">
        <main class="main-content-container">
            <header class="d-flex justify-content-center mt-5 mt-md-0">
                <img src="{{ asset('images/TrainingP-Word-logo.png') }}" alt="TrainingP Logo" class="intro-logo-img" />
            </header>
            <section class="intro-content-section d-flex flex-column align-items-center justify-content-center">
                <h1 class="intro-slogan mb-3">
                    منصة تربط المدربين والمؤسسات لتصنع
                    <span class="intro-highlighted-text">
                        تأثيراً حقيقياً
                        <img src="{{ asset('images/cots-style.svg') }}" class="cots-style-img" alt="" />
                    </span>
                </h1>
                <p class="intro-description mb-5">
                    توفّر بيئة احترافية تجمع المدربين، المتدربين، المساعدين، والمؤسسات التدريبية
                    في مكان واحد. اختر المسار الذي يناسبك للانطلاق في رحلتك معنا.
                </p>
                <div class="d-flex flex-column flex-sm-row justify-content-start gap-4 mb-5">
                  <button class="intro-btn-custom" aria-label="أنا فرد" onclick="window.location.href='{{ route('wait') }}'">أنا فرد</button>
                    <button class="intro-btn-custom intro-btn-custom-2" aria-label="أنا مؤسسة" onclick="window.location.href='{{ route('wait') }}'">أنا مؤسسة</button>
                </div>
            </section>

            <!-- Decorative and Hero Section -->
            <div class="design-wrapper d-none d-md-block">
                <!-- Text Prompt -->
                <div class="position-absolute text-center" style="z-index:1000;  font-weight:600;    right: 17%;">
                اختر المسار الذي يمثلك لتبدأ رحلتك معنا
              </div>
                <!-- Profile SVG -->
                <div class="circle profile-circle">
                    <img src="{{ asset('images/person1.svg') }}" alt="Person" />
                </div>
                
                <!-- Rectangle with Word -->
                <img src="{{ asset('images/rectanglemainword.png') }}" alt="Main Word" class="rectangle-img">
            </div>
            <!-- Discovery Banner -->
            <div class="position-absolute d-none d-md-block" style="left:10%; top:20%">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <div style="z-index:1000; font-weight:600;">اكتشف فرصك</div>
                    <img src="{{ asset('images/mainpage-rectangle.png') }}" class="mainpage-rectangle-img position-absolute">
                </div>
            </div>
            <!-- Discovery Banner -->
            <div class="position-absolute d-none d-md-block" style="right:10%; bottom:20%">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <div style="z-index:1000; font-weight:600;">سجّل وابدأ رحلة التطوّر </div>
                    <img src="{{ asset('images/rectangle-main-text2.png') }}" class="mainpage-rectangle-img position-absolute">
                </div>
            </div>
            <!-- Discovery Banner -->
            <div class="position-absolute d-none d-md-block" style="right:10%; top:20%">
                <div class="position-relative d-flex align-items-center justify-content-center">
                <div style="top:-150%; right:-70%; position:absolute;z-index:120;">
                    <img src="{{ asset('images/person2.svg') }}" alt="Person" />
                </div>
                    <div style="z-index:100; font-weight:600;">ابدأ من هنا... </div>
                    <img src="{{ asset('images/rectangle-main-text2.png') }}" class="mainpage-rectangle-img2 position-absolute">
                </div>
            </div>
            <!-- Decorative Circles (left side) -->
            <div class="position-absolute d-none d-md-block" style="left:-60px">
                <div class="bg-wrapper">
                    <div class="circle circle-lg"></div>
                    <div class="circle circle-md"></div>
                    <div class="circle circle-sm"></div>
                </div>
            </div>
            <!-- Dots & Circle Cluster -->
            <div class="position-absolute d-none d-md-block" style="left:7%; top:40%">
                <div class="d-flex position-relative" style="width:100px">
                    <!-- Big Green Circle -->
                    <div class="position-absolute" style="width:35px; height:35px; background-color:#00AF6C; border-radius:50%; left:60px; top:10%"></div>
                    <!-- Dotted Grid -->
                    <div class="dot-grid">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="dot-row">
                                @for ($j = 0; $j < 6; $j++)
                                    <div class="dot"></div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <!-- Dots & Circle Cluster -->
            <div class="position-absolute d-none d-md-block" style="right:0%; bottom:30%">
                <div class="d-flex position-relative" style="width:100px">
                    <!-- Big Green Circle -->
                    <div class="position-absolute" style="width:20px; height:20px; background-color:var(--color-warning); border-radius:50%; right:55px; top:30%"></div>
                    <!-- Dotted Grid -->
                    <div class="dot-grid2">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="dot-row2">
                                @for ($j = 0; $j < 6; $j++)
                                    <div class="dot2"></div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="circle-container position-absolute d-none d-md-block" style="left:20%; top:5%">
  <div class="outer-circle">
    <div class="inner-circle"style="background-color:var(--color-danger);"></div>
  </div>
</div>
<div class="circle-container position-absolute d-none d-md-block" style="bottom:5%; left:8%">
  <div class="outer-circle">
    <div class="inner-circle"style="background-color:var(--color-success);"></div>
  </div>
</div>
<div class="position-absolute d-none d-md-block" style="width:50px; height:50px; background-color:var(--color-danger); border-radius:50%; right:-2%; top:10%"></div>
        </main>
    </div>


@include('frontend.include.footer_script')



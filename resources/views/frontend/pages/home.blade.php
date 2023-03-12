@extends('frontend.layouts.app')

@section('content')
    <!--****************** home section*************** -->
    <div class="section-home text-center">
        <img src="{{ asset('frontend/assets/images/1.jpg') }}" alt="">
        <h1 class="home-title">
            مرحبا بك في موقع البحث العلمي
        </h1>
    </div>

    <!--****************** rolling section*************** -->
    <div class="section-rolling text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <a href="">
                        <h2 class="col-title">
                            متداول
                        </h2>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="item item-rolling mb-4">
                                    <div class="badge badge-science">
                                        علوم إنسانية
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                        <p class="item-tittle-description">
                                            حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام ببشرتك مهما
                                            كان نوعها في فصل الصيف
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="item item-rolling mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle item-tittle-small">
                                            كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>

                                <div class="item item-rolling mb-4">
                                    <div class="badge badge-psychology">
                                        علم النفس
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle item-tittle-small">
                                            كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <h2 class="col-title col-tittle-hover">
                        هذا الأسبوع
                    </h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ asset('frontend/assets/images/05.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <ul class="second-tittle-list list-unstyled">
                                <li class="second-tittle">
                                    <a href="" class="link"> علوم
                                    </a>
                                </li>
                                <li class="second-tittle">
                                    <a href="" class="link"> علوم
                                    </a>
                                </li>
                                <li class="second-tittle">
                                    <a href="" class="link"> رياضيات
                                    </a>
                                </li>
                                <li class="second-tittle">
                                    <a href="" class="link"> علوم إنسانية
                                    </a>
                                </li>
                                <li class="second-tittle">
                                    <a href="" class="link"> رياضيات
                                    </a>
                                </li>
                                <li class="second-tittle">
                                    <a href="" class="link"> علوم
                                    </a>
                                </li>
                            </ul>

                            <span class="read-more">
                                <a href="" class="more hover-underline-animation">
                                    اقرأ المزيد
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--****************** new section*************** -->
    <div class="section-new text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">

                    <div class="first-tittle d-flex justify-content-between">
                        <h2 class="col-title">
                            الأحدث
                        </h2>
                        <a href="" class="view-more">
                            الكل
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item item-latest mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-science">
                                        علوم إنسانية
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-psychology">
                                        علم النفس
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item item-latest mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-psychology">
                                        علم النفس
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-science">
                                        علوم إنسانية
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12">
                    <div class="news-type">
                        <ul class="type-list list-unstyled d-flex gap-2">
                            <li class="list-item"><a href="" class="link list-item-link">
                                    تريند
                                </a></li>
                            <li class="list-item"><a href="" class="link list-item-link">
                                    فيديو
                                </a></li>

                            <li class="list-item"><a href="" class="link list-item-link">
                                    الأحدث
                                </a></li>
                        </ul>
                        <div class="list-description">
                            <a href="">
                                <div class="list-item-description d-flex gap-2">
                                    <span class="number">#1</span>
                                    <h3 class="item-tittle">
                                        حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                    </h3>
                                </div>
                            </a>
                            <a href="">
                                <div class="list-item-description d-flex gap-2">
                                    <span class="number">#1</span>
                                    <h3 class="item-tittle">
                                        حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                    </h3>
                                </div>
                            </a>
                            <a href="">
                                <div class="list-item-description d-flex gap-2">
                                    <span class="number">#1</span>
                                    <h3 class="item-tittle">
                                        حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                    </h3>
                                </div>
                            </a>
                            <a href="">
                                <div class="list-item-description d-flex gap-2">
                                    <span class="number">#1</span>
                                    <h3 class="item-tittle">
                                        حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--****************** health section*************** -->
    <div class="section-health text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <div class="first-tittle d-flex justify-content-between">
                        <h2 class="col-title">
                            صحة
                        </h2>
                        <a href="" class="view-more">
                            الكل
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item item-latest mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a href="">
                                <div class="item mb-4">
                                    <div class="badge badge-health">
                                        صحة
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                    <div class="item-description">
                                        <h3 class="item-tittle">
                                            كيفية العناية بالبشرة كيفية العناية بالبشرة
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="first-tittle d-flex justify-content-between">
                                <h2 class="col-title">
                                    علوم إنسانية
                                </h2>
                                <a href="" class="view-more">
                                    الكل
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <a href="">
                                        <div class="item mb-4">
                                            <div class="badge badge-science">
                                                علوم إنسانية
                                            </div>
                                            <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                            <div class="item-description">
                                                <h3 class="item-tittle">
                                                    كيفية العناية بالبشرة كيفية العناية بالبشرة
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <a href="">
                                        <div class="item mb-4">
                                            <div class="badge badge-science">
                                                علوم إنسانية
                                            </div>
                                            <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                            <div class="item-description">
                                                <h3 class="item-tittle">
                                                    كيفية العناية بالبشرة كيفية العناية بالبشرة
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <a href="">
                                        <div class="item mb-4">
                                            <div class="badge badge-science">
                                                علوم إنسانية
                                            </div>
                                            <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                                            <div class="item-description">
                                                <h3 class="item-tittle">
                                                    كيفية العناية بالبشرة كيفية العناية بالبشرة
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12">
                    <h2 class="col-title col-tittle-hover">
                        التصنيفات
                    </h2>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>
                            اختر من أنواع التصنيفات
                        </option>
                        <option class="select" value="1">
                            تغذية
                        </option>
                        <option class="select" value="2">
                            صحة
                        </option>
                        <option class="select" value="3">
                            فن الطيخ
                        </option>
                        <option class="select" value="4">
                            علم النفس
                        </option>
                    </select>
                    <div class="categorty">
                        <h3 class="categorty-tittle">
                            علوم انسانية
                        </h3>
                        <ul class="category-list list-unstyled">
                            <li class="category-item"><a href="" class="list-item-link">
                                    تريند
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    فيديو
                                </a></li>

                            <li class="category-item"><a href="" class="list-item-link">
                                    الأحدث
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    تريند
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    فيديو
                                </a></li>

                            <li class="category-item"><a href="" class="list-item-link">
                                    الأحدث
                                </a></li>
                        </ul>
                    </div>
                    <div class="categorty">
                        <h3 class="categorty-tittle">
                            علم النفس
                        </h3>
                        <ul class="category-list list-unstyled">
                            <li class="category-item"><a href="" class="list-item-link">
                                    تريند
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    تريند
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    فيديو
                                </a></li>

                            <li class="category-item"><a href="" class="list-item-link">
                                    الأحدث
                                </a></li>
                        </ul>
                    </div>
                    <div class="categorty">
                        <h3 class="categorty-tittle">
                            علم النفس
                        </h3>
                        <ul class="category-list list-unstyled">
                            <li class="category-item"><a href="" class="list-item-link">
                                    تريند
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    تريند
                                </a></li>
                            <li class="category-item"><a href="" class="list-item-link">
                                    فيديو
                                </a></li>
                        </ul>
                    </div>

                    <span class="read-more">
                        <a href="" class="more hover-underline-animation">
                            عرض الكل
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--****************** Mix section*************** -->
    <div class="section-mix text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <div class="first-tittle d-flex justify-content-between">
                        <h2 class="col-title">
                            منوعات
                        </h2>
                        <a href="" class="view-more">
                            الكل
                        </a>
                    </div>

                    <a href="">
                        <div class="item mb-4 d-flex justify-content-start gap-3">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                            </div>
                            <div class="item-mix-description">
                                <h6 class="mix-tittle">
                                    علم النفس
                                </h6>
                                <p class="mix-description">
                                    حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                </p>
                                <span class="date">
                                    December /  22 / 2016
                                </span>
                            </div>
                        </div>

                        <div class="item mb-4 d-flex justify-content-start gap-3">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                            </div>
                            <div class="item-mix-description">
                                <h6 class="mix-tittle">
                                    علوم إنسانية
                                </h6>
                                <p class="mix-description">
                                    حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                </p>
                                <span class="date">
                                    December /  22 / 2016
                                </span>
                            </div>
                        </div>

                        <div class="item mb-4 d-flex justify-content-start gap-3">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                            </div>
                            <div class="item-mix-description">
                                <h6 class="mix-tittle">
                                    صحة
                                </h6>
                                <p class="mix-description">
                                    حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                </p>
                                <span class="date">
                                    December /  22 / 2016
                                </span>
                            </div>
                        </div>

                        <div class="item mb-4 d-flex justify-content-start gap-3">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/4.jpg') }}" alt="">
                            </div>
                            <div class="item-mix-description">
                                <h6 class="mix-tittle">
                                    علوم إنسانية
                                </h6>
                                <p class="mix-description">
                                    حافظي على جمالك وتعرفي على أفضل وأكثر الطرق فاعلية للعناية والاهتمام
                                </p>
                                <span class="date">
                                    December /  22 / 2016
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <h2 class="col-title col-tittle-hover">
                        Newsletter
                    </h2>

                    <div class="aside-body">
                        <form class="newsletter">
                            <div class="icon-tittle">
                                <i class="fa fa-envelope-o icon" aria-hidden="true"></i>
                                <h1 class="newsletter-tittle">Newsletter</h1>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control email" placeholder="Your mail">
                                <div class="input-group-btn">
                                    <button class="send btn">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="email-description">By subscribing you will receive new articles in your email.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

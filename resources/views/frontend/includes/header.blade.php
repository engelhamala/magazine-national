<header>
    {{-- <div class="spinner">
        <div class="loader"></div>
    </div> --}}

    <div class="topbar">
        <div class="container">
            <div class="top-bar d-flex justify-content-between">
                <a class="logo" href="{{ '/' }}">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                </a>
                <form class="search d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <a class="btn icon-search" type="submit">
                        <i class="fa fa-search"></i>
                    </a>
                </form>
                <div class="icon-log d-flex gap-3">
                    <div class="login">
                        <a href="">login</a>
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <div class="register">
                        <a href="">register</a>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <button class="btn navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRightScrolling" aria-controls="offcanvasRightScrolling">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightScrolling"
                aria-labelledby="offcanvasRightScrollingLabel">
                <div class="offcanvas-header">
                    <a class="logo" href="{{ '/' }}">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                    </a>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="icon-log d-flex gap-3">
                        <div class="login">
                            <a href="">login</a>
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <div class="register">
                            <a href="">register</a>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                    <form class="search d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <a class="btn icon-search" type="submit">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>

                    <div class="toggle-menu">
                        <ul class="nav-list list-unstyled">
                            <li class="list-item">
                                <a class="link-item" href="">
                                    الرئيسية
                                </a>
                            </li>
                            <li class="list-item list-dropdown-menu">
                                <a class="link-item" href="#">
                                    التصنيفات
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="menu-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12">
                                                <h2 class="menu-title">Column 1</h2>
                                                <ul class="vertical-menu">
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 1</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 2</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 3</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 4</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 5</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <h2 class="menu-title">Column 2</h2>
                                                <ul class="vertical-menu">
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 6</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 7</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 8</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 9</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 10</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <h2 class="menu-title">Column 3</h2>
                                                <ul class="vertical-menu">
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 11</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 12</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 13</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 14</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 15</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <h2 class="menu-title">Column 4</h2>
                                                <ul class="vertical-menu">
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 16</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 17</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 18</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 19</a></li>
                                                    <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                            href="#">Example 20</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item list-dropdown-menu dropdown">
                                <a class="link-item" href="#">
                                    تصفح المواضيع
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="menu-inner">
                                        <ul class="vertical-menu list-unstyled">
                                            <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                    href="#">Example 1</a></li>
                                            <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                    href="#">Example 2</a></li>
                                            <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                    href="#">Example 3</a></li>
                                            <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                    href="#">Example 4</a></li>
                                            <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                    href="#">Example 5</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <li class="list-item">
                                <a class="link-item" href="">
                                    الصفحات
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link-item" href="">
                                    حول مجلتنا
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link-item" href="">
                                    اتصل بنا
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu">
                    <ul class="nav-list list-unstyled d-flex justify-content-center gap-5">
                        <li class="list-item">
                            <a class="link-item" href="">
                                الرئيسية
                            </a>
                        </li>
                        <li class="list-item list-dropdown-menu">
                            <a class="link-item" href="#">
                                التصنيفات
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="menu-inner">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h2 class="menu-title">Column 1</h2>
                                            <ul class="vertical-menu">
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 1</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 2</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 3</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 4</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 5</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="menu-title">Column 2</h2>
                                            <ul class="vertical-menu">
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 6</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 7</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 8</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 9</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 10</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="menu-title">Column 3</h2>
                                            <ul class="vertical-menu">
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 11</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 12</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 13</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 14</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="menu-title">Column 4</h2>
                                            <ul class="vertical-menu">
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 16</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 17</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 18</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 19</a></li>
                                                <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                        href="#">Example 20</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-item list-dropdown-menu dropdown">
                            <a class="link-item" href="#">
                                تصفح المواضيع
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="menu-inner">
                                    <ul class="vertical-menu list-unstyled">
                                        <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                href="#">Example 1</a></li>
                                        <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                href="#">Example 2</a></li>
                                        <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                href="#">Example 3</a></li>
                                        <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                href="#">Example 4</a></li>
                                        <li class="list-item-dropmenu"><a class="link-item-dropmenu"
                                                href="#">Example 5</a></li>
                                    </ul>
                                </div>
                        </li>
                        <li class="list-item">
                            <a class="link-item" href="">
                                الصفحات
                            </a>
                        </li>
                        <li class="list-item">
                            <a class="link-item" href="">
                                حول مجلتنا
                            </a>
                        </li>
                        <li class="list-item">
                            <a class="link-item" href="">
                                اتصل بنا
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </nav>
</header>

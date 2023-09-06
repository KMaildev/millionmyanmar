<header class="main-header header-style-one">
    <div class="header-top">
        <div class="inner-container">
            <div class="top-left">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" title="Congrow">
                    </a>
                </div>
            </div>

            <div class="top-right">
                <ul class="header-contact-list">
                    <li>
                        <span class="icon lnr-icon-phone-handset"></span>
                        <span class="title">Requesting A Call:</span>
                        <div class="text"><a href="tel:+92880098670">(629) 555-0129</a></div>
                    </li>
                    <li>
                        <i class="icon lnr-icon-map-marker"></i>
                        <span class="title">6391 Elgin St. Celina, Delaware 10299</span>
                        <div class="text">Kentucky</div>
                    </li>
                    <li>
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Email Address:</span>
                        <div class="text"><a href="tel:+92880098670">info@example.com</a></div>
                    </li>
                    <li>
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Sunday - Friday:</span>
                        <div class="text">9 am - 8 pm</div>
                    </li>
                </ul>
            </div>

            <!-- Mobile Nav toggler -->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
        </div>
    </div>

    <div class="header-lower">
        <div class="main-box">
            <!-- Toggle Hidden Bar -->
            <button class="ui-btn toggle-hidden-bar">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">

                        <li class="current has-mega-menu">
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                About Us
                            </a>
                            <ul>
                                <li><a href="page-about.html">About</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                                <li><a href="page-faq.html">Faq</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="page-projects.html">Projects Grid</a></li>
                                        <li><a href="page-project-details.html">Projects Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-testimonial.html">Testimonials</a></li>
                                <li><a href="page-404.html">404</a></li>
                                <li class="dropdown"><a href="#">Team</a>
                                    <ul>
                                        <li><a href="page-team.html">Team List</a></li>
                                        <li><a href="page-team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop-products.html">Products</a></li>
                                        <li><a href="shop-products-sidebar.html">Products with Sidebar</a></li>
                                        <li><a href="shop-product-details.html">Product Details</a></li>
                                        <li><a href="shop-cart.html">Cart</a></li>
                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="current has-mega-menu dropdown">
                            <a href="javascript::void(0)">
                                Businesses
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-bar row">
                                    <div class="column col-lg-6">
                                        <ul>
                                            <li>
                                                <a href="{{ route('travel.index') }}">
                                                    <img src="{{ asset('data/business/passport.png') }}" alt=""
                                                        style="width: 40px; height: 40px;">
                                                    Travels & Tours
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6">
                                        <ul>
                                            <li>
                                                <a href="{{ route('real_estate.index') }}">
                                                    <img src="{{ asset('data/business/mortgage.png') }}" alt=""
                                                        style="width: 40px; height: 40px;">
                                                    Real Estate
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="column col-lg-6">
                                        <ul>
                                            <li>
                                                <a href="{{ route('employment.index') }}">
                                                    <img src="{{ asset('data/business/manager.png') }}" alt=""
                                                        style="width: 40px; height: 40px;">
                                                    Employment Agency
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6">
                                        <ul>
                                            <li>
                                                <a href="{{ route('entertainment.index') }}">
                                                    <img src="{{ asset('data/business/tv.png') }}" alt=""
                                                        style="width: 40px; height: 40px;">
                                                    Entertainment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                Sustainability & CSR
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Sustainability Direction
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Responsible Business Practices
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                Media Center
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('news.index') }}">
                                        Latest News
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('activities.index') }}">
                                        Gallery & Activities
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('corporateprofile.index') }}">
                                        Corporate Profile
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="outer-box">
                    <a href="page-contact.html" class="theme-btn btn-style-one">
                        <span class="btn-title">
                            Get a quote
                            <i class="fa fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo-2.png') }}"
                            alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>

            <ul class="contact-list-one">
                <li>
                    <i class="icon lnr-icon-phone-handset"></i>
                    <span class="title">Call Now</span>
                    <div class="text"><a href="tel:+92880098670">+92 (8800) - 98670</a></div>
                </li>
                <li>
                    <i class="icon lnr-icon-envelope1"></i>
                    <span class="title">Send Email</span>
                    <div class="text"><a href="mailto:help@company.com">help@company.com</a></div>
                </li>
                <li>
                    <i class="icon lnr-icon-map-marker"></i>
                    <span class="title">Address</span>
                    <div class="text">66 Broklyant, New York India 3269</div>
                </li>
            </ul>

            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="https://kodesolution.com/html/2023/congrow-html/index.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..."
                        required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="index.html" title="">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>
<!--End Main Header -->

<!-- Hidden bar back drop -->
<div class="hidden-bar-back-drop"></div>

<!-- Hidden Bar -->
<section class="hidden-bar">
    <div class="inner-box">
        <div class="upper-box">
            <div class="nav-logo">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo-2.png') }}" alt="" title=""></a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>

        <div class="text-box">
            <h4 class="title">Transforming your ideas into digital reality</h4>
            <div class="text">Sed ut perspiciatis unde omnis natus error voluptatem santium doloremque
                laudantium, totam rem aperiam, eaque ipsa quae ab nllo inventore veritatis quasi architecto
                beatae vitae</div>
        </div>

        <ul class="contact-list-one">
            <li>
                <i class="icon lnr-icon-phone-handset"></i>
                <span class="title">Call Now</span>
                <div class="text"><a href="tel:+92880098670">+92 (8800) - 98670</a></div>
            </li>
            <li>
                <i class="icon lnr-icon-envelope1"></i>
                <span class="title">Send Email</span>
                <div class="text"><a href="mailto:help@company.com">help@company.com</a></div>
            </li>
            <li>
                <i class="icon lnr-icon-map-marker"></i>
                <span class="title">Address</span>
                <div class="text">66 Broklyant, New York India 3269</div>
            </li>
        </ul>

        <ul class="social-links">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</section>
<!--End Hidden Bar -->

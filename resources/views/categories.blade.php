@extends('layouts.guest')

@section('content')
    <section class="hero-area2 hero-area3 bgimage">
        <div class="bg_image_holder">
            <img src="img/hero-image01.png" alt="background-image">
        </div>
        <div class="hero-content content_above">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>Many options to get the best product for you</h1>
                            </div><!-- end .hero__btn-area-->
                            <div class="search-area">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="search_box2">
                                            <form action="#">
                                                <input type="text" class="text_field"
                                                    placeholder="Search your products...">
                                                <button type="submit" class="search-btn btn--lg btn-primary">Search
                                                    Now</button>
                                            </form>
                                        </div><!-- end .search_box -->
                                    </div>
                                </div>
                            </div>
                            <!--start .search-area -->
                        </div><!-- end .col-md-12 -->
                    </div>
                </div>
            </div><!-- end .contact_wrapper -->
        </div><!-- end hero-content -->
    </section><!-- ends: .hero-area -->
    <div class="filter-area product-filter-area filter-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 Items per page</option>
                                    <option value="15">15 Items per page</option>
                                    <option value="25">25 Items per page</option>
                                </select>
                                <span class="icon-arrow-down"></span>
                            </div>
                        </div><!-- end .filter__option -->
                    </div><!-- end .filter-bar -->
                </div><!-- end .col-md-12 -->
            </div><!-- end filter-bar -->
        </div>
    </div><!-- end .filter-area -->
    <section class="product-grid p-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12 order-lg-0 order-md-1 order-sm-1 order-1">
                    <aside class="sidebar product--sidebar">
                        <div class="sidebar-card card--category">
                            <a class="card-title" href="#collapse1" data-toggle="collapse" href="#collapse1" role="button"
                                aria-expanded="false" aria-controls="collapse1">
                                <h5>Categories
                                    <span class="icon-arrow-down"></span>
                                </h5>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse1">
                                <ul class="card-content">
                                    <li>
                                        <a href="#">
                                            Wordpress
                                            <span class="item-count">35</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            HTML Template
                                            <span class="item-count">34</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Components
                                            <span class="item-count">78</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Joomla Template
                                            <span class="item-count">26</span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end .collapsible_content -->
                        </div><!-- end .sidebar-card -->
                        <div class="sidebar-card card--filter">
                            <a class="card-title" href="#collapse2" data-toggle="collapse" href="#collapse2" role="button"
                                aria-expanded="false" aria-controls="collapse2">
                                <h5>Filter Products
                                    <span class="icon-arrow-down"></span>
                                </h5>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse2">
                                <ul class="card-content">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt1" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt1">Trending Products</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt2" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt2">Popular Products</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt3" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt3">New Products</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt4" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt4">Best Seller</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt5" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt5">Best Rating</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt6" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt6">Free Support</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="opt7" class="custom-control-input"
                                                name="filter_opt">
                                            <label class="custom-control-label" for="opt7">On Sale</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end .sidebar-card -->
                        <div class="sidebar-card card--slider">
                            <a class="card-title" href="#collapse3" data-toggle="collapse" href="#collapse3"
                                role="button" aria-expanded="false" aria-controls="collapse3">
                                <h5>Filter Products
                                    <span class="icon-arrow-down"></span>
                                </h5>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse3">
                                <div class="card-content">
                                    <div class="range-slider price-range"></div>
                                    <div class="price-ranges">
                                        <span class="from rounded">$30</span>
                                        <span class="to rounded">$300</span>
                                    </div>
                                    <div class="search-update">
                                        <a href="" class="btn btn-sm btn-primary">Search Update</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end .sidebar-card -->
                        <div class="sidebar-card card--category card--date-range">
                            <a class="card-title" href="#collapse4" data-toggle="collapse" href="#collapse4"
                                role="button" aria-expanded="false" aria-controls="collapse4">
                                <h5>Date Range
                                    <span class="icon-arrow-down"></span>
                                </h5>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse4">
                                <ul class="card-content">
                                    <li>
                                        <a href="#">
                                            Last Week
                                            <span class="item-count">35</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Last Month
                                            <span class="item-count"> 45</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Last 6 Month
                                            <span class="item-count">13</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Last Year
                                            <span class="item-count">08</span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end .collapsible_content -->
                        </div><!-- end .sidebar-card -->
                    </aside><!-- end aside -->
                </div><!-- end .col-md-3 -->
                <div class="col-xl-9 col-lg-8 col-md-12 order-lg-1 order-md-0 order-sm-0 order-0 product-list">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            @include('partials.product')
                        </div><!-- Ends: .col-md-4 -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            @include('partials.product')
                        </div><!-- Ends: .col-md-4 -->

                    </div>
                    <!-- Start Pagination -->
                    @include('partials.pagination')
                </div>
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section><!-- ends: .product-grid -->
    <section class="cta2 bgimage">
        <div class="bg_image_holder">
            <img src="img/cta-bg.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text">
                            <h2>Ready To Join Our Marketplace!</h2>
                            <p>Grow your marketing and be happy with your online business</p>
                        </div>
                        <div class="cta-btn">
                            <a href="" class="btn btn--md btn-primary">Join Us Today</a>
                        </div>
                    </div>
                </div><!-- ends: .col-md-12 -->
            </div>
        </div>
    </section><!-- ends: .cta2 -->
@endsection

extends('layouts.guest')

@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-contents">
                        <h2 class="page-title">Get the best product in the best way</h2>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">Show Product details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end .col-md-12 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
    </section><!-- ends: .breadcrumb-area -->
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="item-preview">
                        <img src="img/single2.jpg" alt="" class="img-fluid">
                        <div class="item-preview--excerpt">
                            <div class="item-preview--action">
                                <div class="action-btns m-n15">
                                    <a href="#" class="btn btn--lg btn-primary m-15">Live Preview</a>
                                    <a href="#" class="btn btn--lg btn--icon btn-outline-primary m-15">
                                        <span class="lnr icon-heart"></span>Add To Favorites</a>
                                </div>
                            </div><!-- ends: .item-preview--action -->
                            <div class="item-preview--activity">
                                <div class="activity-single">
                                    <p>
                                        <span class="icon-basket"></span> Total Sales
                                    </p>
                                    <p>2451</p>
                                </div>
                                <div class="activity-single">
                                    <p>
                                        <span class="icon-star"></span> Reviews
                                    </p>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </li>
                                        <li>(35)</li>
                                    </ul>
                                </div>
                                <div class="activity-single">
                                    <p>
                                        <span class="icon-heart"></span>Favorities
                                    </p>
                                    <p>425</p>
                                </div>
                            </div><!-- Ends: .item-preview--activity -->
                        </div>
                    </div><!-- ends: .item-preview-->
                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs" role="tablist">
                                <li>
                                    <a href="#product-details" class="active" id="tab1" aria-controls="product-details"
                                        role="tab" data-toggle="tab" aria-selected="true">
                                        <span class="icon icon-docs"></span> Item Details</a>
                                </li>
                                <li>
                                    <a href="#product-comment" id="tab2" aria-controls="product-comment" role="tab"
                                        data-toggle="tab">
                                        <span class="icon icon-bubbles"></span> Comments </a>
                                </li>
                                <li>
                                    <a href="#product-review" id="tab3" aria-controls="product-review" role="tab"
                                        data-toggle="tab">
                                        <span class="icon icon-star"></span> Reviews
                                        <span>(35)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#product-support" id="tab4" aria-controls="product-support" role="tab"
                                        data-toggle="tab">
                                        <span class="icon icon-support"></span> Support</a>
                                </li>
                                <li>
                                    <a href="#product-faq" id="tab5" aria-controls="product-faq" role="tab"
                                        data-toggle="tab">
                                        <span class="icon icon-question"></span> item FAQ</a>
                                </li>
                            </ul>
                        </div><!-- ends: .item-navigation -->

                    </div><!-- ends: .item-info -->
                    @include('partials.productdetails')
                </div><!-- ends: .col-md-8 -->
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing card--pricing2">
                            <div class="price border-none ">
                                <h1>
                                    <sup>$</sup>
                                    <span>60.00</span>
                                </h1>
                            </div><!-- ends: .price -->

                            <div class="purchase-button">
                                <a href="#" class="btn btn--lg btn-outline-primary">Purchase Now</a>
                                <a href="#" class="btn btn--lg cart-btn btn-secondary">
                                    <span class="lnr icon-basket"></span> Add To Cart
                                </a>
                            </div><!-- end .purchase-button -->
                        </div><!-- end .sidebar--card -->
                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>
                            <ul class="infos">
                                <li>
                                    <p class="data-label">Released</p>
                                    <p class="info">16 June 2015</p>
                                </li>
                                <li>
                                    <p class="data-label">Updated</p>
                                    <p class="info">28 July 2016 </p>
                                </li>
                                <li>
                                    <p class="data-label">Version</p>
                                    <p class="info">1.2</p>
                                </li>
                                <li>
                                    <p class="data-label">Category</p>
                                    <p class="info">Corporate & Business</p>
                                </li>
                                <li>
                                    <p class="data-label">Layout</p>
                                    <p class="info">Responsive</p>
                                </li>
                                <li>
                                    <p class="data-label">Retina Ready</p>
                                    <p class="info">No</p>
                                </li>
                                <li>
                                    <p class="data-label">Files Included</p>
                                    <p class="info">Html, CSS, JavaScript</p>
                                </li>
                                <li>
                                    <p class="data-label">Browser</p>
                                    <p class="info">IE10, IE11, Firefox, Safari, Opera, Chrome5</p>
                                </li>
                                <li>
                                    <p class="data-label">Bootstrap</p>
                                    <p class="info">Bootstrap 4</p>
                                </li>
                                <li>
                                    <p class="data-label">Tags</p>
                                    <p class="info">
                                        <a href="#">business</a>,
                                        <a href="#">template</a>,
                                        <a href="#">onepage</a>,
                                        <a href="#">creative</a>,
                                        <a href="#">responsive</a>,
                                        <a href="#">corporate</a>,
                                        <a href="#">Bootstrap3</a>,
                                        <a href="#">html5</a>
                                    </p>
                                </li>
                            </ul><!-- ends: .infos -->
                        </div><!-- ends: .card--product-infos -->
                        <div class="sidebar-card social-share-card">
                            <p>Social Share:</p>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- Ends: .social-share-card -->
                        <div class="author-card sidebar-card">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>
                            <div class="author-infos">
                                <div class="author-top">
                                    <div class="author_avatar">
                                        <img src="img/author-avatar.jpg" alt="Presenting the broken author avatar :D">
                                    </div>
                                    <div class="author">
                                        <h5>AazzTech</h5>
                                        <p>Joined: 08 April 2016</p>
                                    </div>
                                </div><!-- ends: .author-top -->
                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-google-plus"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- ends: .social -->
                                <div class="author-btn">
                                    <a href="#" class="btn btn--sm btn-primary">View Profile</a>
                                    <a href="#" class="btn btn--sm btn-secondary">Send Message</a>
                                </div><!-- ends: .author-btn -->
                            </div><!-- ends: .author-infos -->
                        </div><!-- ends: .author-card -->
                    </aside><!-- ends: .sidebar -->
                </div><!-- ends: .col-md-4 -->
            </div><!-- ends: .row -->
        </div><!-- ends: .container -->
    </section><!-- ends: .single-product-desc -->

    <section class="more_product_area p-top-105 p-bottom-75">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>More Items by <span>Aazztech</span>
                        </h2>
                    </div>
                </div><!-- ends: .col-md-12 -->
                <div class="col-lg-4 col-md-6">
                    @include('partials.product')
                </div><!-- ends: .col-lg-4 -->

            </div>
        </div>
    </section><!-- ends: .more_product_area -->
@endsection

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
                                <h1>7,685 Premium Templates & Themes</h1>
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
    </section>
    @include('partials.searchfilter')
    <section class="product-grid p-bottom-100">
        <div class="container">
            <div class="row">
                <!-- Start .product-list -->
                <div class="col-md-12 product-list">
                    <div class="row">
                        {{-- @foreach ($products as $product) --}}
                        <div class="col-lg-4 col-md-6">
                            @include('partials.product')
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    {{-- start pagination --}}
                    @include('partials.pagination')
                </div>
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section><!-- ends: .product-grid -->
    <section class="cta2 bgimage">
        <div class="bg_image_holder">
            <img src="/img copy/cta-bg.png" alt="">
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

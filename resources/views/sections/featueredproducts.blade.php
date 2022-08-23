<section class="featured-area section--padding bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Featured Products</h1>
                    <p>Pellentesque facilisis the ullamcorper sapien interdum magna pellentesque kequis. Phasellus
                        condimentum eleifend kerat.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="product-slide-area owl-carousel">

                    {{-- here we need for loop to display products --}}

                    @include('partials.product')
                </div>
            </div>
            <div class="col-md-12">
                <div class="more-item-btn">
                    <a href="" class="btn btn--lg btn-secondary">More Featured Items</a>
                </div>
            </div>

        </div>
    </div>
</section><!-- ends: .featured-area -->

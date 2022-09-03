 <section class="latest-product section--padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-title">
                     <h1>Newest Products</h1>
                     <p>Pellentesque facilisis the ullamcorper sapien interdum magna pellentesque kequis. Phasellus
                         condimentum eleifend kerat.</p>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="tab-content" id="lp-tab-content">
                     <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-one">
                         <div class="row">
                             <div class="col-lg-4 col-md-6">
                                 @include('partials.product')
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-12">
                 <div class="text-center m-top-20">
                     <a href="{{ route('products') }}" class="btn btn--lg btn-primary">All New Products</a>
                 </div>
             </div>

             <!-- Ends: .product-list -->
         </div>
     </div>
     </div>
 </section>

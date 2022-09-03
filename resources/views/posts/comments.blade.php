@extends('layouts.guest')

@section('content')
    <section class="blog_area section--padding">

        <div class="row">
            <div class="col-lg-2 col-md-12"></div>
            <div class="col-lg-8 col-md-12">
                @include('partials.comment')

            </div><!-- ends: .row -->
            <div class="col-lg-2 col-md-12"></div>

        </div><!-- ends: .container -->

    </section>
@endsection

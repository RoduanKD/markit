@extends('layouts.guest')

@section('content')
    <section class="blog_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="single_blog blog--default">
                        <figure>
                            <img src="img/bb1.jpg" alt="Blog image">
                            <figcaption>
                                <div class="blog__content">
                                    <a href="#" class="blog__title">
                                        <h3>Top Web Design Trends You Must Know in 2017</h3>
                                    </a>
                                    <div class="blog__meta">
                                        <div class="author">
                                            <span class="icon-user"></span>
                                            <p>by
                                                <a href="#">AazzTech</a>
                                            </p>
                                        </div>
                                        <div class="date_time">
                                            <span class="icon-clock"></span>
                                            <p>24 Feb 2019</p>
                                        </div>
                                        <div class="comment_view">
                                            <p class="comment">
                                                <span class="icon-bubble"></span>45 comments
                                            </p>
                                            <p class="view">
                                                <span class="icon-like"></span>345 likes
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_text">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                        mattis, leo quam aliquet congue. incididunt ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat sunt in culpa qui
                                        officia
                                        sunt in culpa qui officia.</p>

                                </div>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .single_blog -->
                    <div class="author_info">
                        <div class="author__img">
                            <img src="img/authi.jpg" alt="Auth Image">
                        </div>
                        <div class="author__info">
                            <h4>About Admin</h4>
                            <p>Passages and more recently with desktop publishing software like Aldus the PageMaker they
                                including
                                versions of Lorem Ipsum.</p>
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
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- ends: .author_info -->

                    <div class="comment_area comment--form">
                        <!-- start reply_form -->
                        <div class="comment__title">
                            <h4>Leave A Comment</h4>
                        </div>
                        <div class="commnet_form_wrapper">
                            <!-- start form -->
                            <form class="cmnt_reply_form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="input_field" name="name" placeholder="Your text here..." rows="10" cols="80"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn--md btn-primary" name="btn">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div><!-- ends: .comment_form_wrapper -->
                    </div><!-- ends: .comment_area_wrapper -->
                </div><!-- ends: .row -->
                <div class="col-lg-2 col-md-12"></div>

            </div><!-- ends: .container -->
    </section><!-- ends: .blog_area -->
@endsection

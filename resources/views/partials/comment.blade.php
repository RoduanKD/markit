<div class="thread">
    <ul class="media-list thread-list">
        <li class="single-thread">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                    </a>
                </div>
                <div class="media-body">
                    <div>
                        <div class="media-heading">
                            <a href="author.html">
                                <h4>Themexylum</h4>
                            </a>
                            <span>9 Hours Ago</span>
                        </div>
                        <span class="comment-tag buyer">Purchased</span>
                        <a href="#" class="reply-link">Reply</a>
                    </div>
                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                        interdum mollis. </p>
                </div>
            </div><!-- ends: .media -->
            <!-- nested comment markup / replies -->
            <ul class="children">
                <li class="single-thread depth-2">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <h4>AazzTech</h4>
                                <span>6 Hours Ago</span>
                            </div>
                            <span class="comment-tag author">Author</span>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                justo ut sceleris que the mattis, leo quam aliquet congue
                                placerat mi id nisi interdum mollis. </p>
                        </div>
                    </div>
                </li>

            </ul><!-- ends: .children -->
            <!-- comment reply -->
            <div class="media depth-2 reply-comment">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                    </a>
                </div>
                <div class="media-body">
                    <form action="#" class="comment-reply-form">
                        <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                        <button class="btn btn--md btn-primary">Post Comment</button>
                    </form>
                </div>
            </div><!-- comment reply -->
        </li><!-- ends: .single-thread-->
        <li class="single-thread">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                    </a>
                </div>
                <div class="media-body">
                    <div>
                        <div class="media-heading">
                            <a href="author.html">
                                <h4>EchoTheme</h4>
                            </a>
                            <span>9 Hours Ago</span>
                        </div>
                        <a href="#" class="reply-link">Reply</a>
                    </div>
                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                        interdum mollis. </p>
                </div>
            </div><!-- ends: .media -->
            <!-- nested comment markup / replies -->
            <!-- comment reply -->
            <div class="media depth-2 reply-comment">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                    </a>
                </div>
                <div class="media-body">
                    <form action="#" class="comment-reply-form">
                        <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                        <button class="btn btn--md btn-primary">Post Comment</button>
                    </form>
                </div>
            </div><!-- comment reply -->
        </li><!-- ends: .single-thread-->

    </ul><!-- ends: .media-list -->
    <!-- Start Pagination -->
    @include('partials.pagination')
    <div class="comment-form-area">
        <h4>Leave a comment</h4>
        <div class="media comment-form">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                </a>
            </div>
            <div class="media-body">
                <form action="#" class="comment-reply-form">
                    <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                    <button class="btn btn--sm btn-primary">Post Comment</button>
                </form>
            </div>
        </div><!-- ends: .comment-form -->
    </div><!-- ends: .comment-form-area -->
</div><!-- ends: .comments -->

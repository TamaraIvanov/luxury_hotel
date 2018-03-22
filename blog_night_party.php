<html>
<?php include "includes/head.php";?>
<body>
<div id="reservation_review">
    <div id="container">

        <?php include "includes/sidebar.php";?>

        <div id="content">

            <?php include "includes/header.php";?>

            <section id="blog_review_section">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20">Blog Posts</h2>
                    <a href="blog.php" class="back absolute font-weight-bold">Back</a>
                </div>

                <div id="blog_review" class="row">

                    <div class="blog_review container col-xl-7">

                        <div class="blog_container">
                            <div class="blog_content py-60 clearfix">
                                <img src="img/blog2.jpg">

                                <div class="clearfix py-30">
                                    <h4 class="float-left font-weight-bold">Night party at the pool</h4>
                                    <ul class="social py-2 mb-0 float-right">
                                        <li class="facebook float-left"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                        <li class="twitter float-left"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                        <li class="instagram float-left"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                                        <li class="youtube float-left"><i class="fa fa-youtube" aria-hidden="true"></i></li>
                                    </ul>
                                </div>

                                <p class="float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis vehicula massa.
                                    Sed sapien nulla, rhoncus non euismod ut, hendrerit non lacus. Duis egestas viverra tempor.
                                    Pellentesque sed risus id nulla tristique faucibus.
                                </p>


                                <ul class="comments float-left pb-4 w-100">

                                    <li class="float-left px-3 col-sm-4">
                                        <span>John Stivenson</span>
                                    </li>

                                    <li class="float-left px-3  col-sm-4">
                                        <span>21 Jan 2017</span>
                                    </li>

                                    <li class="float-left px-3  col-sm-4">
                                        <span>17 comments</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog_all">

                            <h4 class="py-3">All Blogs</h4>

                            <div class="comment clearfix py-4">
                                <div class="comment_content relative relative">
                                    <span class="name float-left">Steven</span>
                                    <time class="float-right pl-3">11:30</time>
                                    <span class="date float-right">03 May 2017</span>
                                    <p class="float-left pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Proin quis vehicula massa. Sed sapien nulla, rhoncus non euismod ut, hendrerit non lacus.
                                        Duis egestas viverra tempor. Pellentesque sed risus id nulla tristique faucibus.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="write_comment clearfix py-4">
                            <h4 class="py-4">Leave a comment</h4>
                            <form>
                                <textarea class="w-100 float-left mb-4" placeholder="Comment" name="comment"
                                          data-rule-required="true" data-rule-lettersonly="true" data-msg-required="This field is required !"></textarea>

                                <div class="mt-4 p-0 float-left col-12">
                                    <div class="col-md-12 col-xl-5 float-left pl-0">
                                        <label for="name" class="d-block m-0 py-20">Name</label>
                                        <input id="name" class="w-100" name="name"
                                               data-rule-required="true" data-rule-lettersonly="true" data-msg-lettersonly="Only letters please !" data-msg-required="This field is required !"/>
                                    </div>
                                    <div class="col-md-12 col-xl-7 float-left pr-0">
                                        <label for="email" class="d-block m-0 py-20">E-mail</label>
                                        <input id="email" class="w-100" name="email"
                                               data-rule-required="true" data-msg-required="This field is required !"
                                               data-rule-email="true" data-email-required="Please enter a valid email address !" />
                                    </div>
                                </div>
                                <button type="submit" class="my-5 py-2 px-5 float-right">Send</button>
                            </form>

                        </div>
                    </div>

                    <?php include "includes/blog_sidebar.php";?>
                </div>
            </section>

            <?php include "includes/footer.php";?>
        </div>
    </div>
</div>


<script>

    $(function() {

        $(".write_comment form").validate({
            messages: {
                email: {
                    email: "Your email address must be in the format of name@domain.com"
                }
            }
        });
    });

</script>

</body>
</html>
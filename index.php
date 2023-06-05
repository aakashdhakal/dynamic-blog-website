<?php
session_start();
include 'includes/navbar.php';
include 'extra-script.php';

?>
<div class="scroll-to-top">
    <i class="fas fa-arrow-up"></i>
</div>

<section id="featured-post">
    <div class="max-width">
        <div class="featured-post-wrapper">
            <?php include 'featured-post-config.php'; ?>
        </div>
    </div>
</section>
<section id="recent-post">
    <div class="max-width">
        <div class="recent-post-wrapper">
            <div class="heading-wrapper">
                <div class="heading">
                    <h1>Recent Posts</h1>
                    <a href="">View More <i class="fas fa-angles-right"></i></a>
                </div>
                <hr>
            </div>
            <div class="recent-post-card-wrapper">

                <?php include 'recent-posts-config.php'; ?>
            </div>
        </div>
    </div>
</section>
<section id="top-posts-authors">
    <div class="max-width">
        <div class="top-posts-authors-wrapper">
            <div class="top-posts-wrapper">
                <div class="heading-wrapper">
                    <div class="heading">
                        <h1>Most Liked Posts</h1>
                        <a href="">View More <i class="fas fa-angles-right"></i></a>
                    </div>
                    <hr>
                </div>
                <?php include 'top-posts-config.php'; ?>
            </div>
            <div class="top-authors-wrapper">
                <div class="top-authors">
                    <div class="heading-wrapper">
                        <div class="heading">
                            <h1>Top Authors</h1>
                            <a href="">View More <i class="fas fa-angles-right"></i></a>
                        </div>
                        <hr>
                    </div>
                    <?php include 'top-authors-config.php'; ?>
                </div>
                <!-- <div class="authors-register-form-wrapper">
                    <div class="heading-wrapper">
                        <div class="heading">
                            <h1>Want to dump content ?</h1>
                        </div>
                    </div>
                    <p>Dump your content in this site for free (applies to both parties). Send me your email and I will check back to you soon (Just acting busy)</p>
                    <form action="author-register-config.php" method="POST" class="authors-register-form">
                        <div class="input-wrapper">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-wrapper">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" name="register-submit" id="formSendBtn">Submit</button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?> <script src="JS/script.js" defer>
</script>
</body>

</html>
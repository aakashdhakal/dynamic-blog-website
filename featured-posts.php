<div class="featured-post-wrapper">
    <div class="featured-post-thumbnail">
        <img src="<?php echo $featured_thumbnail ?>" alt="">
    </div>
    <div class="featured-post-content">
        <a href="">
            <p class="post-category"><?php echo $featured_category ?></p>
        </a>
        <p class="featured-post-title"><?php echo $featured_title ?></p>

        <p class="post-content"><?php echo  $featured_content ?></p>
        <div class="author-continue">
            <div class="author-details">
                <div class="author-pic">
                    <img src="<?php echo $featured_profile ?>" alt="">
                </div>
                <div class="author-name-time">
                    <p><i class="fas fa-user-pen"></i><?php echo $featured_name ?></p>
                    <p><i class="fas fa-clock"></i><?php echo $featured_date ?></p>
                </div>

            </div>
            <a href="" id="continueReading">Continue reading <i class="fas fa-arrow-right"></i></a>
        </div>



    </div>
</div>
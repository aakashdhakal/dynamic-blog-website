<div class="blog-wrapper">
    <img src="<?php echo $recent_thumbnail ?>" alt="" class="blog-thumbnail">

    <div class="blog-content">
        <h1><?php echo $recent_title ?></h1>
        <div class="author-time">
            <div class="author-pic">
                <img src="<?php echo $recent_profile_pic ?>" alt="">
            </div>
            <div class="author-name-time">
                <p><i class="fas fa-user-pen"></i><?php echo $recent_name ?></p>
                <p> <i class="far fa-clock"></i><?php echo $recent_date ?></p>
            </div>
        </div>
        <p class="post-content"><?php echo $recent_content ?></p>
        <button id="continueReading"><a href="">Continue reading <i class="fas fa-arrow-right"></i></a></button>
    </div>

</div>
<div class="recent-post-card">
    <div class="posted-time">
        <p><?php echo $time_ago ?></p>
    </div>
    <img src="<?php echo $recent_thumbnail ?>" alt="" class="recent-post-thumbnail">
    <div class="recent-post-content-wrapper">
        <p class="recent-post-title">
            <a href="#"><?php echo $recent_title ?></a>
        </p>
        <p class="recent-post-content">
            <?php echo $recent_content ?>
        </p>
        <div class="author-name-time">
            <p><i class="fas fa-user-pen"></i><?php echo $recent_name ?></p>
        </div>
    </div>
    <div class="category">
        <p class="post-category"><?php echo $recent_category ?></p>
    </div>
</div>
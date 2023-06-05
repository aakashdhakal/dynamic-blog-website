<div class="author-details">
    <div class="author-pic">
        <img src="<?php echo $author_profile ?>" alt="">
    </div>
    <div class="author-name-time">
        <a href="" style="text-decoration: none;">
            <p class="author-name"><?php echo $author_name ?></p>
        </a>
        <p class="author-bio"><?php echo $author_bio ?></p>
        <p class="author-followers"><i class="fas fa-users"></i><?php echo $author_followers  ?></p>

    </div>
    <button id="followBtn" type="submit" data-author="<?php echo $author_username ?>" class="followBtn <?php echo $follower_class ?>"><i class="<?php echo $follower_text ?> followerStatus"></i></button>
</div>
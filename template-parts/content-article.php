

        <div class="d-flex">
        <img src="<?php the_post_thumbnail_url(); ?>" width="270px" height="270px" class="post-thumbnail">
        <div class="p-4 pe-5">
            <div class="d-flex sm-text gap-3">
                <!--<div><span style="padding:4px 12px;background:#333399;color:#fff;border-radius:2px;">Review</span></div>-->
                <div><i class="bi bi-clock me-2"></i><?php echo the_time('F j, Y'); ?></div>
                <div><i class="bi bi-chat me-2"></i><?php echo $post->comment_count; ?></div>
            </div>
            <h3 class="mt-2 fw-700"><?php the_title(); ?></h3>
            <p class="mt-4 post-description"><?php the_excerpt(); ?></p>
            <h6><a href="<?php the_permalink(); ?>">Czytaj dalej</a></h6>
        </div>
    </div>
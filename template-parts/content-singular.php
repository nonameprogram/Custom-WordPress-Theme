

        <div class="singular-article">
        <img src="<?php the_post_thumbnail_url(); ?>" width="270px" height="270px" class="post-thumbnail">
        <div class="p-4 pe-5">
            <div class="d-flex sm-text gap-3 mt-1 justify-content-center">
                <div><i class="bi bi-clock me-2"></i><?php echo the_time('F j, Y'); ?></div>
                <div><i class="bi bi-chat me-2"></i><?php echo $post->comment_count; ?></div>
            </div>
            <h3 class="mt-2 fw-700 d-flex mb-5 justify-content-center"><?php the_title(); ?></h3>
            <p class="mt-4 post-description"><?php the_content(); ?></p>
        </div>
    </div>
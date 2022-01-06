

    <div class="d-flex">
        <img src="<?php the_post_thumbnail_url(); ?>" width="100px" height="100px" class="post-thumbnail">
        <div class="ps-3">
            <h6 class="mt-2 fw-700"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <div class="d-flex sm-text gap-3">
                <!--<div><span style="padding:4px 12px;background:#333399;color:#fff;border-radius:2px;">Review</span></div>-->
                <div><i class="bi bi-clock me-2"></i><?php echo the_time('F j, Y'); ?></div>
            </div>
        </div>
    </div>
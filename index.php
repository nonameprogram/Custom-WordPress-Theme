<?php get_header(); ?>
<?php 
/*
if( have_posts() ) {
    while( have_posts() ) {
        the_post();
        the_content();

    }
};
*/
?>
<header class="p-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" style="width:40px; height:32px; margin-right:10px;">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Strona Główna</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Forum</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Kontakt</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Szukaj..." aria-label="Search">
        </form>
      </div>
    </div>
  </header>
<div class="container-fluid">
    <div class="d-md-flex flex-wrap overflow-hidden header">
        <div class="w-50 header-main-card">
            <img src="https://cdn2.unrealengine.com/egs-forspoken-luminousproductions-g1c-00-1920x1080-7d48f1092880.jpg?h=720&resize=1&w=1280" class="thumbnail">
        </div>
        <div class="d-flex flex-column w-50 header-smaller">
        <div class="d-flex flex-row" style="height:250px">
            <div class="w-50 header-smaller-card">
                <img src="https://ocdn.eu/images/pulscms/NGU7MDA_/f544180c71252d49a3c6894033f3d423.png" class="thumbnail">
            </div>
            <div class="w-50 header-smaller-card">
                <img src="https://www.miastogier.pl/baza/Encyklopedia/gry/News/21.09.2021/nws_3831112ffxivend.jpg" class="thumbnail">
            </div>
        </div>
        <div class="d-flex flex-row" style="height:250px">
            <div class="w-50 header-smaller-card">
                <img src="https://mmorpg.org.pl/system/posts/posters/000/046/539/medium/EVE_News_EN_1920x1080.jpg?1641377378" class="thumbnail">
            </div>
            <div class="w-50 header-smaller-card">
                <img src="https://mmorpg.org.pl/system/posts/posters/000/046/537/medium/270313464_432862495200481_5012400170937530063_n.png?1641369895" class="thumbnail">
            </div>
        </div>
    </div>
</div>


<div class="container pt-5 pb-5">
    <div class="d-flex latest-news">
        <div class="posts-wrapper" style="width:900px">
        <h4 class="mb-4 fw-700"><i class="bi bi-hexagon-fill gradient-font"></i> Najnowsze wpisy</h5>
        <div class="d-flex flex-column gap-5">
<?php
if(have_posts()) {
    while(have_posts()) {
        the_post();

        get_template_part('template-parts/content', 'article');
    }
}
?>
<?php the_posts_pagination( array( 
    'mid_size'  => 2,
    'before_page_number' => '<div class="page-number">',
    'after_page_number' => '</div>',
    'screen_reader_text' => ' ',
    ) );?>
</div>
        </div>

<?php if ( ! dynamic_sidebar( 'reviews' ) ) : ?>
    	
    <?php $query = new WP_Query( array( 'category_name' => 'review' ) ); 
    
    if ( $query->have_posts() ) {
        ?>

        <div class="popular-reviews" style="width:300px">
        <h4 class="mb-4 fw-700"><i class="bi bi-hexagon-fill gradient-font"></i> Popularne Recenzje</h5>
        <div class="d-flex flex-column gap-4">

        <?php
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('template-parts/content', 'review');
        }
        ?>
        </div>
        </div>
        <?php
    } else {
        echo 'Nie znaleziono postów z danej kategorii.';
    }

    wp_reset_postdata();
    ?>
   <?php endif; ?>

        </div>

    </div>
</div>
</div>

<style>
</style>


<?php get_footer(); ?>    
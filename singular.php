<?php get_header(); ?>
<header class="p-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" style="width:40px; height:32px; margin-right:10px;">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
      </div>
    </div>
  </header>

<div class="container pt-5 pb-5">
        
<?php
if(have_posts()) {
    while(have_posts()) {
        the_post();

        get_template_part('template-parts/content', 'singular');
    }
}
?>
</div>
        </div>
        
</div>
</div>

<style>
</style>


<?php get_footer(); ?>    
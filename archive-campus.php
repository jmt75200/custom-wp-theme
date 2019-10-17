<?php

get_header();
// pageBanner(array(
//   'title' => 'Our Campuses',
//   'subtitle' => 'We have several conveniently located campuses'
// ));
?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Our Campuses</h1>
      <div class="page-banner__intro">
        <p>See what is going on in our world</p>
      </div>
    </div>  
  </div>

<div class="container container--narrow page-section">

<div class="acf-map">
  <?php
    while(have_posts()) {
      the_post(); 
      $mapLocation = get_field('map_location');
      ?>
      <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>"></div>
    <?php }
    echo paginate_links();
  ?>
</div>



</div>

<?php get_footer();

?>
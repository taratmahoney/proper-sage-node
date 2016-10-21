<?php
/**
 * Template Name: Homepage Template
 */
?>

<div class="large-image-container">
    <div class="featured-homepage-image" style="background:url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>) no-repeat center right fixed; background-size: cover;"> 
    <div class="picture-gradient"></div>

    <div class="row padtop">
      <div class="small-12 large-6 columns">
        
      </div>
      <div class="small-12 large-6 columns">
        <div class="button-section">
          <h4 class="tagline"><em>Together</em> in caring</h4>
          <button>Find a caregiver</button>
          <button>Create an account</button>
          <button>Calendar of events</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-homepage-panel">
  <div class="home-featured-image-mobile" style="background:url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>) no-repeat center right scroll; background-size: cover;"> 
  </div>
 <div class="mobile-buttons">
   <div class="row">
     <div class="small-12 columns">
       <h4 class="tagline mobile-tagline"><em>Together</em> in caring</h4>
      <button>Find a caregiver</button>
      <button>Create an account</button>
      <button>Calendar of events</button>
      </div>
    </div>
  </div>
</div>

<div class="mission">
  <div class="mission-statement">
    <div class="skew">
      <div class="row padtop">
        <h2> <u style="text-decoration: none; border-bottom: 5px solid #FF8D8D;">Our mission</u> </h2>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', 'page'); ?>
          <?php endwhile; ?>
        </div>
    </div>
  </div>
</div>

<div class="latest-news padbottom">
  <div class="row padtop">
    <div class=" small-12 columns">
       <h2> <u style="text-decoration: none; border-bottom: 5px solid #FF8D8D;">Latest news</u> </h2>
    </div>
  </div>
  
  <?php  
    while (have_posts()):
      the_post();
    $my_first_category_query = new WP_Query('category_name=latest&showposts=2');
  ?>
  <?php 
  while($my_first_category_query->have_posts()):
    $my_first_category_query->the_post();
  ?>
    <div class="row padtop">
      <div class="small-12 large-4 columns">
        <a href="<?php echo get_permalink($post->ID); ?>">
            <img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>">
        </a>
      </div>
      <div class="small-12 large-8 columns">
        <div class="featured-text home-panel">
          <h3 class="preview-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h3>
          <p> <?php the_excerpt(); ?> <a href="<?php echo get_permalink($post->ID); ?>">Read more... </a></p>
        </div>
      </div>
    </div> 
  </a>
  <?php endwhile; ?>
  <?php endwhile; ?>
</div>

<div class="get-to-know-us">
  <div class="row padtop">
     <div class=" small-12 large-6 columns">
       <h2> <u style="text-decoration: none; border-bottom: 5px solid #FF8D8D;">Get to know us</u> </h2>
    <?php while (have_posts()) : the_post(); ?>
    <p> <?php echo get_post_meta($post->ID, 'get-to-know-us-blurb', true); ?></p>
    <?php endwhile; ?>

    </div>
    <div class=" small-12 large-6 columns">
      <div class="flex-video">
        <iframe width="560" height="315" src="<?php while (have_posts()) : the_post(); ?>
    <?php echo get_post_meta($post->ID, 'youtube-link', true); ?>
    <?php endwhile; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>


<div class="stay-in-touch">
  <div class="row padtop">
    <div class="small-12 columns">
        <h2> <u style="text-decoration: none; border-bottom: 5px solid #FF8D8D;">Stay in touch with CCPRN</u> </h2>
      </div>
  </div>
  <div class="row padtop padbottom">
    <div class="small-12 large-6 columns">
      <h5>Sign up for the latest updates from CCPRN:</h5>
    </div>
    <div class="small-12 large-6 columns">
      <h5> Connect with us online:</h5>
      <p>
      <i class="fa fa-facebook-official" aria-hidden="true"></i>
      <i class="fa fa-twitter-square" aria-hidden="true"></i>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      </p>
    </div>
</div>


  

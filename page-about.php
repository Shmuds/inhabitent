<?php
    /* Template Name: About Template*/
 get_header();
?>
<section class="about-page">
  <h2 class="ourstory">Our Story</h2>
    <div class="about-ourstory">
      <?php echo CFS()->get('about_our_story'); ?>
    </div>
  <h2 class="ourteam">Our Team</h2>
    <div class="about-ourteam">
      <?php echo CFS()->get('about_our_team'); ?>
    </div>
</section>



<?php
 get_footer();

 ?>

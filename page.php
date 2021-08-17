<?php
get_header();

the_post();     //used to display posts or static pages


?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/b.jpg);">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row no-gutters slider-text align-items-center justify-content-center">
 			<div class="col-md-9 ftco-animate text-center">
 				<h1 class="mb-2 bread"><?php the_title();?></h1>
 				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title();?> <i class="ion-ios-arrow-forward"></i></span></p>
 			</div>
 		</div>
 	</div>
 </section>

 <!-- display sidebar in the page -->
<?php
get_sidebar();
?>
<h2><?php the_title(); ?></h2>
<?php the_excerpt();   ?>

<!-- applied for about us page -->
 <?php
        the_post_thumbnail(array(500,500));
 ?>

 <?php
 	the_content();
 ?>

<?php
get_footer();
?>
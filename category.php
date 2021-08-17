<?php get_header();
?>
<h1><?php the_category(); ?></h1>
<?php
while (have_posts()) {
the_post();

$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo $imagepath[0]; ?>' )">

                        <div class="meta-date text-center p-2" style="color: white;">
                          <?php echo get_the_date(); ?>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#"><?php echo the_title();?></a></h3>
                        <p><?php the_excerpt();?></p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="<?php the_permalink();?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
        }
?>

<?php 
wp_pagenavi();
?>
        <?php get_footer();?>
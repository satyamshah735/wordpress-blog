<?php

// Template Name: news

get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;    //used to search page number from url


$searchData='';

if(isset($_GET["title"]))
{
    $searchData= $_GET['title'];
}

?>

  
<form method="GET">
    <input type="text" name="title" value="<?php echo $searchData;?>" placeholder="Search By Name" 
    style="width: 250px; padding: 10px; margin-left: 20px;">

    <input type="submit" name="submit" value="Submit">
    

</form>

<!-- Latest News starts from here -->

<h1>Latest News</h1>
<?php
    $wpnews=array(
            'post_type'=>'news',
            'post_status'=>'publish',
            's'=>$searchData,
            'posts_per_page'=>1,
            'paged'=>$paged
    );

    $newsquery= new Wp_Query($wpnews);

    while ($newsquery->have_posts()) {
        $newsquery->the_post();
        $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); //getting imagepath



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

<!-- Latest News ends here -->

<?php

wp_pagenavi(array('query'=>$newsquery));

?>

<?php

get_footer();
?>
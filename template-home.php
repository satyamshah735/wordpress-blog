 <?php 
 //Template Name: home
 get_header();

// getting categories to homepage and linking it 
$cat= get_categories(array('taxonomy'=>'category'));

// echo "<pre>";
// print_r($cat);
// echo "</pre>";


 ?>
 
 <h3>Organic Foods Category</h3>

<?php
    foreach ($cat as $catvalue) 
    {
        
    
?>
<ul>
    <a href="<?php echo get_category_link($catvalue->term_id); ?>">
        <li><?php echo $catvalue->name;?>(<?php echo $catvalue->count ; ?>)</li>
    </a>
</ul>

<?php
    }
?>

<!-- end of categories to homepage and linking it  -->


 <section class="home-slider owl-carousel" id="main-img">
 	<div class="slider-item" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/b.jpg);">
 		<div class="overlay"></div>
 		<div class="container">
 			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
 				<div class="col-lg-6 col-md-8 ftco-animate main-text-marg">
 					<h1 class="mb-4">Education Needs Complete Solution</h1>
 					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
 					<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">View More</a></p>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>


<!-- latest news category starts from here -->

 <h3>Latest News Category</h3>

 <?php
        $newsCat=get_terms(array('taxonomy'=>'news_category','hide_empty'=>false,
            'orderby'=>'ID','order'=>'DESC', 'parent'=>0));
        // echo "<pre>";
        // print_r($newsCat);
        // echo "</pre>";
 ?>

 <?php
    foreach ($newsCat as $newsCatvalue) 
    {
        $meta_image = get_wp_term_image($newsCatvalue->term_id);        
    
?>

 <ul>
        <?php
        if(empty($meta_image))
        {

        ?>
             <a href="<?php echo get_category_link($newsCatvalue->term_id); ?>">
                <li><?php echo $newsCatvalue->name;?>(<?php echo $newsCatvalue->count ; ?>)</li>
            </a>

        <?php
        }
        else
        {
        ?>
            <img src="<?php echo $meta_image; ?>" width=400>
             <a href="<?php echo get_category_link($newsCatvalue->term_id); ?>">
                <li><?php echo $newsCatvalue->name;?>(<?php echo $newsCatvalue->count ; ?>)</li>
            </a>

        <?php
        }
        ?>
 </ul>

<?php 
    } 
    ?>


<!-- latest news category ends here -->





<!-- display posts by category starts from here -->

 <h3>Display Posts by Category of Latest News</h3>

 <?php
        $newsCat=get_terms(array('taxonomy'=>'news_category','hide_empty'=>false,
            'orderby'=>'ID','order'=>'DESC', 'parent'=>0));
        // echo "<pre>";
        // print_r($newsCat);
        // echo "</pre>";
 
    foreach ($newsCat as $newsCatvalue):
        $meta_image = get_wp_term_image($newsCatvalue->term_id);        
    
?>

 <ul>
       
     <a href="<?php echo get_category_link($newsCatvalue->term_id); ?>">
        <li><?php echo $newsCatvalue->name;?></li>
    </a>

 </ul>


    <?php


    $wpnews=array(
            'post_type'=>'news',
            'post_status'=>'publish',
            'tax_query'=>array(
                array(
                    'taxonomy'=>'news_category',
                    'field'=>'term_id',
                    'terms'=>$newsCatvalue->term_id
                    )


            )

    );

    $newsquery= new WP_Query($wpnews);

    while ($newsquery->have_posts()):
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
            endwhile;
        endforeach;
        ?>





<!-- display posts by category ends here -->












 <section class="ftco-services ftco-section bg-light">
 	<div class="container">
 		<div class="row justify-content-center mb-5 gap-all pb-2">
 			<div class="col-md-8 text-center heading-section ftco-animate">
 				<h2 class="mb-4">Services</h2> <!-- <span>Recent</span>Events</h2> -->
 				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 			</div>
 		</div>
 		<div class="row btn-center">
 			<div class="col-lg-3 col-md-6 serv-wrap d-flex services align-self-stretch ftco-animate">
 				<div class="media bg-primary block-6 d-block text-center py-5 px-4">
 					<div class="icon d-flex justify-content-center align-items-center">
 						<span class="flaticon-teacher"></span>
 					</div>
 					<div class="media-body p-2 mt-3">
 						<h3 class="heading">Certified Teachers</h3>
 						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
 						<a class="read-more" href="#">Read More</a>
 					</div>
 				</div>      
 			</div>
 			<div class="col-lg-3 col-md-6 serv-wrap d-flex services align-self-stretch ftco-animate">
 				<div class="media block-6 d-block text-center py-5 px-4 bg-darken">
 					<div class="icon d-flex justify-content-center align-items-center">
 						<span class="flaticon-reading"></span>
 					</div>
 					<div class="media-body p-2 mt-3">
 						<h3 class="heading">Special Education</h3>
 						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
 						<a class="read-more" href="#">Read More</a>
 					</div>
 				</div>    
 			</div>
 			<div class="col-lg-3 col-md-6 serv-wrap d-flex services align-self-stretch ftco-animate">
 				<div class="media bg-primary block-6 d-block text-center py-5 px-4 ">
 					<div class="icon d-flex justify-content-center align-items-center">
 						<span class="flaticon-books"></span>
 					</div>
 					<div class="media-body p-2 mt-3">
 						<h3 class="heading">Book &amp; Library</h3>
 						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
 						<a class="read-more" href="#">Read More</a>
 					</div>
 				</div>      
 			</div>
 			<div class="col-lg-3 col-md-6 serv-wrap d-flex services align-self-stretch ftco-animate">
 				<div class="media block-6 d-block text-center py-5 px-4 bg-darken">
 					<div class="icon d-flex justify-content-center align-items-center">
 						<span class="flaticon-diploma"></span>
 					</div>
 					<div class="media-body p-2 mt-3">
 						<h3 class="heading">Sport Clubs</h3>
 						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
 						<a class="read-more" href="#">Read More</a>
 					</div>
 				</div>      
 			</div>
 			<div class="main-btn col-lg-12"><a href="#" class="btn btn-primary px-4 py-3">View More</a>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-section">
 	<div class="container">
 		<div class="row d-flex">
 			<div class="col-lg-5 col-md-hidden order-md-last wrap-about wrap-about d-flex align-items-stretch">
 				<div class="img" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/b.jpg); border"></div>
 			</div>
 			<div class="col-lg-7 col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
 				<h2 class="mb-4">About Us</h2>
 				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
 				<div class="row mt-5">
 					<div class="col-lg-12">
 						<div class="services-2 d-flex">
 							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
 							<div class="text pl-3">
 								<h3>Mission</h3>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia.The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
 							</div>
 						</div>
 					</div>
 					<div class="col-lg-12">
 						<div class="services-2 d-flex">
 							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
 							<div class="text pl-3">
 								<h3>Visions</h3>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>


 <section class="ftco-section ftco-counter img message-sec" id="section-counter" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/b.jpg);" data-stellar-background-ratio="0.5">
 	<div class="container">
 		<div class="row justify-content-center msg-pad mb-5 pb-2 d-flex">
 			<div class="col-lg-4 col-md-6 align-items-stretch d-flex">
 				<div class="img img-video d-flex msg-img align-items-center" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/prof.jpg);">
 				</div>
 			</div>
 			<div class="col-lg-8 col-md-12 msg-box-des heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
 				<h2 class="mb-4">Message From Principal</h2>
 				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
 				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
 				<div class="prof-des" align="right">
 					<h4 class="msg-name">Nakendra Pun</h4>
 					<h5 class="msg-desg">Principal</h5>
 				</div>
 			</div>
 		</div>
 	</section>

 	<section class="ftco-section bg-light">
 		<div class="container">
 			<div class="row justify-content-center mb-5 gap-all pb-2">
 				<div class="col-md-8 text-center heading-section ftco-animate">
 					<h2 class="mb-4">Events</h2> <!-- <span>Recent</span>Events</h2> -->
 					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 				</div>
 			</div>
 			<div class="row btn-center">
 				<div class="col-md-4 col-lg-4 ftco-animate">
 					<div class="blog-entry">
 						<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/e1.jpg');">
 							<div class="meta-date text-center p-2">
 								<span class="day">26</span>
 								<span class="mos">June</span>
 								<span class="yr">2019</span>
 							</div>
 						</a>
 						<div class="text bg-white p-4">
 							<h3 class="heading"><a href="#">Art Competition</a></h3>
 							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 							<div class="d-flex align-items-center mt-4">
 								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="col-md-4 col-lg-4 ftco-animate">
 					<div class="blog-entry">
 						<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/e2.png');">
 							<div class="meta-date text-center p-2">
 								<span class="day">26</span>
 								<span class="mos">June</span>
 								<span class="yr">2019</span>
 							</div>
 						</a>
 						<div class="text bg-white p-4">
 							<h3 class="heading"><a href="#">Extracurricular Activities</a></h3>
 							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 							<div class="d-flex align-items-center mt-4">
 								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="col-md-4 col-lg-4 ftco-animate">
 					<div class="blog-entry">
 						<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/e3.jpg');">
 							<div class="meta-date text-center p-2">
 								<span class="day">26</span>
 								<span class="mos">June</span>
 								<span class="yr">2019</span>
 							</div>
 						</a>
 						<div class="text bg-white p-4">
 							<h3 class="heading"><a href="#">Inter-School poem Competition</a></h3>
 							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 							<div class="d-flex align-items-center mt-4">
 								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="main-btn col-lg-12"><a href="#" class="btn btn-primary px-4 py-3">View More</a>
 				</div>
 			</div>

 		</div>
 	</section>

 	<section class="ftco-gallery ftco-section" id="gal-video">
 		<div class="container-fluid px-4">
 			<div class="row justify-content-center mb-5 gap-all pb-2">
 				<div class="col-md-8 text-center heading-section ftco-animate">
 					<h2 class="mb-4">Videos</h2> <!-- <span>Recent</span>Events</h2> -->
 					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 				</div>
 			</div>
 			<div class="row btn-center">
 				<div class="col-lg-3 col-md-6 ftco-animate video-pad">
 					<a href="#" class="gallery image-popup img d-flex align-items-center video-pad-wrap">
 						<iframe src="https://www.youtube.com/embed/QS7OmnOXNt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 					</a>
 				</div>
 				<div class="col-lg-3 col-md-6 ftco-animate video-pad">
 					<a href="#" class="gallery image-popup img d-flex align-items-center video-pad-wrap">
 						<iframe src="https://www.youtube.com/embed/XYGBx4ecltw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 					</a>
 				</div>
 				<div class="col-lg-3 col-md-6 ftco-animate video-pad">
 					<a href="#" class="gallery image-popup img d-flex align-items-center video-pad-wrap">
 						<iframe src="https://www.youtube.com/embed/QS7OmnOXNt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 					</a>
 				</div>
 				<div class="col-lg-3 col-md-6 ftco-animate video-pad">
 					<a href="#" class="gallery image-popup img d-flex align-items-center video-pad-wrap">
 						<iframe src="https://www.youtube.com/embed/XYGBx4ecltw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 					</a>
 				</div>
 				<div class="main-btn col-lg-12"><a href="#" class="btn btn-primary px-4 py-3">View More</a>
 				</div>
 			</div>
 		</div>
 	</section>


 	<section class="ftco-section bg-light">
 		<div class="container-fluid px-4">
 			<div class="row justify-content-center mb-5 gap-all pb-2">
 				<div class="col-md-8 text-center heading-section ftco-animate">
 					<h2 class="mb-4">Articles</h2><!-- <span>Articles  /</span>  Programs</h2> -->
 					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 				</div>
 			</div>	
 			<div class="row btn-center">
 				<div class="col-lg-3 col-md-6 col-xs-12 course ftco-animate">
 					<div class="img" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/course-1.jpg);"></div>
 					<div class="art-text art-text text pt-4">
 						<p class="meta d-flex">
 							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
 							<!-- <span><i class="icon-table mr-2"></i>10 seats</span> -->
 							<span><i class="icon-calendar mr-2"></i>4 Years</span>
 						</p>
 						<h3><a href="#">Electric Engineering</a></h3>
 						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 						<p><a href="#" class="btn btn-primary">View More</a></p>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-6 col-xs-12 course ftco-animate">
 					<div class="img" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/course-2.jpg);"></div>
 					<div class="art-text text pt-4">
 						<p class="meta d-flex">
 							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
 							<!-- <span><i class="icon-table mr-2"></i>10 seats</span> -->
 							<span><i class="icon-calendar mr-2"></i>4 Years</span>
 						</p>
 						<h3><a href="#">Electric Engineering</a></h3>
 						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 						<p><a href="#" class="btn btn-primary">View More</a></p>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-6 col-xs-12 course ftco-animate">
 					<div class="img" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/course-3.jpg);"></div>
 					<div class="art-text text pt-4">
 						<p class="meta d-flex">
 							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
 							<!-- <span><i class="icon-table mr-2"></i>10 seats</span> -->
 							<span><i class="icon-calendar mr-2"></i>4 Years</span>
 						</p>
 						<h3><a href="#">Electric Engineering</a></h3>
 						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 						<p><a href="#" class="btn btn-primary">View More</a></p>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-6 col-xs-12 course ftco-animate">
 					<div class="img" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/course-4.jpg);"></div>
 					<div class="art-text text pt-4">
 						<p class="meta d-flex">
 							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
 							<!-- <span><i class="icon-table mr-2"></i>10 seats</span> -->
 							<span><i class="icon-calendar mr-2"></i>4 Years</span>
 						</p>
 						<h3><a href="#">Electric Engineering</a></h3>
 						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 						<p><a href="#" class="btn btn-primary">View More</a></p>
 					</div>
 				</div>
 				<div class="main-btn col-lg-12"><a href="#" class="btn btn-primary px-4 py-3">View More</a>
 				</div>
 			</div>
 		</div>
 	</section>

<!--  <section class="ftco-section bg-light">
 	<div class="container-fluid px-4">
 		<div class="row justify-content-center mb-5 gap-all pb-2">
 			<div class="col-md-8 text-center heading-section ftco-animate">
 				<h2 class="mb-4">Certified Teachers</h2>
 				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 			</div>
 		</div>	
 		<div class="row">
 			<div class="col-md-6 col-lg-3 ftco-animate">
 				<div class="staff">
 					<div class="img-wrap d-flex align-items-stretch">
 						<div class="img align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-1.jpg);"></div>
 					</div>
 					<div class="text pt-3 text-center">
 						<h3>Bianca Wilson</h3>
 						<span class="position mb-2">Teacher</span>
 						<div class="faded">
 							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
 							<ul class="ftco-social text-center">
 								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
 							</ul>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-lg-3 ftco-animate">
 				<div class="staff">
 					<div class="img-wrap d-flex align-items-stretch">
 						<div class="img align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-2.jpg);"></div>
 					</div>
 					<div class="text pt-3 text-center">
 						<h3>Mitch Parker</h3>
 						<span class="position mb-2">English Teacher</span>
 						<div class="faded">
 							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
 							<ul class="ftco-social text-center">
 								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
 							</ul>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-lg-3 ftco-animate">
 				<div class="staff">
 					<div class="img-wrap d-flex align-items-stretch">
 						<div class="img align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-3.jpg);"></div>
 					</div>
 					<div class="text pt-3 text-center">
 						<h3>Stella Smith</h3>
 						<span class="position mb-2">Art Teacher</span>
 						<div class="faded">
 							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
 							<ul class="ftco-social text-center">
 								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
 							</ul>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-lg-3 ftco-animate">
 				<div class="staff">
 					<div class="img-wrap d-flex align-items-stretch">
 						<div class="img align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-4.jpg);"></div>
 					</div>
 					<div class="text pt-3 text-center">
 						<h3>Monshe Henderson</h3>
 						<span class="position mb-2">Science Teacher</span>
 						<div class="faded">
 							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
 							<ul class="ftco-social text-center">
 								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
 								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
 							</ul>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>


 <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row justify-content-end">
 			<div class="col-md-6 py-5 px-md-5">
 				<div class="py-md-5">
 					<div class="heading-section heading-section-white ftco-animate mb-5 gap-all">
 						<h2 class="mb-4">Request A Quote</h2>
 						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 					</div>
 					<form action="#" class="appointment-form ftco-animate">
 						<div class="d-md-flex">
 							<div class="form-group">
 								<input type="text" class="form-control" placeholder="First Name">
 							</div>
 							<div class="form-group ml-md-4">
 								<input type="text" class="form-control" placeholder="Last Name">
 							</div>
 						</div>
 						<div class="d-md-flex">
 							<div class="form-group">
 								<div class="form-field">
 									<div class="select-wrap">
 										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
 										<select name="" id="" class="form-control">
 											<option value="">Select Your Course</option>
 											<option value="">Art Lesson</option>
 											<option value="">Language Lesson</option>
 											<option value="">Music Lesson</option>
 											<option value="">Sports</option>
 											<option value="">Other Services</option>
 										</select>
 									</div>
 								</div>
 							</div>
 							<div class="form-group ml-md-4">
 								<input type="text" class="form-control" placeholder="Phone">
 							</div>
 						</div>
 						<div class="d-md-flex">
 							<div class="form-group">
 								<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
 							</div>
 							<div class="form-group ml-md-4">
 								<input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
 							</div>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </section> -->



 <section class="ftco-section testimony-section">
 	<div class="container">
 		<div class="row justify-content-center mb-5 gap-all pb-2">
 			<div class="col-md-8 text-center heading-section ftco-animate">
 				<h2 class="mb-4">Student Says About Us</h2>
 				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
 			</div>
 		</div>
 		<div class="row ftco-animate justify-content-center">
 			<div class="col-md-12">
 				<div class="carousel-testimony owl-carousel">
 					<div class="item">
 						<div class="testimony-wrap d-flex">
 							<div class="user-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-1.jpg)">
 							</div>
 							<div class="text ml-2">
 								<span class="quote d-flex align-items-center justify-content-center">
 									<i class="icon-quote-left"></i>
 								</span>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 								<p class="name">Racky Henderson</p>
 								<span class="position">Father</span>
 							</div>
 						</div>
 					</div>
 					<div class="item">
 						<div class="testimony-wrap d-flex">
 							<div class="user-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-2.jpg)">
 							</div>
 							<div class="text ml-2">
 								<span class="quote d-flex align-items-center justify-content-center">
 									<i class="icon-quote-left"></i>
 								</span>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 								<p class="name">Henry Dee</p>
 								<span class="position">Mother</span>
 							</div>
 						</div>
 					</div>
 					<div class="item">
 						<div class="testimony-wrap d-flex">
 							<div class="user-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-3.jpg)">
 							</div>
 							<div class="text ml-2">
 								<span class="quote d-flex align-items-center justify-content-center">
 									<i class="icon-quote-left"></i>
 								</span>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 								<p class="name">Mark Huff</p>
 								<span class="position">Mother</span>
 							</div>
 						</div>
 					</div>
 					<div class="item">
 						<div class="testimony-wrap d-flex">
 							<div class="user-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-4.jpg)">
 							</div>
 							<div class="text ml-2">
 								<span class="quote d-flex align-items-center justify-content-center">
 									<i class="icon-quote-left"></i>
 								</span>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 								<p class="name">Rodel Golez</p>
 								<span class="position">Mother</span>
 							</div>
 						</div>
 					</div>
 					<div class="item">
 						<div class="testimony-wrap d-flex">
 							<div class="user-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/teacher-1.jpg)">
 							</div>
 							<div class="text ml-2">
 								<span class="quote d-flex align-items-center justify-content-center">
 									<i class="icon-quote-left"></i>
 								</span>
 								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 								<p class="name">Ken Bosh</p>
 								<span class="position">Mother</span>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-gallery">
 	<div class="container-wrap">
 		<div class="row no-gutters">
 			<div class="col-md-3 ftco-animate">
 				<a href="<?php echo get_template_directory_uri();?>/assets/images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/h.jpg);">
 					<div class="icon mb-4 d-flex align-items-center justify-content-center">
 						<span class="icon-instagram"></span>
 					</div>
 				</a>
 			</div>
 			<div class="col-md-3 ftco-animate">
 				<a href="<?php echo get_template_directory_uri();?>/assets/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/b.jpg);">
 					<div class="icon mb-4 d-flex align-items-center justify-content-center">
 						<span class="icon-instagram"></span>
 					</div>
 				</a>
 			</div>
 			<div class="col-md-3 ftco-animate">
 				<a href="<?php echo get_template_directory_uri();?>/assets/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/i.jpg);">
 					<div class="icon mb-4 d-flex align-items-center justify-content-center">
 						<span class="icon-instagram"></span>
 					</div>
 				</a>
 			</div>
 			<div class="col-md-3 ftco-animate">
 				<a href="<?php echo get_template_directory_uri();?>/assets/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/j.jpg);">
 					<div class="icon mb-4 d-flex align-items-center justify-content-center">
 						<span class="icon-instagram"></span>
 					</div>
 				</a>
 			</div>
 		</div>
 	</div>
 </section>

 <?php get_footer();?>





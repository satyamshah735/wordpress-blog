<?php
get_header();
the_post();
?>


<h1>
<?php
	the_title();
?>
</h1>

<?php
$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id());
?>


	<img src="<?php echo $imagepath[0]; ?>" width='600px' >

<p><?php echo get_the_date();?></p>
<p><?php the_author();?></p>


<?php
	the_content();
?>

<!-- to display the comment box and list of comments -->
<?php
comments_template();
?>




<?php
get_footer();
?>

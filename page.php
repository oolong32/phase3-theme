<?php get_header(); ?>

<ul class="all_pages_nav">
	<?php $pages = get_pages(); // display all pages titles as menü mit ankerlinks zack zack!
	foreach ($pages as $page_data) {
		$slug = $page_data->post_name;
	   	echo "<li class='$slug page_box'>"; // page_box, um styles auf einzelne boxen anzuwenden
		echo "<a href='#$slug'>$title</a>";
		echo "</li>";
	}
	?>
</ul>
<div class="all_pages_at_once">
	<?php $pages = get_pages(); // display all pages at once! cool cool cool
	foreach ($pages as $page_data) {
	    $content = apply_filters('the_content', $page_data->post_content);
	    $title = $page_data->post_title;
		$slug = $page_data->post_name;
		echo "<div class='section'>";
	   	echo "<div id='$slug' class='$slug page_box'>"; // page_box, um styles auf einzelne boxen anzuwenden
		echo "<h2>$title</h2>";
		echo $content;
		echo "</div>";
		echo "</div>";
	}
	?>
</div>
<?php get_footer(); ?>



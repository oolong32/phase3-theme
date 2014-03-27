<!-- begin sidebar -->
<ul id="sidebar">
	<?php 	/* Widgetized sidebar */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li id="search">	
		   		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div>
						<input type="text" name="s" id="s" size="15" /><br />
						<? /*<input type="submit" value="<?php _e('Search'); ?>" />*/?>
					</div>
				</form>
			</li>
			<?php wp_list_pages(); ?>
			<?php get_links_list(); ?>
			<li id="categories"><?php _e('Categories:'); ?>
				<ul>
					<?php wp_list_cats(); ?>
				</ul>
		 	</li>

			<li id="archives"><?php _e('Archives:'); ?>
		 		<ul>
			 		<?php wp_get_archives('type=monthly'); ?>
		 		</ul>
		 	</li>
		 	<li id="feeds"><?php _e('Feeds'); ?>
		 		<ul>
					<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr> Contents'); ?></a></li>
					<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				</ul>
			</li>
		 	<li id="meta"><?php _e('Meta:'); ?>
		 		<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php /*
					<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
					*/?>
		 			<?php wp_meta(); ?>
				</ul>
		 	</li>
		 	<?php /*
		 	<li id="calendar"><?php _e('Calendar:'); ?>
		 		<ul>
			 		<li><?php get_calendar(daylength); ?></li>
		 		</ul>
		 	</li>
		 	*/ ?>
		 	<?php endif; ?>

	<li id="rss-feeds"><h2>News Feeds</h2>
		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
			<li><a href="<?php bloginfo('atom_url'); ?>">Atom</a></li>
		</ul>
	</li>
</ul>
<!-- end sidebar -->

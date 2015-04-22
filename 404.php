<?php get_header(); ?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">

			<div class="type-page">
			
				<h2 class="page-title"><?php _e('Fehler 404: Seite nicht gefunden', 'dynamicnewslite'); ?></h2>
				
				<div class="entry">
					<p><?php _e('Die aufgerufene Seite existiert nicht oder wurde verschoben. Bitte benutze das Menü oder die Suchfunktion um das zu finden nachdem du suchst.', 'dynamicnewslite'); ?></p>
					
					<h2><?php _e('Suche', 'dynamicnewslite'); ?></h2>
					<?php get_search_form(); ?>

					<h2><?php _e('Letzte Beiträge', 'dynamicnewslite'); ?></h2>
					<ul>
						<?php
							$recent_posts = wp_get_recent_posts(array('numberposts' => '8', 'post_status' => 'publish'));
							foreach( $recent_posts as $recent ) {
								echo '<li><a href="' . esc_url(get_permalink($recent['ID'])) . '" title="Look '.esc_attr($recent['post_title']).'" >' . $recent['post_title'] . '</a></li>';
							}
						?>
					</ul>
					
					<h2><?php _e('Seiten', 'dynamicnewslite'); ?></h2>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
				
			</div>

		</section>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
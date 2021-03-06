<?php ss_get_template_part( 'templates/head' ); ?>
<body <?php body_class('noise'); ?> data-smooth-scrolling="1" data-responsive="1">
<div class="main-holder">

		<a href="#content" class="sr-only"><?php _e( 'Skip to main content', 'shoestrap' ); ?></a>
		<?php global $ss_framework; ?>

		<!--[if lt IE 8]>
			<?php echo $ss_framework->alert( 'warning', __(' You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'shoestrap' ) ); ?>
		<![endif]-->

		<?php do_action( 'get_header' ); ?>

		<?php do_action( 'shoestrap_pre_top_bar' ); ?>

		<?php ss_get_template_part( apply_filters( 'shoestrap_top_bar_template', 'templates/top-bar' ) ); ?>

		<?php do_action( 'shoestrap_pre_wrap' ); ?>

		<?php
			$options = get_post_custom($wp_query->queried_object->ID);
    		$top_offset = $options['_webuza_header_style'][0] == 'style1' ? 'top-offset' : '';
    		$header_class = $options['_webuza_header_style'][0] == 'style1' ? 'page-title' : 'page-header';
		?>

		<?php echo $ss_framework->open_container( 'div', false, sprintf('content-holder %s', $top_offset)); ?>

			<?php do_action( 'shoestrap_pre_content' ); ?>

			<?php if($options['_webuza_header_show'][0] == 'on') shoestrap_title_section( true, 'h1', false, $header_class, $wp_query->queried_object->ID); ?>

			<?php if(is_page_template('template-home.php') || is_page_template('template-portfolio.php') || is_page_template('template-portfolio-2x.php') || is_page_template('template-portfolio-3x.php') || is_page_template('template-portfolio-4x.php')): ?>

				<?php include shoestrap_template_path(); ?>
			<?php else:?>

				<section class="content-page">

					<?php if(!is_page_template('template-full.php')): ?>
						<div class="container">
					<?php endif; ?>

						<?php echo $ss_framework->open_row( 'div', null, 'bg' ); ?>

							<?php do_action( 'shoestrap_pre_main' ); ?>

							<main class="main <?php echo apply_filters( 'shoestrap_section_class_main', 'col-md-7' ); ?>" <?php if (is_home()){ echo 'id="home-blog"';} ?> role="main">
								<?php include shoestrap_template_path(); ?>
							</main><!-- /.main -->

							<?php do_action( 'shoestrap_after_main' ); ?>

							<?php if ( shoestrap_display_primary_sidebar() && is_active_sidebar('sidebar-primary')) : ?>
								<aside id="sidebar-primary" class="sidebar <?php shoestrap_section_class( 'primary', true ); ?>" role="complementary">
									<?php if ( ! has_action( 'shoestrap_sidebar_override' ) ) {
										include shoestrap_sidebar_path();
									} else {
										do_action( 'shoestrap_sidebar_override' );
									} ?>
								</aside><!-- /.sidebar -->
							<?php endif; ?>

							<?php do_action( 'shoestrap_post_main' ); ?>

							<?php if ( shoestrap_display_secondary_sidebar() ) : ?>
								<aside id="sidebar-secondary" class="sidebar secondary <?php shoestrap_section_class( 'secondary', true ); ?>" role="complementary">
									<?php dynamic_sidebar( 'sidebar-secondary' ); ?>
								</aside><!-- /.sidebar -->
							<?php endif; ?>
							<?php echo $ss_framework->clearfix(); ?>
						<?php echo $ss_framework->close_row( 'div' ); ?>

					<?php if(!is_page_template('template-full.php')): ?>
						</div><!-- /.container -->
					<?php endif; ?>

				</section><!-- /.content-page -->

			<?php endif; ?>
			<?php do_action( 'shoestrap_after_content' ); ?>

		<?php echo $ss_framework->close_container( 'div' ); ?><!-- /.content-holder -->

	</div>

	<?php

		do_action( 'shoestrap_pre_footer' );

		if ( ! has_action( 'shoestrap_footer_override' ) ) {
			ss_get_template_part( 'templates/footer' );
		} else {
			do_action( 'shoestrap_footer_override' );
		}

		do_action( 'shoestrap_after_footer' );

		wp_footer();

		?>
</body>
</html>

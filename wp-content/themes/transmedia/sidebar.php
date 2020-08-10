	<!-- Sidebar
    ============================================= -->
	<div class="sidebar nobottommargin col_last clearfix">
		<div class="sidebar-widgets-wrap">
			<?php
			// Dysplay Company Factory Side Bar
			if ( is_active_sidebar ( 'cf_sidebar' )) {
				dynamic_sidebar ( 'cf_sidebar' );
			}

			?>
		</div>
	</div><!-- .sidebar end -->
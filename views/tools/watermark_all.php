
				<h3><?php _e('Bulk Watermark', 'wp-easy-watermark'); ?></h3>

				<div id="ew-info">
					<div id="message" class="updated below-h2">
					<?php if(current_user_can('edit_others_posts')): ?>
						<p><?php _e('You are about to watermark all images in the library. This action can not be undone. Are you sure you want to do this?', 'wp-easy-watermark'); ?></p>
					<?php else : ?>
						<p><?php _e('You are about to watermark all images you have uploaded ever. This action can not be undone. Are you sure you want to do this?', 'wp-easy-watermark'); ?></p>
					<?php endif; ?>
					</div>

					<a class="button-primary" href="#" id="watermark-all-proceed"><?php _e('Proceed', 'wp-easy-watermark'); ?></a> <a class="button-secondary" href="<?php echo admin_url('/upload.php?page=easy-watermark'); ?>"><?php _e('Cancel', 'wp-easy-watermark'); ?></a>
				</div>

				<div id="ew-finished" class="updated below-h2">
					<p><?php echo sprintf(__('%s images watermarked.', 'wp-easy-watermark'), '<span class="count"></span>'); ?> <?php echo sprintf(__('%s or %s'), '<a href="' . admin_url('upload.php?page=easy-watermark') . '">' . __('Go back', 'wp-easy-watermark') . '</a>', '<a href="' . admin_url('upload.php') . '">' . __('Go to Media Library', 'wp-easy-watermark') . '</a></p>'); ?>
				</div>

				<div id="ew-progress"><div class="progress-label"><?php _e('Starting...', 'wp-easy-watermark'); ?></div></div>

				<div id="ew-status">
					<p><?php echo sprintf(__('Processed %s of %s images', 'wp-easy-watermark'), '<span class="progress"></span>', '<span class="total"></span>'); ?></p>
					<p><?php echo sprintf(__('Duration: %s', 'wp-easy-watermark'), '<strong><span class="ew-timer">0</span></strong>'); ?></p>
				</div>

				<div id="ew-console"></div>

		<div class="postbox">
			<h3><?php _e('About', 'wp-easy-watermark'); ?></h3>
			<div class="inside">
				<p><?php _e('Plugin Version', 'wp-easy-watermark'); ?>: <strong><?php echo WP_EW_Plugin::getVersion();?></strong></p>
				<p><?php _e('Plugin Author', 'wp-easy-watermark'); ?>: <a href="mailto:wojtek@szalkiewicz.pl">Wojtek Szałkiewicz</a></p>
				<p><?php if(WP_EW_Plugin::isGDEnabled()) : _e('GD library is enabled.', 'wp-easy-watermark'); else : ?><span style="color:red;"><?php _e('GD library is not available! Easy Watermark can\'t work without it.', 'wp-easy-watermark'); ?></span><?php endif; ?></p>
				<?php if(!WP_EW_Plugin::isFreeTypeEnabled()) : ?><p><span style="color:red;"><?php _e('FreeType extension is not available! You will not be able to use text watermark.', 'wp-easy-watermark'); ?></span></p><?php endif; ?>
				<a href="http://wordpress.org/extend/plugins/easy-watermark" target="_blank">
				<?php _e('Plugin page in WP repository', 'wp-easy-watermark'); ?></a><br/>
				<a href="http://wordpress.org/extend/plugins/easy-watermark/faq" target="_blank">
				<?php _e('FAQ', 'wp-easy-watermark'); ?></a><br/>
				<a href="http://wordpress.org/support/plugin/easy-watermark" target="_blank">
				<?php _e('Support', 'wp-easy-watermark'); ?></a><br/><br/>
				<strong><?php _e('Want to buy me a coffee?', 'wp-easy-watermark'); ?></strong>
				<?php include dirname(__FILE__) . '/donation.php'; ?>
			</div><!-- .inside -->
		</div>

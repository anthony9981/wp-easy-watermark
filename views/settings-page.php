
	<div class="wrap easy-watermark">
		<div class="has-right-sidebar">
			<?php include dirname(__FILE__) . WPEWDS . 'settings-sidebar.php'; ?>
			<div id="post-body-content" class="has-sidebar-content">
			<h1><?php _e('Easy Watermark Settings', 'wp-easy-watermark'); ?></h1>
			<h2 class="nav-tab-wrapper">
			<?php
				foreach ( $this->tabs as $name => $caption ) {
					$active = $current_tab == $name ? 'nav-tab-active' : '';
					echo '<a class="nav-tab ' . $active . '" href="?page=' . $this->plugin->getSlug() . '-settings&tab=' . $name . '">' . $caption . '</a>';
				}
			?></h2>
			<?php if($current_tab=='text' && !WP_EW_Plugin::isFreeTypeEnabled()): ?>
				<h3><span style="color:red;"><?php _e('FreeType extension is not available. To use text watermark please install FreeType extension.', 'wp-easy-watermark'); ?></span></h3>
			<?php else: ?>

			<form method="post" action="options.php" id="wp-easy-watermark-settings-form">
				<?php settings_fields('wp-easy-watermark-settings-' . $current_tab); ?>
				<?php
					$filename = dirname(__FILE__) . WPEWDS . 'settings-form-' . $current_tab . '.php';
					if(file_exists($filename))
						include $filename;
				?>
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
				</p>
			</form>
			<?php endif; ?>
			</div>
		</div>
	</div>

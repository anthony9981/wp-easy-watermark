			<div id="titlediv">
				<input type="text" value="<?php echo $text; ?>" id="title" placeholder="<?php _e('Watermark Text', 'wp-easy-watermark'); ?>" name="wp-easy-watermark-settings-text[text]" />
				<p class="description"><?php _e('You can use placeholders. See help.', 'wp-easy-watermark'); ?></p>
			</div>
			<?php $class = empty($text) ? ' class="hidden"' : ''; ?>
			<?php if(WP_EW_Plugin::isGDEnabled()) : ?>
			<div<?php echo $class; ?> id="ew-preview-row"><?php _e('Preview', 'wp-easy-watermark'); ?><br/>
				<div id="text-preview" style="width:100%; overflow:auto;">
						<img id="ew-text-preview" src="<?php echo admin_url('options-general.php?page=wp-easy-watermark-settings&tp=1'); ?>">
				</div>
			</div>
			<?php endif; ?>

			<table class="form-table">
				<tr valign="top" class="watermark-options"><th scope="row"><?php _e('Text Alignment', 'wp-easy-watermark'); ?></th><td>
					<div id="alignmentbox">
					<label for="alignment-1" id="alignment-1-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="1" id="alignment-1" <?php checked('1', $alignment); ?> /></label>
					<label for="alignment-2" id="alignment-2-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="2" id="alignment-2" <?php checked('2', $alignment); ?> /></label>
					<label for="alignment-3" id="alignment-3-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="3" id="alignment-3" <?php checked('3', $alignment); ?> /></label>
					<label for="alignment-4" id="alignment-4-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="4" id="alignment-4" <?php checked('4', $alignment); ?> /></label>
					<label for="alignment-5" id="alignment-5-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="5" id="alignment-5" <?php checked('5', $alignment); ?> /></label>
					<label for="alignment-6" id="alignment-6-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="6" id="alignment-6" <?php checked('6', $alignment); ?> /></label>
					<label for="alignment-7" id="alignment-7-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="7" id="alignment-7" <?php checked('7', $alignment); ?> /></label>
					<label for="alignment-8" id="alignment-8-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="8" id="alignment-8" <?php checked('8', $alignment); ?> /></label>
					<label for="alignment-9" id="alignment-9-label"><input type="radio" name="wp-easy-watermark-settings-text[alignment]" value="9" id="alignment-9" <?php checked('9', $alignment); ?> /></label>
					</div>
				</td></tr>
				<tr valign="top" class="watermark-options"><th scope="row"><?php _e('Text Offset', 'wp-easy-watermark'); ?></th><td>
					<label for="easy-watermark-position-offset_x"><?php _e('x', 'wp-easy-watermark'); ?>: </label>
					<input size="3" type="text" id="easy-watermark-offset_x" name="wp-easy-watermark-settings-text[offset_x]" value="<?php echo $offset_x; ?>" /><br />
					<label for="easy-watermark-position-offset_y"><?php _e('y', 'wp-easy-watermark'); ?>: </label>
					<input type="text" size="3" id="easy-watermark-offset_y" name="wp-easy-watermark-settings-text[offset_y]" value="<?php echo $offset_y; ?>"/><p class="description"><?php _e('Offset can be defined in pixels (just numeric value) or as percentage (e.g. \'33%\')', 'wp-easy-watermark'); ?></p>
				</td></tr>
				<tr><th scope="row"><?php _e('Font', 'wp-easy-watermark'); ?></th><td>
					<select name="wp-easy-watermark-settings-text[font]" id="ew-font">
						<?php foreach($fonts as $val => $name) : ?>
						<option value="<?php echo $val; ?>" style="font-family:<?php echo $name; ?>!important;font-size:1.2em;" <?php selected($val, $font); ?>><?php echo $name; ?></option>
						<?php endforeach; ?>
					</select>
				</td></tr>
				<tr><th scope="row"><?php _e('Text Color', 'wp-easy-watermark'); ?></th><td>
					<?php
						$c = rgbToHsl($color);
						if($c[2] < 0.5) $txtcolor = 'white';
						else $txtcolor = 'black';
					?>
					<input style="background-color:<?php echo $color; ?>;color:<?php echo $txtcolor; ?>" type="text" maxlength="7" size="7" name="wp-easy-watermark-settings-text[color]" id="ew-color" value="<?php echo $color; ?>" />
					<!--<div id="colorselector"><div style="background-color:#<?php echo $color; ?>"></div></div> -->
				</td>
				<tr><th scope="row"><?php _e('Text Size', 'wp-easy-watermark'); ?></th><td>
					<input type="text" size="3" name="wp-easy-watermark-settings-text[size]" id="ew-size" value="<?php echo $size; ?>" /> pt
				</td>
				</tr>
				<tr><th scope="row"><?php _e('Text Angle', 'wp-easy-watermark'); ?></th><td>
					<input type="text" size="3" name="wp-easy-watermark-settings-text[angle]" id="ew-angle" value="<?php echo $angle; ?>" /> &deg;
				</td>
				</tr>
				<tr><th scope="row"><?php _e('Opacity', 'wp-easy-watermark'); ?></th><td>
					<input type="text" size="3" name="wp-easy-watermark-settings-text[opacity]" id="ew-opacity" value="<?php echo $opacity; ?>" /> %
				</td>
				</tr>
                <?php
                    $c = rgbToHsl($bg_color);
                    if($c[2] < 0.5) $bg_textcolor = 'white';
                    else $bg_textcolor = 'black';
                ?>
                <tr><th scope="row"><?php _e('Background color', 'wp-easy-watermark'); ?></th><td>
                        <input style="background-color:<?php echo $bg_color; ?>;color:<?php echo $bg_textcolor; ?>" type="text" maxlength="7" size="7" name="wp-easy-watermark-settings-text[bg_color]" id="ew-text-bg-color" value="<?php echo $bg_color; ?>" />
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Background padding', 'wp-easy-watermark'); ?></th>
                    <td>
                        <input type="text" size="3" name="wp-easy-watermark-settings-text[bg_padding]" id="ew-bg-padding" value="<?php echo $bg_padding; ?>" /> px
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Background opacity', 'wp-easy-watermark'); ?></th>
                    <td>
                        <input type="text" size="3" name="wp-easy-watermark-settings-text[bg_opacity]" id="ew-bg-opacity" value="<?php echo $bg_opacity; ?>" /> %
                    </td>
                </tr>
			</table>

<?php function rgbToHsl($r, $g = null, $b = null){
	if(empty($g)){
		if(strpos($r, '#') === 0) $r = substr($r, 1);
		$g = hexdec(substr($r, 2, 2));
		$b = hexdec(substr($r, 4, 2));
		$r = hexdec(substr($r, 0, 2));
	}

	$oldR = $r;
	$oldG = $g;
	$oldB = $b;

	$r /= 255;
	$g /= 255;
	$b /= 255;

    $max = max( $r, $g, $b );
	$min = min( $r, $g, $b );

	$h;
	$s;
	$l = ( $max + $min ) / 2;
	$d = $max - $min;

    	if( $d == 0 ){
        	$h = $s = 0; // achromatic
    	} else {
        	$s = $d / ( 1 - abs( 2 * $l - 1 ) );

		switch( $max ){
	            case $r:
	            	$h = 60 * fmod( ( ( $g - $b ) / $d ), 6 );
	            	break;

	            case $g:
	            	$h = 60 * ( ( $b - $r ) / $d + 2 );
	            	break;

	            case $b:
	            	$h = 60 * ( ( $r - $g ) / $d + 4 );
	            	break;
	        }
	}

	return array($h, $s, $l);
}
?>

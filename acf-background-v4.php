<?php

class acf_field_background extends acf_field
{
	// vars
	var $settings, // will hold info such as dir / path
		$defaults; // will hold default field options


	/*
	*  __construct
	*
	*  Set name / label needed for actions / filters
	*
	*  @since	3.6
	*  @date	23/01/13
	*/

	function __construct()
	{
		// vars
		$this->name = 'background';
		$this->label = __('Background');
		$this->category = __("Design",'acf'); // Basic, Content, Choice, etc
		/*$this->defaults = array(
			// add default here to merge into your field.
			// This makes life easy when creating the field options as you don't need to use any if( isset('') ) logic. eg:
			//'preview_size' => 'thumbnail'
		);*/
		$this->defaults = array(
            'background_repeat' => 1,
            'background_size' => 1,
            'background_attachment' => 1,
            'background_position' => 1,
            'background_color' => 1,
            'background_image' => 1,
            'background_gradient' => 1,
            'background_clip' => 1,
            'background_origin' => 1,
            'preview_media' => 1,
            'preview' => 1,
            'preview_height' => '200px',
        );


		// do not delete!
    	parent::__construct();


    // settings
		$this->settings = array(
			'path' => apply_filters('acf/helpers/get_path', __FILE__),
			'dir' => apply_filters('acf/helpers/get_dir', __FILE__),
			'version' => '1.0.0'
		);

	}


	/*
	*  create_options()
	*
	*  Create extra options for your field. This is rendered when editing a field.
	*  The value of $field['name'] can be used (like bellow) to save extra data to the $field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field	- an array holding all the field's data
	*/

	function create_options($field)
	{
		// defaults?
		$field = array_merge($this->defaults, $field);

		// key is needed in the field names to correctly save the data
		$key = $field['name'];


		// Create Field Options HTML
		?>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Color?", 'acf'); ?></label>
		<p class="description">Flag to display background color input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_color]',
			'value'   =>  $field['background_color'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Repeat?", 'acf'); ?></label>
		<p class="description">Flag to display background repeat input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_repeat]',
			'value'   =>  $field['background_repeat'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Size?", 'acf'); ?></label>
		<p class="description">Flag to display background size input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_size]',
			'value'   =>  $field['background_size'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Attachment?", 'acf'); ?></label>
		<p class="description">Flag to display background attachment input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_attachment]',
			'value'   =>  $field['background_attachment'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Position?", 'acf'); ?></label>
		<p class="description">Flag to display background position input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_position]',
			'value'   =>  $field['background_position'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Image?", 'acf'); ?></label>
		<p class="description">Flag to display background image field.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_image]',
			'value'   =>  $field['background_image'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Gradient?", 'acf'); ?></label>
		<p class="description">Flag to display background gradient input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_gradient]',
			'value'   =>  $field['background_gradient'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Clip?", 'acf'); ?></label>
		<p class="description">Flag to display background clip input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_clip]',
			'value'   =>  $field['background_clip'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Background Origin?", 'acf'); ?></label>
		<p class="description">Flag to display background origin input.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][background_origin]',
			'value'   =>  $field['background_origin'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Preview?", 'acf'); ?></label>
		<p class="description">Flag to display background preview.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][preview]',
			'value'   =>  $field['preview'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Show Preview Media?", 'acf'); ?></label>
		<p class="description">Flag to display background media preview.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'radio',
			'name'    =>  'fields[' . $key . '][preview_media]',
			'value'   =>  $field['preview_media'],
			'layout'  =>  'horizontal',
			'choices' =>  array(
				1 => __('Yes', 'acf'),
				0 => __('No', 'acf'),
			)
		));

		?>
	</td>
</tr>
<tr class="field_option field_option_<?php echo $this->name; ?>">
	<td class="label">
		<label><?php _e("Preview Height", 'acf'); ?></label>
		<p class="description">Height of preview panel.</p>
	</td>
	<td>
		<?php

		do_action('acf/create_field', array(
			'type'    =>  'text',
			'name'    =>  'fields[' . $key . '][preview_height]',
			'value'   =>  $field['preview_height'],
			'layout'  =>  'horizontal',
		));

		?>
	</td>
</tr>
		<?php

	}


	/*
	*  create_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field - an array holding all the field's data
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function create_field( $field )
	{
		$_field = $field;
		// defaults
		$field = array_merge($this->defaults, $field);

		$value = $field['value'];
	?>
		<div class="rey-main">
			<div class="rey-container-background" id="container-background">
	<?php
		if ($field['background_color'] == 1) {
	?>
			<input data-id="<?php print $field['id']; ?>" name="<?php print $field['name']; ?>[background-color]" id="<?php print $field['id']; ?>-color" class="rey-color rey-background-input rey-color-init <?php print $field['class']; ?>" type="text" value="<?php print $value['background-color']; ?>" data-default-color="#ffffff" />

	<?php

			if ($field['background_repeat'] == 1 OR $field['background_position'] == 1 OR $field['background_attachment'] == 1) {
				echo '<br />';
			}
		}

		if ($field['background_repeat'] == 1) {
			$array = array(
				'no-repeat' => 'No Repeat',
				'repeat' 	=> 'Repeat All',
				'repeat-x' 	=> 'Repeat Horizontally',
				'repeat-y' 	=> 'Repeat Vertically',
				'inherit'	=> 'Inherit',
			);
	?>
			<select id="<?php print $field['id']; ?>-repeat-select" data-placeholder="<?php print __("Background Repeat","acf"); ?>" name="<?php print $field['name']; ?>[background-repeat]" class="rey-select-item rey-background-input background-repeat <?php print $field['class']; ?>">
				<option value=""><?php echo __("Background Repeat","acf"); ?></option>
	<?php
				foreach ($array as $k=>$v) {
	?>
					<option value="<?php print $k; ?>" <?php print selected($value['background-repeat'], $k, false); ?>><?php print $v; ?></option>
	<?php
				}
	?>
			</select>
	<?php
		}

		if ($field['background_clip'] == 1) {
			$array = array(
				'border-box' 	=> 'Border Box',
				'padding-box' 	=> 'Padding Box',
				'content-box' 	=> 'Content Box',
				'inherit'	=> 'Inherit',
			);
	?>
			<select id="<?php print $field['id']; ?>-repeat-select" data-placeholder="<?php print __("Background Clip","acf"); ?>" name="<?php print $field['name']; ?>[background-clip]" class="rey-select-item rey-background-input background-clip <?php print $field['class']; ?>">
                <option value=""><?php echo __("Background Clip","acf"); ?></option>
	<?php
				foreach ($array as $k=>$v) {
	?>
					<option value="<?php print $k; ?>" <?php print selected($value['background-clip'], $k, false); ?>><?php print $v; ?></option>
	<?php
				}
	?>
			</select>
	<?php
		}

		if ($field['background_origin'] == 1) {
			$array = array(
				'border-box' 	=> 'Border Box',
				'content-box' 	=> 'Content Box',
				'padding-box' 	=> 'Padding Box',
				'inherit'	=> 'Inherit',
			);
	?>
			<select id="<?php print $field['id']; ?>-repeat-select" data-placeholder="<?php print __("Background Origin","acf"); ?>" name="<?php print $field['name']; ?>[background-origin]" class="rey-select-item rey-background-input background-origin <?php print $field['class']; ?>">
                <option value=""><?php echo __("Background Origin","acf"); ?></option>
	<?php
				foreach ($array as $k=>$v) {
	?>
					<option value="<?php print $k; ?>" <?php print selected($value['background-origin'], $k, false); ?>><?php print $v; ?></option>
	<?php
				}
	?>
			</select>
	<?php
		}

		if ($field['background_size'] == 1) {
            $array = array(
                'cover' 	=> 'Cover',
                'contain' 	=> 'Contain',
				'inherit'	=> 'Inherit',
            );
            
            echo '<select id="'.$field['id'].'-repeat-select" data-placeholder="' . __( 'Background Size', 'acf' ) . '" name="' . $field['name'] . '[background-size]' . '" class="rey-select-item rey-background-input background-size '.$field['class'].'">';
            echo '<option value="">' . __("Background Size","acf") . '</option>';

	            foreach ($array as $k=>$v) {
	                echo '<option value="'. $k .'"'.selected($value['background-size'], $k, false).'>'. $v .'</option>';
	            }
            echo '</select>';
        }

        if ( $field['background_attachment'] == 1 ) {
            $array = array(
                'scroll' 	=> 'Scroll',
                'fixed' 	=> 'Fixed',
                'local' 	=> 'Local',
				'inherit'	=> 'Inherit',
            );
            echo '<select id="'.$field['id'].'-attachment-select" data-placeholder="' . __( 'Background Attachment', 'acf' ) . '" name="' . $field['name'] . '[background-attachment]' . '" class="rey-select-item rey-background-input background-attachment '.$field['class'].'">';
            echo '<option value="">' . __("Background Attachment","acf") . '</option>';

                foreach ($array as $k=>$v) {
                    echo '<option value="'. $k .'"'.selected($value['background-attachment'], $k, false).'>'. $v .'</option>';
                }
            echo '</select>';
        }

        if ( $field['background_position'] == 1 ) {
            $array = array(
                'left top' 		=> 'Left Top',
                'left center' 	=> 'Left center',
                'left bottom' 	=> 'Left Bottom',
                'center top' 	=> 'Center Top',
                'center center' => 'Center Center',
                'center bottom' => 'Center Bottom',
                'right top' 	=> 'Right Top',
                'right center' 	=> 'Right center',
                'right bottom' 	=> 'Right Bottom',
                'inherit' 		=> 'Inherit',
            );
            echo '<select id="'.$field['id'].'-position-select" data-placeholder="' . __( 'Background Position', 'acf' ) . '" name="' . $field['name'] . '[background-position]' . '" class="rey-select-item rey-background-input background-position '.$field['class'].'">';
	            echo '<option value="">' . __("Background Position","acf") . '</option>';

                foreach ($array as $k=>$v) {
                    echo '<option value="'. $k .'"'.selected($value['background-position'], $k, false).'>'. $v .'</option>';
                }
            echo '</select>';
        }

        if ($field['background_image'] == 1) {
            echo '<br />';

            /*if( empty( $value ) && !empty( $this->defaults ) ) { // If there are standard values and value is empty
                if( is_array( $this->defaults ) ) {
                    if( !empty( $this->defaults['media']['id'] ) ) {
                      $value['media']['id'] = $this->defaults['media']['id'];
                    } else if( !empty( $this->defaults['id'] ) ) {
                      $value['media']['id'] = $this->defaults['id'];
                    }

                    if( !empty( $this->field['default']['url'] ) ) {
                      $this->value['background-image'] = $this->field['default']['url'];
                    } else if( !empty( $this->field['default']['media']['url'] ) ) {
                      $this->value['background-image'] = $this->field['default']['media']['url'];
                    } else if( !empty( $this->field['default']['background-image'] ) ) {
                      $this->value['background-image'] = $this->field['default']['background-image'];
                    }
      
                } else {
                    if( is_numeric( $this->field['default'] ) ) { // Check if it's an attachment ID
                        $this->value['media']['id'] = $this->field['default'];
                    } else { // Must be a URL
                        $this->value['background-image'] = $this->field['default'];
                    }           
                }
            }*/


            if( empty( $value['background-image'] ) && !empty( $value['media']['id'] ) ) {
                $img = wp_get_attachment_image_src( $value['media']['id'], 'full' );
                $value['background-image'] = $img[0];
                $value['media']['width'] = $img[1];
                $value['media']['height'] = $img[2];
            }

            $hide = 'hide ';

            if( (isset( $field['preview_media'] ) && $field['preview_media'] == 0) ) {
                $field['class'] .= " noPreview";
            }

            if( ( !empty( $field['background-image'] ) && $field['background-image'] == 1 ) || isset( $field['preview'] ) && $field['preview'] == 0 ) {
                $hide = '';
            }   

            $placeholder = isset($field['placeholder']) ? $field['placeholder'] : __('No media selected','acf');

            echo '<input placeholder="' . $placeholder .'" type="text" class="rey-background-input ' . $hide . 'upload ' . $field['class'] . '" name="' . $field['name'] . '[background-image]' . '" id="' . $field['name'] . '[' . $field['id'] . '][background-image]" value="' . $value['background-image'] . '" />';
            echo '<input type="hidden" class="upload-id ' . $field['class'] . '" name="' . $field['name'] . '[media][id]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][id]" value="' . $value['media']['id'] . '" />';
            echo '<input type="hidden" class="upload-height" name="' . $field['name'] . '[media][height]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][height]" value="' . $value['media']['height'] . '" />';
            echo '<input type="hidden" class="upload-width" name="' . $field['name'] . '[media][width]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][width]" value="' . $value['media']['width'] . '" />';
            echo '<input type="hidden" class="upload-thumbnail" name="' . $field['name'] . '[media][thumbnail]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][thumbnail]" value="' . $value['media']['thumbnail'] . '" />';

            //Preview
            $hide = '';

            if( ($field['preview_media'] == 1 && $field['preview_media'] == 0) || ($value['background-image'] == '') ) {
                $hide = 'hide ';
            }

            if ( $value['media']['thumbnail'] == '' && !empty( $value['background-image'] ) ) { // Just in case
                if ( !empty( $value['media']['id'] ) ) {
                    $image = wp_get_attachment_image_src( $value['media']['id'], array(150, 150) );
                    $value['media']['thumbnail'] = $image[0];
                } else {
                    $value['media']['thumbnail'] = $value['background-image'];    
                }
            }

            echo '<div class="' . $hide . 'screenshot">';
            echo '<a class="of-uploaded-image" href="' . $value['background-image'] . '" target="_blank">';
            echo '<img class="rey-option-image" id="image_' . $value['media']['id'] . '" src="' . $value['media']['thumbnail'] . '" alt="" target="_blank" rel="external" />';
            echo '</a>';
            echo '</div>';
        
            //Upload controls DIV
            echo '<div class="upload_button_div">';

            //If the user has WP3.5+ show upload/remove button
            echo '<span class="button background_upload_button" id="' . $field['id'] . '-media">' . __( 'Upload', 'acf' ) . '</span>';
            
            $hide = '';
            if( empty( $value['background-image'] ) || $value['background-image'] == '' )
                $hide =' hide';

            echo '<span class="button remove-image' . $hide . '" id="reset_' . $field['id'] . '" rel="' . $field['id'] . '">' . __( 'Remove', 'acf' ) . '</span>';

            echo '</div>';
        }

        if (!isset( $field['preview'] ) || $field['preview'] != 0) {
            $css = $this->getCSS($_field);
            if (empty($css)) {
                $css = "display:none;";
            }
            $css .= "height: ".$field['preview_height'].";";
            echo '<p class="clear '.$field['id'].'_previewer background-preview" style="'.$css.'">&nbsp;</p>';

        }
    ?>
    		</div>
    	</div>
    <?php
	}

	function getCSS($field) {
        $css = '';
        if (!empty($field['value'])) {
            foreach($field['value'] as $key=>$value) {
                if (!empty($value) && $key != "media" && $key!='color-transparency') {
                    if ($key == "background-image") {
                        $css .= $key.":url('".$value."');";
                    } else {
                        $css .= $key.":".$value.";";
                    }
                    
                }
            }
        }
        return $css;
    }


	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add css + javascript to assist your create_field() action.
	*
	*  $info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function input_admin_enqueue_scripts()
	{
		// Note: This function can be removed if not used

		// register acf scripts
		wp_register_script('acf-input-background', $this->settings['dir'] . 'js/field_background.js', array('acf-input'), $this->settings['version']);
		wp_register_style('acf-input-background', $this->settings['dir'] . 'css/field_background.css', array('acf-input'), $this->settings['version']);


		// scripts
		wp_enqueue_script(array(
			'acf-input-background',
		));

		// styles
		wp_enqueue_style(array(
			'acf-input-background',
		));

	}


	/*
	*  input_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is created.
	*  Use this action to add css and javascript to assist your create_field() action.
	*
	*  @info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_head
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function input_admin_head()
	{
		// Note: This function can be removed if not used
	}


	/*
	*  field_group_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is edited.
	*  Use this action to add css + javascript to assist your create_field_options() action.
	*
	*  $info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function field_group_admin_enqueue_scripts()
	{
		// Note: This function can be removed if not used
	}


	/*
	*  field_group_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is edited.
	*  Use this action to add css and javascript to assist your create_field_options() action.
	*
	*  @info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_head
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function field_group_admin_head()
	{
		// Note: This function can be removed if not used
	}


	/*
	*  load_value()
	*
	*  This filter is appied to the $value after it is loaded from the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value - the value found in the database
	*  @param	$post_id - the $post_id from which the value was loaded from
	*  @param	$field - the field array holding all the field options
	*
	*  @return	$value - the value to be saved in te database
	*/

	function load_value($value, $post_id, $field)
	{
		// Note: This function can be removed if not used
		return $value;
	}


	/*
	*  update_value()
	*
	*  This filter is appied to the $value before it is updated in the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value - the value which will be saved in the database
	*  @param	$post_id - the $post_id of which the value will be saved
	*  @param	$field - the field array holding all the field options
	*
	*  @return	$value - the modified value
	*/

	function update_value($value, $post_id, $field)
	{
		// Note: This function can be removed if not used
		return $value;
	}


	/*
	*  format_value()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is passed to the create_field action
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value	- the value which was loaded from the database
	*  @param	$post_id - the $post_id from which the value was loaded
	*  @param	$field	- the field array holding all the field options
	*
	*  @return	$value	- the modified value
	*/

	function format_value($value, $post_id, $field)
	{
		// defaults?
		/*
		$field = array_merge($this->defaults, $field);
		*/

		// perhaps use $field['preview_size'] to alter the $value?


		// Note: This function can be removed if not used
		return $value;
	}


	/*
	*  format_value_for_api()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is passed back to the api functions such as the_field
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value	- the value which was loaded from the database
	*  @param	$post_id - the $post_id from which the value was loaded
	*  @param	$field	- the field array holding all the field options
	*
	*  @return	$value	- the modified value
	*/

	function format_value_for_api($value, $post_id, $field)
	{
		// defaults?
		/*
		$field = array_merge($this->defaults, $field);
		*/

		// perhaps use $field['preview_size'] to alter the $value?


		// Note: This function can be removed if not used
		return $value;
	}


	/*
	*  load_field()
	*
	*  This filter is appied to the $field after it is loaded from the database
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field - the field array holding all the field options
	*
	*  @return	$field - the field array holding all the field options
	*/

	function load_field($field)
	{
		// Note: This function can be removed if not used
		return $field;
	}


	/*
	*  update_field()
	*
	*  This filter is appied to the $field before it is saved to the database
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field - the field array holding all the field options
	*  @param	$post_id - the field group ID (post_type = acf)
	*
	*  @return	$field - the modified field
	*/

	function update_field($field, $post_id)
	{
		// Note: This function can be removed if not used
		return $field;
	}


}

// create field
new acf_field_background();

?>
